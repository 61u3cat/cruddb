<?php
include_once($_SERVER['DOCUMENT_ROOT']."/cruddb/config.php");


use Bitm\Product;

$_product = new Product();
$products = $_product->delete();
?>