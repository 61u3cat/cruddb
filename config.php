<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

$approot = $_SERVER['DOCUMENT_ROOT']."/cruddb/";
$webroot = "http://localhost/cruddb/";
include_once($approot."/vendor/autoload.php");
