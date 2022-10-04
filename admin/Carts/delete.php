<?php
$approot=$_SERVER['DOCUMENT_ROOT']. "/cruddb/";
include_once($approot."vendor/autoload.php");

use Bitm\Cart;

$_cart= new Cart;

$carts=$_cart->delete();


?>