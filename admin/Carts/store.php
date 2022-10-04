<?php
/*echo "<pre>";
var_dump($_POST);
echo "</pre>";*/
$approot=$_SERVER['DOCUMENT_ROOT']. "/cruddb/";
include_once($approot."vendor/autoload.php");

use Bitm\Cart;

$_store= new Cart;

$cart=$_store->store();

?>