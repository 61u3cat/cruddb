<?php
include_once($_SERVER['DOCUMENT_ROOT']."/cruddb/config.php");


use Bitm\Banner;
$_update= new Banner();

$banner = $_update->update();
?>


