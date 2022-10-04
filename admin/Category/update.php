<?php
/*echo "<pre>";
var_dump($_POST);
echo "</pre>";*/
$approot=$_SERVER['DOCUMENT_ROOT']. "/cruddb/";
include_once($approot."vendor/autoload.php");

use Bitm\Category;

$_update= new Category();
$category= $_update->update();
?>


