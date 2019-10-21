<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=employee', 'root', '');
   } catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>

