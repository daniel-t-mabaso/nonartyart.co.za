<div id="row-header" class="max-width-0 z-95 no-select absolute vertical-padding-15">
            <div class="content">
                <div id="navigation-logo-panel" class="col-3">
                    <a href="index.php" class='txt-shadow logo-heading bold'>digitank.</a>
                </div>
                <div id="burger-panel" class="height-20 width-35 fixed top-30">
                    <div class='burger-container' onclick='toggleMenu();' id='burger'>

                        <div class='bar1 shadow'></div>
            
                        <div class='bar2 shadow'></div>
            
                        <div class='bar3 shadow'></div>
            
                      </div></div>
                <div id="navigation-social-media-container" class="mobile-hide">
                    <div class="content">
                        <div id="navigation-social-media-panel" class="col-9">
                            <a href="login.php">
                                <div id="login-button"  <?php if(isset($_SESSION['CURRENT_PAGE']) && $_SESSION['CURRENT_PAGE'] == "digitank. | Login"){echo 'class="orange-txt-gradient-1 white-txt rounded-90 navigation-2 shadow float-left inline-block button rounded unselected-bg pointer horizontal-padding-10 vertical-padding-5 horizontal-margin-10 width-50"';}else{echo 'class="navigation-2 shadow float-left inline-block button rounded unselected-bg pointer horizontal-padding-10 vertical-padding-5 horizontal-margin-10 width-50"';}?>>
                                    LOG IN
                                </div id="login-button">
                            </a>
                            <div id="social-media-button-panel">
                                <div class="float-left inline-block size-20 pointer horizontal-margin-10">
                                    <a href="https://www.facebook.com/digitankeducation">
                                        <img class="max-height-0" src="assets/media/images/white-facebook-icon.png" alt="facebook logo">
                                    </a>
                                    </div>
                                <div class="float-left inline-block pointer size-20 horizontal-margin-10">
                                    <a href="http://www.instagram.com/digitankedu">
                                        <img class="max-width-0" src="assets/media/images/white-instagram-icon.png" alt="instagram logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="navigation-bar-panel" class="col-6 mobile-hide vertical-padding-10">
                    <div id="navigation-bar-holder" class="height-35 center">
                        <div id="navigation-bar" class=" unselected-bg horizontal-padding-3 shadow blur vertical-padding-3">
                        
                            <a href="index.php">
                                <div class="navigation-button">
                                    <div <?php if(isset($_SESSION['CURRENT_PAGE']) && $_SESSION['CURRENT_PAGE'] == "digitank."){echo 'class="orange-txt-gradient-1 white-txt rounded-90"';}?> >
                                        HOME
                                    </div>
                                </div>
                            </a>
                            <a href="courses.php">
                                <div class="navigation-button">
                                    <div <?php if(isset($_SESSION['CURRENT_PAGE']) && $_SESSION['CURRENT_PAGE'] == "digitank. | Courses"){echo 'class="orange-txt-gradient-1 white-txt rounded-90"';}?> >
                                        COURSES
                                    </div>
                                </div>
                            </a>
                            <a href="for_schools.php">
                                <div class="navigation-button">
                                    <div <?php if(isset($_SESSION['CURRENT_PAGE']) && $_SESSION['CURRENT_PAGE'] == "digitank. | Schools"){echo 'class="orange-txt-gradient-1 white-txt rounded-90"';}?> >
                                        SCHOOLS
                                    </div>
                                </div>
                            </a>
                            <a href="contact.php">
                                <div class="navigation-button">
                                    <div <?php if(isset($_SESSION['CURRENT_PAGE']) && $_SESSION['CURRENT_PAGE'] == "digitank. | Contact"){echo 'class="orange-txt-gradient-1 white-txt rounded-90"';}?> >
                                        CONTACT
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>