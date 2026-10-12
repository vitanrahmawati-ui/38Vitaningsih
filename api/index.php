<?php

// Handle Vercel request
$_GET['url'] = $_GET['url'] ?? ltrim($_SERVER['REQUEST_URI'], '/');

// Load Laravel framework
require __DIR__ . '/../public/index.php';
