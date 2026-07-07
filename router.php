<?php
// Local dev router: php -S localhost:8080 router.php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $uri;
if ($uri !== '/' && file_exists($file) && !is_dir($file)) { return false; }
if ($uri === '/') { require __DIR__.'/index.php'; return true; }
$php = __DIR__ . rtrim($uri, '/') . '.php';
if (file_exists($php)) { require $php; return true; }
http_response_code(404); require __DIR__.'/404.php'; return true;
