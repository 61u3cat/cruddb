<?php
$approot=$_SERVER['DOCUMENT_ROOT']. "/cruddb/";
include_once($approot."vendor/autoload.php");


use Bitm\Contact;
$_contact= new Contact();
$contacts=$_contact->delete();


?>