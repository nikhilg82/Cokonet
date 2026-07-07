<?php
// Newsletter signups (footer form).
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); echo '{"ok":false}'; exit; }
$in = json_decode(file_get_contents('php://input'), true) ?: $_POST;
$email = filter_var((string)($in['email'] ?? ''), FILTER_VALIDATE_EMAIL);
if (!$email) { http_response_code(422); echo '{"ok":false}'; exit; }
$dir = __DIR__ . '/../storage';
if (!is_dir($dir)) { mkdir($dir, 0755, true); }
$fp = fopen($dir . '/subscribers.csv', 'a');
if ($fp) { flock($fp, LOCK_EX); fputcsv($fp, [date('c'), $email, substr((string)($in['page'] ?? ''), 0, 160)]); flock($fp, LOCK_UN); fclose($fp); }
echo '{"ok":true}';
