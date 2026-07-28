<?php

// Vercel Serverless PHP Entrypoint for CodeIgniter 4

$_ENV['VERCEL'] = 'true';
$_SERVER['VERCEL'] = 'true';

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

require __DIR__ . '/../public/index.php';
