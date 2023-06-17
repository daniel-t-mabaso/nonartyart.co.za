<?php
    include("./assets/php/session.php");
    $_SESSION['CURRENT_PAGE'] = 'digitank. | Register';
    include("./assets/php/server.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("./assets/php/dependencies.php");
    ?>
</head>
<body>
    <!-- Header -->
    <?php include("./assets/php/header.php");?>

    <!-- Row 1 -->
       <div id="row-1" class="">
        <div class='max-height-0 max-width-0 gradient-2 vertical-padding-20'>
            <div class="content uninterupted-max-height-20">
                <div class="max-width-0">
                    <div class="width-220 center padding-top-100">
                    <div class="heading-2 center-txt margin-top-20  padding-bottom-10">
                    REGISTER
                </div>
                <div class="body-6 quote-author-txt bolder center-txt padding-bottom-30">
                    Create a new account.
                </div>
                        <form id="register-form" action="" method="post" class="max-width-0">
                            <div id="register-part-1" class="">
                                <input class="max-width-20 dark-1 rounded-10 horizontal-padding-20 form-input-txt vertical-padding-10 margin-top-10 margin-bottom-5 input-1" type="text" name="first-name" id="first-name" placeholder="First Name">
                                <input class="max-width-20 dark-1 rounded-10 horizontal-padding-20 form-input-txt vertical-padding-10 margin-top-10 margin-bottom-5 input-1" type="text" name="last-name" id="last-name" placeholder="Last Name">
                                <input type="hidden" id="user-type" name="user-type" value="teacher">
                                <div class="max-width-0 dark-1 height-35 line-height-35 margin-top-15 primary-txt rounded-10">
                                    <div onclick="changeUserType(this);" class="user-type third-width-0 center-txt pointer rounded-10 float-left input-2 border-2 max-height-2 line-height-30 "> 
                                        TEACHER
                                    </div>
                                    <div onclick="changeUserType(this);" class="user-type third-width-0 center-txt pointer rounded-10 float-right input-2"> 
                                        STUDENT
                                    </div>
                                    <div onclick="changeUserType(this);" class="user-type third-width-0 center-txt pointer rounded-10 center vertical-margin-5 input-2"> 
                                        PARENT
                                    </div>
                                </div>
                                
                                <div class="form-button body-3 orange-button-hover" onclick="toggleRegister();">
                                    <input type="button" class="orange-txt-gradient-2 rounded-30 no-select" value="NEXT" name=""/>
                                </div>
                            </div>
                            <div id="register-part-2" class="hide">
                                <input class="max-width-20 dark-1 rounded-10 horizontal-padding-20 form-input-txt vertical-padding-10 margin-top-10 margin-bottom-5 input-1" type="email" name="email" id="email" placeholder="Email">
                                <input class="max-width-20 dark-1 rounded-10 horizontal-padding-20 form-input-txt vertical-padding-10 vertical-margin-10 input-1" type="password" name="password" id="password" placeholder="Password">
                                <input class="max-width-20 dark-1 rounded-10 horizontal-padding-20 form-input-txt vertical-padding-10 vertical-margin-10 input-1" type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password">
                                <div class="form-button pointer body-3 orange-button-hover">
                                    <input type="submit" class="orange-txt-gradient-2 rounded-30 no-select" value="REGISTER" name="register"/>
                                </div>
                                <div class="form-button pointer body-3 orange-button-hover" onclick="toggleRegister();">
                                    <input type="button" class="unselected-bg rounded-30 no-select" value="Go Back" name="submit-contact"/>
                                </div>
                            </div>
                            <?php include 'error.php';?>
                        </form>
                        
                        <div class="max-width-0 margin-top-20 center-txt body-3">Already registered? <a class="underline" href="login.php">Sign in now</a></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include("./assets/php/footer.php");?>

</body>
</html>