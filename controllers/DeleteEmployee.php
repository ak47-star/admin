<?php include('../db/conection.php');
$id = $_GET['id'];
$where = ['id' => $id];
$pdo->prepare("DELETE FROM users WHERE id=:id")->execute($where);
header("Location: http://employee.local/index.php", true, 301);