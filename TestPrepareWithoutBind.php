<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "syauqi";
$password = "secret";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);

$success = false;
$find_user = null;
foreach ($statement as $row) {
      // sukses
      $success = true;
      $find_user = $row["username"];
}

if ($success) {
      echo "Sukses logging in : " . $find_user . PHP_EOL;
} else {
      echo "Failed logging in" . PHP_EOL;
}

$connection = null;
