<?php
$approot=$_SERVER['DOCUMENT_ROOT']. "/cruddb/";
include_once($approot."vendor/autoload.php");

use Bitm\Category;

$_delete= new Category();
$categorys= $_delete->delete();


?>