<?php

require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

$conn->beginTransaction();

$conn->exec("INSERT INTO comments (email, comment) VALUES ('sheldon@gmail.com', 'eidetic')");
$conn->exec("INSERT INTO comments (email, comment) VALUES ('leonard@gmail.com', 'experiment')");
$conn->exec("INSERT INTO comments (email, comment) VALUES ('howard@gmail.com', 'install')");

// $conn->commit();
// $conn = null;
$conn->rollBack();
$conn = null;
