<?php include('../Admin/db/conection.php');

$statement = $pdo->prepare("select * FROM users");
$statement->execute();
