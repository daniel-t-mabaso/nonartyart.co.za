<?php
    include("./assets/php/session.php");
    $_SESSION['CURRENT_PAGE'] = 'digitank. | Contact';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("./assets/php/dependencies.php");
    ?>
</head>
<body class='dark-2 white-txt'>
    <div id="responsive" class="fixed max-width-0 max-height-0 z-100 dark-2">
        <div class="title content horizontal-padding-30 padding-top-150 green-blue-txt-gradient-1">Not Responsive yet. Please view on Desktop</div>
    </div>
    <!-- Header -->
    <?php include("./assets/php/header.php");
    ?>
    <!-- Row 1 -->
    <div id="row-1">
        
        <div class='max-height-0 max-width-0 vertical-padding-20'>
            <div class="content uninterupted-max-height-20">
                <div class="vertical-center content">
                    <div id="contact-cards-panel" class="center">
                    <div class="float-left margin-15">
                        <a href="https://www.facebook.com/digitankeducation">
                            <div class="contact-card center facebook-gradient cursor rounded-20 float-right">
                                <div class="contact-card-image size-80 padding-bottom-25 padding-top-40 center center-txt"><img src="assets/media/images/white-facebook-icon@2x.png" alt="Facebook Logo" class="max-height-0"></div>
                                <div class="contact-card-title heading-4 bold center-txt margin-bottom-3">Facebook</div>
                                <div class="contact-card-address input-1 opacity-50 center-txt black-txt black">@digitankeducation</div>
                            </div>
                        </a>
                    </div>
                    <div class="float-left margin-15">
                        <div class="contact-card center email-gradient rounded-20">
                            <div class="contact-card-image size-80 padding-bottom-10 padding-top-55 center center-txt"><img src="assets/media/images/white-mail-icon@2x.png" alt="Mail Icon" class="max-width-0"></div>
                            <div class="contact-card-title heading-4 bold center-txt margin-bottom-3">Email</div>
                            <div class="contact-card-address input-1 opacity-50 center-txt black-txt bold">learn@digitank.co.za</div>
                        </div>
                    </div>
                    <div class="float-left margin-15">
                        <a href="http://www.instagram.com/digitankedu">
                            <div class="contact-card center cursor instagram-gradient rounded-20 float-left">
                                <img src="assets/media/svg/Oval.svg" alt="Purple instagram gradient overlay" class="instagram-overlay-purple rounded-20 absolute">
                                <img src="assets/media/svg/Oval - Orange.svg" alt="orange instagram gradient overlay" class="instagram-overlay-orange rounded-20 absolute margin-top-100 z-0">
                                <div class="contact-card-image size-80 padding-bottom-25 padding-top-40 center center-txt"><img src="assets/media/images/white-instagram-icon@2x.png" alt="Instagram Logo" class="max-height-0"></div>
                                
                                <div class="contact-card-title heading-4 bold center-txt margin-bottom-3">Instagram</div>
                                <div class="contact-card-address input-1 opacity-50 center-txt black-txt bold">@digitankedu</div>
                                
                            </div>
                    </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact-page-buffer"></div>

    <!-- Footer -->
    <?php include("./assets/php/footer.php");?>
</body>
</html>