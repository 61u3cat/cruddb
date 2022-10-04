<?php
if(isset( $_POST['id'])){
    $_id = $_POST['id'];
}
if(isset( $_POST['title'])){
    $_title = $_POST['title'];
}
if(isset( $_POST['link'])){
    $_link= $_POST['link'];
}
//conect to database
$conn = new PDO("mysql:host=localhost;dbname=ecommerceseip",
    'root', '');
//set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
$query="UPDATE `brands` SET `title` = :title, `link` = :link WHERE `brands`.`id` = :id;";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);
$stmt->bindParam(':title', $_title);
$stmt->bindParam(':link', $_link);
$result = $stmt->execute();
var_dump($result);
?>