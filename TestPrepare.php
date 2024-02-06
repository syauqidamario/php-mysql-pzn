<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "syauqi";
$password = "wrong";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->bindParam(1, $username);
$statement->bindParam(2, $password);
$statement->execute();

$success = false;
$find_user = null;
foreach ($statement as $row) {
      // sukses
      $success = true;
      $find_user = $row["username"];
}

if ($success) {
      echo "Sucessfully logging in : " . $find_user . PHP_EOL;
} else {
      echo "Failed logging in" . PHP_EOL;
}

$connection = null;

//Binding parameter
//All user inputs will be quote() by prepare statement
//This made the prepare statement user safer.

//Binding parameter with index
//Binding parameter with numbers, change :parametername with ?
//Use index number when doing bindingParam(index, value)