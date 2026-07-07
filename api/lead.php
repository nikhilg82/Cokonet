<?php
// Lead capture: counselling modal + message forms.
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); echo '{"ok":false}'; exit; }
$in = json_decode(file_get_contents('php://input'), true) ?: $_POST;
$name  = trim(substr((string)($in['name'] ?? ''), 0, 120));
$phone = trim(substr(preg_replace('/[^0-9+ ]/', '', (string)($in['phone'] ?? '')), 0, 20));
$email = filter_var((string)($in['email'] ?? ''), FILTER_VALIDATE_EMAIL) ?: '';
$interest = trim(substr((string)($in['interest'] ?? ''), 0, 160));
$pagep = trim(substr((string)($in['page'] ?? ''), 0, 160));
$source = trim(substr((string)($in['source'] ?? 'website'), 0, 60));
$msg = trim(substr((string)($in['message'] ?? ''), 0, 2000));
if ($name === '' && $phone === '' && $email === '') { http_response_code(422); echo '{"ok":false}'; exit; }
$row = [date('c'), $source, $name, $phone, $email, $interest, $pagep, str_replace(["\r","\n"], ' ', $msg)];
$dir = __DIR__ . '/../storage';
if (!is_dir($dir)) { mkdir($dir, 0755, true); }
$fp = fopen($dir . '/leads.csv', 'a');
if ($fp) { flock($fp, LOCK_EX); fputcsv($fp, $row); flock($fp, LOCK_UN); fclose($fp); }
// Optional email notification. Configure a real mailer (SMTP) in production.
$to = 'training@cokonet.com';
@mail($to, 'New website lead: ' . ($interest ?: 'General'), implode("\n", [
  'Name: ' . $name, 'Phone: ' . $phone, 'Email: ' . $email,
  'Interest: ' . $interest, 'Page: ' . $pagep, 'Message: ' . $msg,
]), 'From: no-reply@cokonet.com');
echo '{"ok":true}';
