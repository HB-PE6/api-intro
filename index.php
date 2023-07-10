<?php
require_once __DIR__ . '/data/users.php';

header('Access-Control-Allow-Origin: http://127.0.0.1:5500');
header('Content-Type: application/json; charset=UTF-8');

echo json_encode($users);
