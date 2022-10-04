<?php
/*echo "<pre>";
var_dump($_POST);
echo "</pre>";*/
session_start();

if(isset( $_POST['id'])){
    $_id = $_POST['id'];
}

if(isset( $_POST['name'])){
    $_name = $_POST['name'];
}
if(isset( $_POST['email'])){
    $_email = $_POST['email'];
}
if(isset( $_POST['password'])){
    $_password = $_POST['password'];
}
//echo $_name;

$_modified_at = date('Y-m-d h:i:s', time());

//Connect to database
$conn = new PDO("mysql:host=localhost;dbname=ecommerceseip",
    'root', '');
//set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
$query = "UPDATE `admins` SET `name` = :name, `email` = :email, `password` = :password, `modified_at` = :modified_at WHERE `admins`.`id` = :id;";

$stmt = $conn->prepare($query);

$stmt->bindParam(':id', $_id);
$stmt->bindParam(':name', $_name);
$stmt->bindParam(':email', $_email);
$stmt->bindParam(':password', $_password);
$stmt->bindParam('modified_at', $_modified_at);
$result = $stmt->execute();

//var_dump($result);

if ($result){
    $_SESSION['message'] = "Admin is updated successfully";
}else{
    $_SESSION['message'] = "Admin is not updated";
}

// this is for the location set to store.php to main home page index.php
header("location:index.php");
?>


