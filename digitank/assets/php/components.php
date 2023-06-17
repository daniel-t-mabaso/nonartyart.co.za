<?php
    function createCoursesCourseCard($title, $shortDescription, $location, $price,$age, $time, $image){
        echo "<div class='courses-courses-course-details float-left horizontal-margin-15'>
        <div class='courses-arrow'><img src='./assets/media/svg/Small Arrow + Shadow.svg' alt='right pointing arrow' width='25px'/></div>
        <div class='courses-course-image $image'>
            <div class='courses-course-details-panel'>
                <div class='courses-course-details-top'>
                    <div class='width-60 margin-top-n5 float-right'>
                        <div class='float-right logo-width primary-txt'><div class='heading-5 white-txt'>$age</div><span class='body-5'>AGES</span></div>
                    </div>
                    <div class='heading-4 bold'>$title</div>
                    <div class='body-4 footer-heading absolute'>$shortDescription</div>
                    
                </div>
                <div class='courses-course-details-bottom'>
                    
                    <div class='float-left margin-top-5 height-15 line-height-15 body-5 footer-heading'><img class='size-9' src='assets/media/images/gray-location-icon.png' alt='Grey location icon'> $location</div>
                    <div class='float-right primary-txt right-txt'><span class='body-5'>STARTING FROM</span>&nbsp;&nbsp;<span class='body-3 white-txt'>$price</span></div>
                    <div class='courses-buttons-panel'>
                    <div class='width-230 center height-30 line-height-30 center-txt'>
                        <div class='rounded pointer padding-2 orange-txt-gradient-1 float-left'><div class='border-1 padding-3 rounded size-20'><img src='./assets/media/svg/info_icon.svg' alt='Information Icon' height='15px'></div></div>
                        <div class='rounded pointer height-30 body-4 width-60 orange-txt-gradient-1 float-left horizontal-margin-10'>VIEW</div>
                        <div class='rounded-10 pointer height-30 width-110 light-gray-bg float-left body-5 white-txt'><img src='./assets/media/svg/Clock_Icon_Orange.svg' alt='Orange Clock Icon' height='8px'>&nbsp;&nbsp;$time</div>
                    </div>
                </div>
                </div>
                
            </div>
        </div>
    </div>";
    }
?>