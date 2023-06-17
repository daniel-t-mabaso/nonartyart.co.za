<?php
    include("./assets/php/session.php");
    $_SESSION['CURRENT_PAGE'] = 'digitank. | Login';
    include("./assets/php/server.php");
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
    <?php include("./assets/php/header.php");?>

    <!-- Row 1 -->
       <div id="row-1" class="">
        <div class='max-height-0 max-width-0 gradient-2 vertical-padding-20'>
            <div class="content uninterupted-max-height-20 green-blue-txt-gradient-1">
                <div class="max-width-0">
                    <div class="width-220 center padding-top-100">
                    <div class="heading-2 center-txt margin-top-20  padding-bottom-10">
                    LOGIN
                </div>
                <div class="body-6 quote-author-txt bolder center-txt padding-bottom-30">
                    Enter your login credientials to sign in.
                </div>
                        <form id="login-form" action="" method="post">
                            <input class="max-width-20 dark-1 rounded-10 horizontal-padding-20 form-input-txt vertical-padding-10 margin-top-10 margin-bottom-5 input-1" type="email" name="email" id="email" placeholder="Email">
                            <input class="max-width-20 dark-1 rounded-10 horizontal-padding-20 form-input-txt vertical-padding-10 vertical-margin-10 input-1" type="password" name="password" id="password" placeholder="Password">
                            
                            <div class="form-button body-3 orange-button-hover">
                                <input type="submit" class="orange-txt-gradient-2 rounded-30 no-select" value="LOGIN" name="login"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include("./assets/php/footer.php");?>

</body>
</html>