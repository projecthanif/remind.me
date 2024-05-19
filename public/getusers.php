<?php

use Core\App;

require_once __DIR__ . '/index.php';
require_once __DIR__ . '/../app/App.php';

$conn = App::db();

$id = (int)$_GET['id'];
$stmt = $conn->query("SELECT * FROM todo WHERE list_id = {$id}");

$result = $stmt->fetch_assoc();
var_dump($id);
var_dump($result);