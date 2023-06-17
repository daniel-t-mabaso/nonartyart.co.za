<?php
    include("./assets/php/session.php");
    $_SESSION['CURRENT_PAGE'] = 'digitank. | Booked';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("./assets/php/dependencies.php");
    ?>
</head>
<body class='dark-2  white-txt'>
    <!-- Header -->
    <?php include("./assets/php/header.php");
    ?>
    <!-- Row 1 -->
       <div class="max-height-0 orange-txt-gradient-1">
            <div class="content max-height-0">
                <div class="padding-top-200 max-width-0 margin-left-0">
                    <div class="white-txt large-title center-txt">Booking Complete!</div>
                    <div class="center-txt body-2 black-txt opacity-70 margin-bottom-50">We've sent you an email with booking<br>confirmation payment details</div>

                    <a href='./'><div class='done-button width-150 height-20 line-height-20 input-1 center vertical-margin-10 rounded-30 primary-txt white-bg center-txt padding-15'>Awesome!</div></a>
                    
                    <a href="courses.php"><div class='done-button width-150 height-20 line-height-20 input-1 center vertical-margin-10 rounded-30 primary-txt white-bg center-txt padding-15'>Book another course</div></a>
                </div>
            </div>
    </div>
    
</body>
</html>