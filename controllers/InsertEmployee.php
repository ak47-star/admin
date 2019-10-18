<?php include('../db/conection.php')?>

<?php
 $row = [
 	'name' => $_POST['username'],
 	'birth' => $_POST['birth'],
 	'gender' => $_POST['gender'],
 	'email' => $_POST['email'],
 	'position' => $_POST['position'],
 	'address' => $_POST['address']
 ];

$sql = 'insert into users SET username=:name, gender=:gender, email=:email, position=:position, address=:address,birth=:birth';
$status = $pdo->prepare($sql)->execute($row);

header("Location: http://employee.local/index.php", true, 301);