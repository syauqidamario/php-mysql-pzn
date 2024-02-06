<?php
$host = "localhost";
$port = 3306;
$database = "learn_php_database";
$username = "root";
$password = "";

try {
      $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
      echo "Successfully connected" . PHP_EOL;
      $connection = null;
} catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage() . PHP_EOL;
}
