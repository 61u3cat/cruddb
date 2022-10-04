<?php

session_start();

$_id = $_GET['id'];

//Connect to database
$conn = new PDO("mysql:host=localhost;dbname=ecommerceseip",
    'root', '');
//set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);

$query = "DELETE FROM `admins` WHERE `admins`.`id` = :id";

$stmt = $conn->prepare($query);

$stmt->bindParam(':id', $_id);

$result = $stmt->execute();

//var_dump($result);

if ($result){
    $_SESSION['message'] = "Admin is deleted successfully";
}else{
    $_SESSION['message'] = "Admin is not deleted";
}

// this is for the location set to store.php to main home page index.php
header("location:index.php");

?>