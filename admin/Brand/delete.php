<?php
$_id =$_GET['id'];

//var_dump($_GET);

//conect to database
$conn = new PDO("mysql:host=localhost;dbname=ecommerceseip",
    'root', '');
//set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);

$query="DELETE FROM `brands` WHERE `brands`.`id` = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$result = $stmt->execute();
var_dump($result);