<?php

require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

$conn->exec("INSERT INTO comments(email, comment) VALUES ('yasunobu@gmail.com', 'general kenobi')");
$id = $conn->lastInsertId();

var_dump($id);
$conn = null;
