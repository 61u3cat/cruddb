<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/30/2021
 * Time: 3:15 PM
 */

namespace Bitm;

use PDO;
class Contact
{
public function index(){
    session_start();

//Connect to database
    $conn = new PDO("mysql:host=localhost;dbname=ecommerceseip",
        'root', '');
//set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);


    $query = "SELECT * FROM `contacts`";

    $stmt = $conn->prepare($query);

    $result = $stmt->execute();

    $contacts = $stmt->fetchAll();
    return $contacts;
}
    public function delete(){
        session_start();

        $_id = $_GET['id'];

//Connect to database
        $conn = new PDO("mysql:host=localhost;dbname=ecommerceseip",
            'root', '');
//set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);

        $query = "DELETE FROM `contacts` WHERE `contacts`.`id` = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

//var_dump($result);

        if ($result){
            $_SESSION['message'] = "Contact is deleted successfully";
        }else{
            $_SESSION['message'] = "Contact is not deleted";
        }

// this is for the location set to store.php to main home page index.php
        header("location:index.php");
    }
    public function edit(){
        $_id = $_GET['id'];

//Connect to database
        $conn = new PDO("mysql:host=localhost;dbname=ecommerceseip",
            'root', '');
//set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM `contacts` WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        $contact = $stmt->fetch();
        return $contact;
    }
    public function show(){
        $_id = $_GET['id'];

//Connect to database
        $conn = new PDO("mysql:host=localhost;dbname=ecommerceseip",
            'root', '');
//set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM `contacts` WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(':id', $_id);

        $result = $stmt->execute();

        $contact = $stmt->fetch();
        return $contact;
    }
    public function store(){

        session_start();

        $_name = $_POST['name'];
        $_email = $_POST['email'];
        $_subject = $_POST['subject'];
//echo $_title;

//Connect to database
        $conn = new PDO("mysql:host=localhost;dbname=ecommerceseip",
            'root', '');
//set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO `contacts` ( `name`, `email`, `subject`) VALUES (:name, :email, :subject)";

        $stmt = $conn->prepare($query);

        $result = $stmt->execute(array(
            ':name' => $_name,
            ':email' => $_email,
            ':subject' => $_subject
        ));

//$result = $stmt->execute();

//var_dump($result);


        if ($result){
            $_SESSION['message'] = "Contact is added successfully";
        }else{
            $_SESSION['message'] = "Contact is not added";
        }

// this is for the location set to store.php to main home page index.php
        header("location:index.php");
    }
    public function update(){
        session_start();

        $_id = $_POST['id'];
        $_name = $_POST['name'];
        $_email = $_POST['email'];
        $_subject = $_POST['subject'];
//echo $_name;

//Connect to database
        $conn = new PDO("mysql:host=localhost;dbname=ecommerceseip",
            'root', '');
//set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
        $query = "UPDATE `contacts` SET `name` = :name, 
                               `email` = :email, 
                               `subject` = :subject
          WHERE `contacts`.`id` = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':name', $_name);
        $stmt->bindParam(':email', $_email);
        $stmt->bindParam(':subject', $_subject);

        $result = $stmt->execute();

//var_dump($result);

        if ($result){
            $_SESSION['message'] = "Contact is updated successfully";
        }else{
            $_SESSION['message'] = "Contact is not updated";
        }

// this is for the location set to store.php to main home page index.php
        header("location:index.php");
    }
}