<?php
$_id = $_POST['id'];
$_title = $_POST['title'];


//Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=ecommerceseip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Insert query
$query = "UPDATE `product` SET `title` = :title WHERE `product`.`id` = :id;";
$stmt = $conn->prepare($query);

$stmt->bindParam(':id',$_id);
$stmt->bindParam(':title',$_title);
$result = $stmt->execute();
var_dump($result);
