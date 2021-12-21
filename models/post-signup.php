<?php
include_once("controller/Database.php");
$user = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];


Database::signup($user,$email,$password);

var_dump($rows);


?>