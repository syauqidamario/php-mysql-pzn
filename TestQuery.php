<?php

require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);
foreach ($result as $row) {
      var_dump($row);
}

$conn = null;
