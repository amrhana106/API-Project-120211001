<?php
include 'db_helper.php';
header("Content-Type:application/json");

$db_helper = new DbHelper();
$db_helper->createDbConnection();
$id="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$id = $_POST["id"];

$db_helper->deletePatient($id);
}
?>