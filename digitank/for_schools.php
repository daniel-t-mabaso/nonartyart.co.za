<?php
    include("./assets/php/session.php");
    $_SESSION['CURRENT_PAGE'] = 'digitank. | Schools';
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
       <div id="row-1" class="">
        <div class='max-height-0 max-width-0 gradient-2 vertical-padding-20'>
            <div class="content uninterupted-max-height-20 green-blue-txt-gradient-1">
                <div id="center-home-title">
                    <div id="landing-title" class="white-txt">WE'RE WORKING ON IT.</div>
                    <div id="landing-exra-large-title" class="txt-shadow primary-txt">COMING SOON.</div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include("./assets/php/footer.php");?>
    
</body>
</html>