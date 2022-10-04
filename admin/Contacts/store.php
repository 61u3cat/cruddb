<?php
/*echo "<pre>";
var_dump($_POST);
echo "</pre>";*/
$approot=$_SERVER['DOCUMENT_ROOT']. "/cruddb/";
include_once($approot."vendor/autoload.php");


use Bitm\Contact;
$_store= new Contact();
$contact=$_store->store();
?>