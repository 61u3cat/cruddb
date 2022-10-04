<?php
/*echo "<pre>";
var_dump($_POST);
echo "</pre>";*/

session_start();

if(isset( $_POST['name'])){
    $_name = $_POST['name'];
}
if(isset( $_POST['email'])){
    $_email = $_POST['email'];
}
if(isset( $_POST['password'])){
    $_password = $_POST['password'];
}
//echo $_title;
$_created_at = date('Y-m-d h:i:s',time());
//Connect to database
$conn = new PDO("mysql:host=localhost;dbname=ecommerceseip",
    'root', '');
//set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
$query = "INSERT INTO `admins` ( `name`, `email`, `password`,`created_at`) VALUES ( :name, :email, :password, :created_at);";

$stmt = $conn->prepare($query);
$stmt->bindParam(':name', $_name);
$stmt->bindParam(':email', $_email);
$stmt->bindParam(':password', $_password);
$stmt->bindParam('created_at', $_created_at);
$result = $stmt->execute();



if ($result){
    $_SESSION['message'] = "Admin is added successfully";
}else{
    $_SESSION['message'] = "Admin is not added";
}

// this is for the location set to store.php to main home page index.php
header("location:index.php");
?>