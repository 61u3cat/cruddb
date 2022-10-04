<?php

$_title = $_POST['title'];
//echo $_title;

//Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=ecommerceseip", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Insert query
$query = "INSERT INTO `product` (`title`) VALUES (:title);";
$stmt = $conn->prepare($query);

$stmt->bindParam(':title',$_title);
$result = $stmt->execute();
var_dump($result);















