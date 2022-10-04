<?php
include_once($_SERVER['DOCUMENT_ROOT']."/cruddb/config.php");

use Bitm\Product;

$_store = new Product();

$products = $_store->store();
?>