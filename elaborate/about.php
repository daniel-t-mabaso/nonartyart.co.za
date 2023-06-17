<?php include_once("./assets/php/session.php");
    $public_page = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("./assets/php/dependencies.php")?>
    <title>About El-Aborate Creatives</title>
</head>
<body class="book">
    <?php include 'assets/php/header.php'?>
    <div id="what-we-do" class='row'>
        <div class="content  tertiary-txt">
            <div class="col">
                <h2>WHY WE DO<br>WHAT WE DO</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam officia iusto dicta, sint excepturi laudantium, necessitatibus soluta sunt maiores incidunt laborum atque corporis? Accusantium ab sit eligendi suscipit quod ut?
                </p>
            </div>
        </div>
    </div>
    <div id="connect-with-us" class='row tertiary-bg white-txt'>
        <div class="content">
            <div class="col">
                <div class="large-floating-icon">?</div>
                <div>
                    <div class="large-floating-icon">?</div>
                    <h2 class='white-txt'>CONNECT<br>WITH US</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex cum delectus eos architecto. Id, obcaecati accusantium facere, eum nesciunt ad numquam eveniet sunt facilis odio deleniti asperiores ipsa vel illum?
                    </p>
                    <div>
                        <img class="medium-icon" fill="white" src="./assets/images/facebook-icon.svg" alt="facebook icon">
                        <img class="medium-icon small-side-padding" src="./assets/images/instagram-icon.svg" alt="instagram icon">
                        <img class="medium-icon" src="./assets/images/youtube-icon.svg" alt="youtube icon">
                        <img class="medium-icon small-side-padding" src="./assets/images/whatsapp-icon.svg" alt="WhatsApp icon">
                    </div>
                    <div>
                        <img class="large-medium-icon" src="./assets/images/angle-double-right-solid.svg">
                        
                    </div>
                </div>
            </div>
            <div class="col contact-form">
                <form class="right tertiary-txt" action="" method="post">
                    <input class="form-input" type="text" name="name" id="" placeholder='Name'>
                    <input class="form-input" type="email" name="email" id="" placeholder='Email'>
                    <textarea class="form-input" name="message" id="" cols="30" rows="3" placeholder="How can we help you?"></textarea>
                    <button type="submit" class="primary-theme button">SEND</button>
                </form>
            </div>
        </div>
    </div>
    <?php include 'assets/php/extras.php';?>
    <?php include 'assets/php/footer.php'?>
</body>
</html>