<?php
include_once($_SERVER['DOCUMENT_ROOT']."/cruddb/config.php");


use Bitm\Banner;
$_store= new Banner();

$banner = $_store->store();
?>