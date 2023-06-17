<?php
    include("./assets/php/session.php");
    $_SESSION['CURRENT_PAGE'] = 'digitank. | Courses';
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
    <div id="courses-row-1" class="courses-home-gradient">
        <div class='max-height-0 max-width-0 vertical-padding-20'>
            <div class="content uninterupted-max-height-20 center-txt">
                <div id="courses-large-title" class="orange-txt-gradient-45 margin-top-100">DIFFERENT COURSES FOR</br>DIFFERENT NEEDS.</div>
                <div id="courses-search-bar-panel" class="left-txt">
                    <img src="./assets/media/svg/Search_Icon.svg" id="courses-search-icon">
                    <form action="">
                        <input type="text" name="courses-search" id="courses-search-bar" placeholder="Search for courses by name, school, area or age group."/>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <div id="courses-row-2" class="courses-panel-gradient">
        <div class="left-course-blurred">
            <div class="float-right width-290 height-370">
                <div class="courses-fade-cover-left overflow-y width-370 height-370"></div>
            </div>
        </div>
        
        <div class="courses-row-padding">
            <div class="courses-slider-panel">
                    <div class="courses-scroll-right" onclick="scrollX('-320', this);"></div>
                    <div class="courses-scroll-left" onclick="scrollX('320', this);"></div>
                <div class="courses-slider-panel-extended">
                    <div class="left-course-blurred">
                        <div class="float-right width-290 height-280">
                            <div class="courses-fade-cover-left width-370 height-280"></div>
                        </div>
                    </div>
                    <div class="margin-left-20 width-10 max-height-0 float-left"></div>
                    
                    <?php
                        createCoursesCourseCard("_blank_","","","","", "", "");
                    ?>
                    <?php
                    //$title, $shortDescription, $location, $price, $age, $time, $image
                        createCoursesCourseCard("Python coding","No description","Multiple Locations","R672.75","12-18", "During School Term", "python-bg");
                        createCoursesCourseCard("Coding Fundamentals","No description","Multiple Locations","R672.75","6-12", "During School Term", "raspberry-bg");
                        createCoursesCourseCard("Coding Fundamentals","No description","Multiple Locations","R672.75","4-6", "During School Term", "lego-bg");
                    ?>
            
                </div>
            </div>
            <div class="courses-course-type-container">
                <div class="courses-course-type-panel">
                    <div class="course-type-title">EXTRAMURAL COURSES</div>
                    <div class="courses-course-type-description body-3 line-height-15 height-110 padding-right-40 margin-top-10">
                    Extramural courses take place in the afternoon after a school day or during the weekend. Lessons are set throughout the year, and are open to students within and outside of the school they're taking place at.
                    </div>
                    <div class="button clicked-blue-box-gradient-2 hover-blue-box-gradient-2 hover-blue-box pointer width-200 height-35 line-height-35 heading-5 center-txt rounded-50 border-gray margin-bottom-40 vertical-padding-5">
                        <span class="blue-txt-gradient-2 no-select"> Extramural Courses &nbsp;&nbsp; &rarr;</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="courses-row-3" class="courses-panel-gradient">
        <div class="left-course-blurred">
            <div class="float-right width-290 height-370">
                <div class="courses-fade-cover-left overflow-y width-370 height-370"></div>
            </div>
        </div>
        <div class="courses-row-padding">
            <div class="courses-slider-panel">
                    <div class="courses-scroll-right" onclick="scrollX('-320', this);"></div>
                    <div class="courses-scroll-left" onclick="scrollX('320', this);"></div>
                <div class="courses-slider-panel-extended">

                <div class="left-course-blurred">
                        <div class="float-right width-290 height-280">
                            <div class="courses-fade-cover-left width-370 height-280"></div>
                        </div>
                    </div>
                    <div class="margin-left-20 width-10 max-height-0 float-left"></div>
                    
                    <?php
                        createCoursesCourseCard("_blank_","","","","", "", "");
                        createCoursesCourseCard("Python Coding","No description","Multiple Locations","R450","12-18", "During School Holidays", "python-bg");
                        createCoursesCourseCard("Junior Coding","No description","Multiple Locations","R450","8-16", "During School Holidays", "python-bg");  
                        createCoursesCourseCard("Robotics","No description","Multiple Locations","R450","8-16", "During School Holidays", "raspberry-bg");
                        createCoursesCourseCard("Minecraft","No description","Multiple Locations","R450","7-15", "During School Holidays", "minecraft-bg");
                    ?>
                    
                </div>
            </div>
            <div class="courses-course-type-container">
                <div class="courses-course-type-panel">
                    <div class="course-type-title">HOLIDAY CAMPS</div>
                    <div class="courses-course-type-description body-3 line-height-15 height-110 padding-right-40 margin-top-10">
                        Holiday camp classes take place during the school holidays, where students can sign up for a range of exciting courses to explore technology and have fun over the holidays.
                    </div>
                    <div class="button clicked-blue-box-gradient-2 hover-blue-box-gradient-2 hover-blue-box pointer width-200 height-35 line-height-35 heading-5 center-txt rounded-50 border-gray margin-bottom-40 vertical-padding-5">
                        <span class="blue-txt-gradient-2 no-select"> Holiday Camps &nbsp;&nbsp; &rarr;</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="courses-row-4" class="courses-panel-gradient">
        <div class="left-course-blurred">
            <div class="float-right width-290 height-370">
                <div class="courses-fade-cover-left overflow-y width-370 height-370"></div>
            </div>
        </div>
        <div class="courses-row-padding">
            <div class="courses-slider-panel">
                    <div class="courses-scroll-right" onclick="scrollX('-320', this);"></div>
                    <div class="courses-scroll-left" onclick="scrollX('320', this);"></div>
                <div class="courses-slider-panel-extended">

                    <div class="left-course-blurred">
                        <div class="float-right width-290 height-280">
                            <div class="courses-fade-cover-left width-370 height-280"></div>
                        </div>
                    </div>
                    <div class="margin-left-20 width-10 max-height-0 float-left"></div>
                    
                    <?php
                    createCoursesCourseCard("_blank_","","","","", "", "");
                    ?>
                    <?php
                    //$title, $shortDescription, $location, $price, $age, $time, $image
                        createCoursesCourseCard("Python Coding","No description","In person or online","R4100","12-18", "Flexible", "python-bg");
                        createCoursesCourseCard("Coding Fundamentals","No description","In-person or online","R4100","6-12", "Flexible", "raspberry-bg");
                    ?>
                    
                </div>
            </div>
            <div class="courses-course-type-container">
                <div class="courses-course-type-panel">
                    <div class="course-type-title">1 ON 1 COURSES</div>
                    <div class="courses-course-type-description body-3 line-height-15 height-110 padding-right-40 margin-top-10">
                    Private lessons at your convenience. We can schedule lessons according to the days that suit you, and offer the individual attention required for students who want to take their skills to the next level. We offer classes online and in-person.
                    </div>
                    <div class="button clicked-blue-box-gradient-2 hover-blue-box-gradient-2 hover-blue-box pointer width-200 height-35 line-height-35 heading-5 center-txt rounded-50 border-gray margin-bottom-40 vertical-padding-5">
                        <span class="blue-txt-gradient-2 no-select"> 1 on 1 Courses &nbsp;&nbsp; &rarr;</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="courses-row-5" class="dark-3">
    <div class="content">
            <div class="col-6">
                <div class="heading-2 center-txt margin-top-50  padding-bottom-10">
                    WANT TO FIND OUT MORE?
                </div>
                <div class="body-6 quote-author-txt bolder center-txt">
                    We'll email you about our courses<br>relevant to you and other updates.
                </div>
                <div class="width-220 center margin-top-50">
                    <form action="" method="post">
                        <input class="max-width-20 dark-1 rounded-10 horizontal-padding-20 form-input-txt vertical-padding-10 margin-top-10 margin-bottom-5 input-1" type="text" name="name" id="name" placeholder="Name">
                        <input class="max-width-20 dark-1 rounded-10 horizontal-padding-20 form-input-txt vertical-padding-10 vertical-margin-10 input-1" type="email" name="email" id="email" placeholder="Email">
                        <input type="hidden" id="user-type" name="user-type" value="teacher">
                        <div class="max-width-0 dark-1 height-35 line-height-35 primary-txt rounded-10">
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
                        
                        <div class="form-button body-3 orange-button-hover">
                                <input type="submit" class="orange-txt-gradient-2 rounded-30 no-select" value="Let me know!" name="submit-contact"/>
                            </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>


    <div id="courses-pop-up-container" class="hide">
        <div class="courses-pop-up-blur max-width-0 max-height-0 blur"></div>
        <div class="absolute top-50 z-205 max-width-20 max-height-20 padding-20">
            <div class="courses-pop-up-content">
                <div class="courses-pop-up-close-button center-txt circle orange-txt-gradient-1 white-txt body-1 bold pointer" onclick="toggleCoursesPopUp('');">&#10005;</div>
                <div class="courses-pop-up-content courses-summary-height">
                    <div id="courses-pop-up-image" class="rounded-30 lego-bg shadow"></div>
                    <div id="courses-pop-up-summary" class="rounded-30 gray-2 shadow">
                        <div class="heading-2 margin-top-5">Course Title</div>
                        <div class="max-width-0 height-45 margin-top-20">
                            <div class='width-100 margin-top-n5 float-left'>
                                <div class='logo-width primary-txt'><div class='heading-2 white-txt'>8-12</div><span class='body-3'>AGES</span></div>
                            </div>
                            <div class='float-right primary-txt right-txt'>
                                <span class='heading-2 white-txt'>R950</span><br>
                                <span class='body-3'>STARTING FROM</span>
                            </div>
                        </div>
                        <div class='center-txt margin-top-10 height-15 line-height-15 max-width-0 body-5 footer-heading'>
                            <img class='size-10' src='assets/media/images/gray-location-icon.png' alt='Grey location icon'> MULTIPLE LOCATIONS
                        </div>
                        <div class='width-270 center height-30 line-height-30 padding-top-5 center-txt'>
                            <div class='rounded pointer height-30 body-4 width-110 orange-txt-gradient-1 float-left margin-right-10'>BOOK COURSE</div>
                            <div class='rounded-10 pointer height-30 width-150 light-gray-bg float-left body-4 white-txt'><img src='./assets/media/svg/Clock_Icon_Orange.svg' alt='Orange Clock Icon' height='8px'>&nbsp;&nbsp;During School Holidays</div>
                        </div>

                    </div>
                </div>
                <div id="courses-pop-up-description" class="gray-1 shadow rounded-30">
                    <div class="heading-3 margin-bottom-5">Description</div>
                    <div class="body-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, fuga tenetur. Fugiat sit excepturi vero, eveniet a eius dignissimos magnam illo itaque, inventore recusandae quis molestiae quod cum, earum maxime.</div>
                </div>
                <div class="courses-pop-up-content">
                    <div id="courses-pop-up-includes" class="gray-1 rounded-30 shadow">
                        <div class="heading-3 margin-bottom-5">Course Includes</div>
                        <div class="body-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, fuga tenetur. Fugiat sit excepturi vero, eveniet a eius dignissimos magnam illo itaque, inventore recusandae quis molestiae quod cum, earum maxime.</div>
                    </div>
                    <div id="courses-pop-up-learn" class="gray-1 rounded-30 shadow">
                        <div class="heading-3 margin-bottom-5">What Students will Learn</div>
                        <div class="body-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, fuga tenetur. Fugiat sit excepturi vero, eveniet a eius dignissimos magnam illo itaque, inventore recusandae quis molestiae quod cum, earum maxime.</div>
                    </div>
                    <div id="courses-pop-up-suitable" class="gray-1 rounded-30 shadow">
                        <div class="heading-3 margin-bottom-5">Who is the course suitable for?</div>
                        <div class="body-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, fuga tenetur. Fugiat sit excepturi vero, eveniet a eius dignissimos magnam illo itaque, inventore recusandae quis molestiae quod cum, earum maxime.</div>
                    </div>
                </div>
            </div>
            
        </div>
        </div>

        <div id="respValue"></div>
    <!-- Footer -->
    <?php include("./assets/php/footer.php");?>
</body>
</html>