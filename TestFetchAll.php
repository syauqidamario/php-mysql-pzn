<?php
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = "SELECT * FROM customers";
$result = $connection->query($sql);
$customers = $result->fetchAll();

var_dump($customers);
