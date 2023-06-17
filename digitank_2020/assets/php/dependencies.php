 <title>
     <?php
        if(isset($_SESSION['CURRENT_PAGE'])){
            echo $_SESSION['CURRENT_PAGE'];
        }
        else{
            echo 'Untitled';
        }
     ?>
     </title>
 <!--Meta Data-->
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="keywords" content="">
    <meta name="revisit-after" content="7 days">
    <meta name="description" content="">
    <meta name="url" content="">
    <meta name="designer" content="Developed by Non-Artistic Art, http://nonartyart.co.za">

    <!--Links-->
    <link rel='stylesheet' href='./assets/css/master.css'>
    <link rel="shortcut icon" href="./assets/media/images/digitank icon White on Orange@1x.png" type="image/x-icon">

    <!--Open Graph Meta Data-->
    <meta property="og:url" content=""/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>

    <!--Scripts-->
    
    <script type="text/javascript" src="./assets/js/ajax.js"></script>
    <script type="text/javascript" src="./assets/js/jquery.js"></script>
    <script type="text/javascript" src="./assets/js/behavior.js"></script>
    <script type="text/javascript" src="./assets/js/page.ini.js"></script>
    <?php 
        if(isset($_SESSION['CURRENT_PAGE']) && $_SESSION['CURRENT_PAGE'] == "digitank."){
            echo '<script type="text/javascript" src="./assets/js/quotes.js"></script>';
        }
        ?>
    

    <?php include("assets/php/components.php");?>
