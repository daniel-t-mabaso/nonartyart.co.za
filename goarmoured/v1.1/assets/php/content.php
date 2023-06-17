<?php
    include 'session.php';
    include_once 'class_lib.php';
    $content = unserialize($_SESSION['content']);
    $home = $content->get_home();
    $about = $content->get_about();
    $services = $content->get_services();
    $contact = $content->get_contact();
?>