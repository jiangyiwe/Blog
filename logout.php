<?php
include("./initialize.php");

if (isset($_POST["logout"])){
    $SQLconn->loginStatus->Logout();
}

unset($_POST);
$redirect = "Location:./index2.php";
header($redirect);
