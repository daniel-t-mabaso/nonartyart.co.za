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
<body id="contact-page">
    <!-- Header -->
    <?php include("./assets/php/header.php");
    ?>
    <!-- Row 1 -->
    <div id="row-1">
        <div class="content">
            <div id="cards-container">
                <a href="mailto:learn@digitank.co.za">
                    <div class="contact-card-panel shadow">
                        <h2>email</h2>
                        <img src="assets/media/images/email icon-blue-03.png" alt="green email icon">
                        <div class="button">learn@digitank.co.za</div>
                    </div>
                </a>
                <a href="https://www.facebook.com/digitankeducation" target="_black">
                    <div class="contact-card-panel shadow">
                        <h2>facebook</h2>
                        <img src="assets/media/images/fb green icon-01.png" alt="green facebook logo">
                        <div class="button">@digitankeducation</div>
                    </div>
                </a>
                <a href="http://www.instagram.com/digitankedu" target="_black">
                    <div class="contact-card-panel shadow">
                        <h2>instagram</h2>
                        <img src="assets/media/images/instagram green icon-01.png" alt="green instagram logo">
                        <div class="button">@digitankedu</div>
                    </div>
                </a>
            </div>
            <h2 class="heading">want to know<br>where to find us?</h2>
            <div class="location-panel"><img src="assets/media/images/Location icon-04.png" alt="location pin"></div>
            <p>Brookside Office Park,<br>11 Imam Haron Road,<br>Claremont,<br>Cape Town</p>
        </div>
    </div>
    <!-- Footer -->
    <?php include("./assets/php/contact-me.php");?>
    <?php include("./assets/php/footer.php");?>
</body>
</html>