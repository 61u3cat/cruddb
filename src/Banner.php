<?php


namespace Bitm;
use PDO;

class Banner
{
    public $id=null;
    public $title=null;
    public $conn=null;

    public function __construct()
    {
        session_start();
// Connect to datatbase
        $this->conn = new PDO("mysql:host=localhost;dbname=ecommerceseip", 'root', '');
// set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
 public function index(){


     $query = "SELECT * FROM `banners`";

     $stmt = $this->conn->prepare($query);

     $result = $stmt->execute();

     $banners = $stmt->fetchAll();
     return $banners;
 }
 public function delete(){
     $_id = $_GET['id'];

     $query = "DELETE FROM `banners` WHERE `banners`.`id` = :id";

     $stmt = $this->conn->prepare($query);

     $stmt->bindParam(':id', $_id);

     $result = $stmt->execute();

//var_dump($result);

     if ($result){
         $_SESSION['message'] = "Banner is deleted successfully";
     }else{
         $_SESSION['message'] = "Banner is not deleted";
     }

// this is for the location set to store.php to main home page index.php
     header("location:index.php");
 }
 public function edit(){
     $_id = $_GET['id'];

     $query = "SELECT * FROM `banners` WHERE id = :id";

     $stmt = $this->conn->prepare($query);

     $stmt->bindParam(':id', $_id);

     $result = $stmt->execute();

     $banner = $stmt->fetch();
     return $banner;
 }
 public function store(){

     $approot = $_SERVER['DOCUMENT_ROOT'].'/cruddb/';

// Working with image
     $target = $_FILES['picture']['tmp_name'];
     $destination = $approot.'uploads/' .$_FILES['picture']['name'];

     $isFileMoved = move_uploaded_file($target, $destination);
     if ($isFileMoved){
         $_picture = $_FILES['picture']['name'];
     }
     else{
         $_picture = null;
     }

     $_title = $_POST['title'];

     if (array_key_exists('is_active', $_POST)) {
         $_is_active = $_POST['is_active'];
     } else {
         $_is_active = 0;
     }
     if (array_key_exists('is_draft', $_POST)) {
         $_is_draft = $_POST['is_draft'];
     } else {
         $_is_draft = 0;
     }


     $_created_at = date('Y-m-d h:i:s',time());

     $_link = $_POST['link'];
     $_promotional_message = $_POST['promotional_message'];
     $_html_banner = $_POST['html_banner'];

     $query = "INSERT INTO `banners` (`title`, 
                                `is_active`,
                                `is_draft`,
                                `link`,
                                `promotional_message`,
                                `html_banner`,
                                `picture`,
                                `created_at`) 
          VALUES (:title, 
                  :is_active, 
                  :is_draft,
                  :link, 
                  :promotional_message, 
                  :html_banner,
                  :picture, 
                  :created_at);";

     $stmt = $this->conn->prepare($query);

     $result = $stmt->execute(array(
         ':title' => $_title,
         ':is_active' => $_is_active,
         ':is_draft' => $_is_draft,
         ':link' => $_link,
         ':promotional_message' => $_promotional_message,
         ':html_banner' => $_html_banner,
         ':picture' => $_picture,
         ':created_at' => $_created_at
     ));

//$result = $stmt->execute();

//var_dump($result);


     if ($result){
         $_SESSION['message'] = "Banner is added successfully";
     }else{
         $_SESSION['message'] = "Banner is not added";
     }

// this is for the location set to store.php to main home page index.php
     header("location:index.php");
 }
 public function show(){
     $_id = $_GET['id'];

     $query = "SELECT * FROM `banners` WHERE id = :id";

     $stmt = $this->conn->prepare($query);

     $stmt->bindParam(':id', $_id);

     $result = $stmt->execute();

     $banner = $stmt->fetch();
     return $banner;
 }
 public function update(){
     session_start();
     $approot = $_SERVER['DOCUMENT_ROOT'].'/cruddb/';

     if($_FILES['picture']['name'] != ''){
         // Working with image
         $target = $_FILES['picture']['tmp_name'];
         $destination = $approot.'uploads/' .$_FILES['picture']['name'];

         $isFileMoved = move_uploaded_file($target, $destination);
         if ($isFileMoved){
             $_picture = $_FILES['picture']['name'];
         }
         else{
             $_picture = null;
         }
     }else{
         $_picture = $_POST['old_picture'];
     }

     $_id = $_POST['id'];
     $_title = $_POST['title'];

     if (array_key_exists('is_active', $_POST)) {
         $_is_active = $_POST['is_active'];
     } else {
         $_is_active = 0;
     }
     if (array_key_exists('is_draft', $_POST)) {
         $_is_draft = $_POST['is_draft'];
     } else {
         $_is_draft = 0;
     }


     $_link = $_POST['link'];
     $_promotional_message = $_POST['promotional_message'];
     $_html_banner = $_POST['html_banner'];
//echo $_title;

     $_modified_at = date('Y-m-d h:i:s',time());

//Connect to database
     $conn = new PDO("mysql:host=localhost;dbname=ecommerceseip",
         'root', '');
//set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE,
         PDO::ERRMODE_EXCEPTION);
     $query = "UPDATE `banners` SET `title` = :title, 
                               `is_active` = :is_active, 
                               `is_draft` = :is_draft,
                               `link` = :link, 
                               `promotional_message` = :promotional_message,
                               `html_banner` = :html_banner,
                               `picture` = :picture,
                               `modified_at` = :modified_at 
          WHERE `banners`.`id` = :id";

     $stmt = $conn->prepare($query);

     $stmt->bindParam(':title', $_title);
     $stmt->bindParam(':is_active', $_is_active);
     $stmt->bindParam(':is_draft', $_is_draft);
     $stmt->bindParam(':id', $_id);
     $stmt->bindParam(':link', $_link);
     $stmt->bindParam(':promotional_message', $_promotional_message);
     $stmt->bindParam(':html_banner', $_html_banner);
     $stmt->bindParam(':picture', $_picture);
     $stmt->bindParam(':modified_at', $_modified_at);

     $result = $stmt->execute();

//var_dump($result);

     if ($result){
         $_SESSION['message'] = "Banner is updated successfully";
     }else{
         $_SESSION['message'] = "Banner is not updated";
     }

// this is for the location set to store.php to main home page index.php
     header("location:index.php");
 }
}