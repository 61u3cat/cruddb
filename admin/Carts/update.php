<?php
/*echo "<pre>";
var_dump($_POST);
echo "</pre>";*/
$approot=$_SERVER['DOCUMENT_ROOT']. "/cruddb/";
include_once($approot."vendor/autoload.php");

use Bitm\Cart;

$_update= new Cart;

$cart=$_update->update();
?>


