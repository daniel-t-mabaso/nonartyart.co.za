<?php
 if (!isset($_SESSION)){
    //start session if not already started.
    session_start();
}
include("assets/php/class_lib.php");


if(!isset($_SESSION['digi_auth']) || !isset($_SESSION['user'])){
    $_SESSION['digi_auth'] = false;
    $u = new User;
    $us = serialize($u);
    $_SESSION['user'] = $us;
}
$current_user = unserialize($_SESSION['user']);
/***
 * IMPORTANT
 * Ensure that this file is imported on line 1 of the file.
 * **/
?>