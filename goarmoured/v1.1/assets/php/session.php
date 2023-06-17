<?php
    session_start();
    if(!isset($_SESSION['logged_in'])){
        $_SESSION['logged_in']='false';
    }

    if(!isset($_SESSION['username'])){
        $_SESSION['username']='Anonymous';
    }
    if(!isset($_SESSION['user_type'])){
        $_SESSION['user_type']='unauthorised';
    }
    
    ?>