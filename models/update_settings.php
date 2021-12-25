<?php

include_once("controller/Database.php");
$user = $_SESSION["username"];

if (isset($_GET["setting"]) && isset($_GET["value"])){
    $code = Database::update_settings($user,$_GET["setting"],$_GET["value"]);
}

?>