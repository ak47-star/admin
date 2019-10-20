<?php include('../db/conection.php');?>

<?php
$id = $_GET['id'];
$row = [
    'username' => $_POST['name'],
    'gender' => $_POST['gender'],
    'email' => $_POST['email'],
    'position' => $_POST['position'],
    'address' => $_POST['address'],
    'birth' => $_POST['birth']
];

$sql = " update users set username=:username, gender=:gender, email=:email, position=:position, address=:address,birth=:birth WHERE id="."'$id'";

$pdo->prepare($sql)->execute($row);
header("Location: http://employee.local/index.php", true, 301);
