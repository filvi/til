<?php
include_once("controller/Database.php");
$user = $_POST["username"];
$password = $_POST["password"];


$info = Database::login($user);

// check if user exists
if (count($info)){
    $_SESSION["username"] = $user;
    $_SESSION["mail"] = $info["mail"];
    $db_pass = $info["pass"];
    $pepper = $info["pepper"];
} else {
    header("Location: /login?incorrect");
}

// Redirect if not activated
if(!$info["activated"]){
    header("Location: /confirm-email?login");
}

// check password + pepper
$combined_pass = $password . $pepper;
if (password_verify($combined_pass, $db_pass)){
    $_SESSION['logged'] = TRUE;
    header("Location: /new");
}else {
    error_log("Login failed for $user");
    header("Location: /login?incorrect");
}


?>