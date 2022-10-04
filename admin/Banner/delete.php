<?php
include_once($_SERVER['DOCUMENT_ROOT']."/cruddb/config.php");

use Bitm\Banner;
$_banner= new Banner();

$banners = $_banner->delete();


?>