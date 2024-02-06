<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = 'admin';
$password = 'admin';

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$res = $connection->prepare($sql);
$res->execute([$username, $password]);

if ($row = $result->fetch()) {
      echo "Success logging in : " . $row['username'] . PHP_EOL;
} else {
      echo "Failed logging in" . PHP_EOL;
}
