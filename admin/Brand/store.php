<?php
/*echo "<pre>";
var_dump($_POST);
echo "</pre>";*/
if(isset( $_POST['title'])){
$_title = $_POST['title'];
}
if(isset( $_POST['link'])){
    $_link = $_POST['link'];
}
//echo $_title;

//Connect to database
$conn = new PDO("mysql:host=localhost;dbname=ecommerceseip",
    'root', '');
//set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
$query = "INSERT INTO `brands` (`title`) VALUES (:title);";

$stmt = $conn->prepare($query);
$stmt->bindParam(':title', $_title);
$stmt->bindParam(':link', $_link);
$result = $stmt->execute();

var_dump($result);

?>