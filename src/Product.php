<?php

namespace Bitm;

use PDO;

class Product
{
    public $id=null;
    public $title=null;
    public $conn=null;

    public function __construct()
    {
        
// Connect to datatbase
        $this->conn = new PDO("mysql:host=localhost;dbname=ecommerceseip", 'root', '');
// set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function index(){

    $query = "SELECT * FROM `product` where is_deleted=0 ";

    $stmt = $this->conn->prepare($query);

    $result = $stmt->execute();

    $products = $stmt->fetchAll();
    return $products;
 }
 public function getActiveProducts(){
    $startfrom=0;
    $total=4;
    
    $query = "SELECT * FROM `product` where is_active=1 LIMIT $startfrom,$total";

    $stmt = $this->conn->prepare($query);

    $result = $stmt->execute();

    $products = $stmt->fetchAll();
    return $products;
 }
    public function show(){
     $_id = $_GET['id'];


     $query = "SELECT * FROM `product` WHERE id = :id";

     $stmt = $this->conn->prepare($query);

     $stmt->bindParam('id', $_id);

     $result = $stmt->execute();

     $product = $stmt->fetch();
     return $product;
 }
    public function edit(){
     $_id = $_GET['id'];

     $query = "SELECT * FROM `product` WHERE id = :id";

     $stmt = $this->conn->prepare($query);

     $stmt->bindParam(':id', $_id);

     $result = $stmt->execute();

     $product = $stmt->fetch();
     return $product;
 }
    public function delete(){
    $_id = $_GET['id'];


    $query = "DELETE FROM `product` WHERE `product`.`id` = :id;";

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id',$_id);
    $result = $stmt->execute();
    $_SESSION['message']="The product is added successfully";
    if($result){
        $_SESSION['message']="The product is deleted successfully";
    }else{
        $_SESSION['message']="The product is not deleted successfully";
    }

    header("location:index.php");
}
    public function update(){
    $_picture=$this->upload();

    $_id = $_POST['id'];
    $_title = $_POST['title'];

    if (array_key_exists('is_active', $_POST)){
        $_is_active =$_POST['is_active'];
    }
    else{
        $_is_active = 0;
    }
    $_modified_at = date('Y-m-d h:i:s', time());

    if (array_key_exists('is_deleted', $_POST)){
        $_is_deleted =$_POST['is_deleted'];
    }
    else{
        $_is_deleted = 0;
    }


//Insert query
    $query = "UPDATE `product` SET `title` = :title, `is_active` = :is_active , `picture` = :picture, `modified_at` = :modified_at,`is_deleted` = :is_deleted WHERE `product`.`id` = :id;";

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam('id', $_id);
    $stmt->bindParam('title', $_title);
    $stmt->bindParam('is_active', $_is_active);
    $stmt->bindParam('picture', $_picture);
    $stmt->bindParam('modified_at', $_modified_at);
    $stmt->bindParam('is_deleted', $_is_deleted);
    $result = $stmt->execute();

//var_dump($result);
    if($result)
    {
        $_SESSION['message'] = "The product is updated successfully.";
    }
    else
    {
        $_SESSION['message'] = "The product is not updated.";
    }
    header("location:index.php");
}
    public function store(){
    $_picture=$this->upload();


    $_title = $_POST['title'];
    $_is_active = $_POST['is_active'];

    if (array_key_exists('is_active', $_POST)){
        $_is_active =$_POST['is_active'];
    }
    else{
        $_is_active = 0;
    }
    if (array_key_exists('is_deleted', $_POST)){
        $_is_deleted =$_POST['is_deleted'];
    }
    else{
        $_is_deleted = 0;
    }
//Y-m-d h:i:s
    $_created_at = date('Y-m-d h:i:s', time());
//die($_created_at);



    $query = "INSERT INTO `product` (`title` ,`is_active`,`picture`, `created_at`,`is_deleted`  ) VALUES (:title ,:is_active, :picture, :created_at, :is_deleted );";

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam('title', $_title);
    $stmt->bindParam('picture', $_picture);
    $stmt->bindParam('is_active', $_is_active);
    $stmt->bindParam('created_at', $_created_at);
    $stmt->bindParam('is_deleted', $_is_deleted);
    $result = $stmt->execute();
//var_dump($result);
//13.12.2021
    if($result)
    {
        $_SESSION['message'] = "The product is added successfully.";
    }
    else
    {
        $_SESSION['message'] = "The product is not added.";
    }
    header("location:index.php");
}
    public function trash(){
    $_id = $_GET['id'];
    $_is_deleted = 1;


//Insert query
    $query = "UPDATE `product` SET `is_deleted` = :is_deleted WHERE `product`.`id` = :id;";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id',$_id);
    $stmt->bindParam(':is_deleted',$_is_deleted);
    $result = $stmt->execute();
    if($result){
        $_SESSION['message'] = "The product is deleted successfully";
    }else{
        $_SESSION['message'] = "The product is not deleted.";
    }
    header("location:index.php");
}
    public function trash_index(){


    $query = "SELECT * FROM `product` WHERE is_deleted = 1";
    $stmt = $this->conn->prepare($query);
    $result = $stmt->execute();
    $products = $stmt->fetchAll();
    return $products;
}
    public function restore(){
    $_id = $_GET['id'];
    $_is_deleted = 0;



//Insert query
    $query = "UPDATE `product` SET `is_deleted` = :is_deleted WHERE `product`.`id` = :id;";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id',$_id);
    $stmt->bindParam(':is_deleted',$_is_deleted);
    $result = $stmt->execute();
    if($result){
        $_SESSION['message'] = "The product is restore successfully";
    }else{
        $_SESSION['message'] = "The product can't be restored.";
    }
    header("location:index.php");
}
    private function upload(){
        $approot = $_SERVER['DOCUMENT_ROOT'].'/cruddb/';

        $_picture = null;
        if($_FILES['picture']['name'] != '') {
            $filename = 'IMG_' . time() . '_' . $_FILES['picture']['name'];

            $target = $_FILES['picture']['tmp_name'];

            $destination = $approot . "uploads/" . $filename;

            $is_file_moved = move_uploaded_file($target, $destination);

            if ($is_file_moved) {
                $_picture = $filename;
            }
        }else{
            if($_POST['old_picture']){
                $_picture = $_POST['old_picture'];
            }
        }
        return $_picture;
    }

}