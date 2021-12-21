<?php

include_once("controller/Database.php");
$code = $_GET["code"];
if (Database::activate($user, $code)){
    header("Location: /settings");
}else{
    header("Location: /unauthorized");
}

?>