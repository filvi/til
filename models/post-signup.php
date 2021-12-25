<?php
include_once("controller/Database.php");
$user = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];


$code = Database::signup($user,$email,$password);
header("Location: /settings/active");


?>