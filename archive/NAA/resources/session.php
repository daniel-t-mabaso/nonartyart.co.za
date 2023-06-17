<?php
  session_start();
  if (@$_SESSION['loggedIn']) {
    $LOGGEDIN=true;
    $USER = $_SESSION['user'];
    $EMAIL = $_SESSION['email'];
    $CELL = $_SESSION['cell'];
    if(isset($_SESSION['company']) && $_SESSION['company']!=0)
    $COMPANY = $_SESSION['company'];
    $CUST_ID = $_SESSION['customer_id'];

  }
  else{
    $LOGGEDIN = false;

  }


?>
