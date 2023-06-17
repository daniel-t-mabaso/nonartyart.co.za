<?php
    function createCoursesCourseCard($id, $title, $shortDescription, $location, $price,$age, $time, $image, $colour){
        if($colour ==''){
            $colour = 'orange';
        }

        if($colour == 'orange'){
            $txtColour = 'primary-txt';
            $boxColour = 'orange-txt-gradient-1';
        }

        else if($colour == 'blue'){
            $txtColour = 'blue-txt';
            $boxColour = 'blue-box-gradient-1';
        }
        if($title=="_blank_"){
            echo "<div class='blank-course-card courses-courses-course-details float-left'><div class='courses-course-image-dummy'></div></div>";
        }
        else if($title=="_request_"){
            if($colour == 'blue'){
                $image = 'assets/media/images/uploads/Request a course.png';
            }
            else{
                $image = 'assets/media/images/uploads/Request a course - orange.png';
            }
            echo "<div class='courses-courses-course-details course-appear'>
            <div class='courses-arrow'><img src='./assets/media/svg/Small Arrow + Shadow.svg' alt='right pointing arrow' width='25px'/></div>
            <div class='courses-course-image' style='background-image:url(\"$image\");background-size: cover;'>
                <div class='gray-2 courses-course-details-panel'>
    
                        
                    <div class='input-1 center-txt bold white-txt margin-top-35'>Request a course</div>
                    <div class='input-2 center-txt footer-heading margin-bottom-15'>Email us your suggestion</div>
                        <div class='width-100 center height-30 line-height-30 center-txt'>
                            <a href='mailTo:learn@digitank.co.za'><div class='rounded pointer height-30 body-4 width-100 center $boxColour float-left horizontal-margin-10'>Email us</div></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>";
        }
        else{
            echo "<div class='courses-courses-course-details course-appear'>
            <div class='courses-arrow'><img src='./assets/media/svg/Small Arrow + Shadow.svg' alt='right pointing arrow' width='25px'/></div>
            <div class='courses-course-image' style='background-image:url(\"$image\");background-size: cover;'>
                <div class='courses-course-details-panel'>
                    <div class='courses-course-details-top'>
                        <div class='width-60 margin-top-n5 float-right'>
                            <div class='float-right logo-width $txtColour'><div class='heading-5 white-txt'>$age</div><span class='body-5'>AGES</span></div>
                        </div>
                        <div class='heading-4 bold'>$title</div>
                        <div class='body-4 footer-heading absolute'>$shortDescription</div>
                        
                    </div>
                    <div class='courses-course-details-bottom'>
                        
                        <div class='float-left margin-top-5 height-15 line-height-15 body-5 footer-heading'><img class='size-9' src='assets/media/images/gray-location-icon.png' alt='Grey location icon'> $location</div>
                        <div class='float-right $txtColour right-txt'><span class='body-5'>STARTING FROM</span>&nbsp;&nbsp;<span class='body-3 white-txt'>$price</span></div>
                        <div class='courses-buttons-panel'>
                        <div class='width-230 center height-30 line-height-30 center-txt'>
                            <div class='rounded pointer padding-2 $boxColour float-left' onclick='toggleCoursesPopUp($id);'><div class='border-1 padding-3 rounded size-20'><img src='./assets/media/svg/info_icon.svg' alt='Information Icon' height='15px'></div></div>
                            <a href='booking.php?id=$id'><div class='rounded pointer height-30 body-4 width-60 $boxColour float-left horizontal-margin-10'>VIEW</div></a>
                            <div class='rounded-10 pointer height-30 width-110 light-gray-bg float-left body-5 white-txt'><img src='./assets/media/svg/Clock_Icon_Orange.svg' alt='Orange Clock Icon' height='8px'>&nbsp;&nbsp;$time</div>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>";
        }
    }
    function createCategoryCourseCard($id, $title, $shortDescription, $location, $price,$age, $time, $image, $colour){
        if($colour ==''){
            $colour = 'orange';
        }

        if($colour == 'orange'){
            $txtColour = 'primary-txt';
            $boxColour = 'orange-txt-gradient-1';
        }

        else if($colour == 'blue'){
            $txtColour = 'blue-txt';
            $boxColour = 'blue-box-gradient-1';
        }
        if($title=="_blank_"){
            echo "<div class='blank-course-card category-courses-course-details float-left'><div class='courses-course-image-dummy'></div></div>";
        }
        else if($title=="_request_"){
            if($colour == 'blue'){
                $image = 'assets/media/images/uploads/Request a course.png';
            }
            else{
                $image = 'assets/media/images/uploads/Request a course - orange.png';
            }
            echo "<div class='category-courses-course-details course-appear'>
            <div class='courses-arrow'><img src='./assets/media/svg/Small Arrow + Shadow.svg' alt='right pointing arrow' width='25px'/></div>
            <div class='courses-course-image' style='background-image:url(\"$image\");background-size: cover;'>
                <div class='gray-2 courses-course-details-panel'>
    
                        
                    <div class='input-1 center-txt bold white-txt margin-top-35'>Request a course</div>
                    <div class='input-2 center-txt footer-heading margin-bottom-15'>Email us your suggestion</div>
                        <div class='width-100 center height-30 line-height-30 center-txt'>
                            <a href='mailTo:learn@digitank.co.za'><div class='rounded pointer height-30 body-4 width-100 center $boxColour float-left horizontal-margin-10'>Email us</div></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>";
        }
        else{
            echo "<div class='category-courses-course-details course-appear'>
            <div class='courses-arrow'><img src='./assets/media/svg/Small Arrow + Shadow.svg' alt='right pointing arrow' width='25px'/></div>
            <div class='courses-course-image' style='background-image:url(\"$image\");background-size: cover;'>
                <div class='courses-course-details-panel'>
                    <div class='courses-course-details-top'>
                        <div class='width-60 margin-top-n5 float-right'>
                            <div class='float-right logo-width $txtColour'><div class='heading-5 white-txt'>$age</div><span class='body-5'>AGES</span></div>
                        </div>
                        <div class='heading-4 bold'>$title</div>
                        <div class='body-4 footer-heading absolute'>$shortDescription</div>
                        
                    </div>
                    <div class='courses-course-details-bottom'>
                        
                        <div class='float-left margin-top-5 height-15 line-height-15 body-5 footer-heading'><img class='size-9' src='assets/media/images/gray-location-icon.png' alt='Grey location icon'> $location</div>
                        <div class='float-right $txtColour right-txt'><span class='body-5'>STARTING FROM</span>&nbsp;&nbsp;<span class='body-3 white-txt'>$price</span></div>
                        <div class='courses-buttons-panel'>
                        <div class='width-230 center height-30 line-height-30 center-txt'>
                            <div class='rounded pointer padding-2 $boxColour float-left' onclick='toggleCoursesPopUp($id);'><div class='border-1 padding-3 rounded size-20'><img src='./assets/media/svg/info_icon.svg' alt='Information Icon' height='15px'></div></div>
                            <a href='booking.php?id=$id'><div class='rounded pointer height-30 body-4 width-60 $boxColour float-left horizontal-margin-10'>VIEW</div></a>
                            <div class='rounded-10 pointer height-30 width-110 light-gray-bg float-left body-5 white-txt'><img src='./assets/media/svg/Clock_Icon_Orange.svg' alt='Orange Clock Icon' height='8px'>&nbsp;&nbsp;$time</div>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>";
        }
    }

    function dashboardPopUp(){
        echo '
        <div id="dashboard-pop-up-window" class="fixed top-0 left-0 z-200 max-height-0 max-width-0 hide">
        <div class="courses-pop-up-blur max-width-0 max-height-0 blur"></div>
        <div id="dashboardPopUp-container" class="max-width-0 max-height-0 absolute z-205 scroll-y">
            <div class="content center max-height-0">
                <div class="courses-pop-up-close-button center-txt circle orange-txt-gradient-1 white-txt body-1 bold pointer" onclick="toggleDashboardPopUp(\'\');">&#10005;</div>
                <div id="add-course" class="max-width-20 padding-20 max-height-20">
                    <form action="./assets/php/forms.php" method="post">
                        <div class="float-left width-310 gray-2 rounded-10 shadow height-360 margin-top-30 padding-20">
                        <input type="hidden" id="add-course-id">
                            <div class="heading-2 margin-top-10 margin-bottom-5">Add Course</div>
                            <input class="height-20 line-height-20 padding-5 rounded-5 width-300 vertical-margin-10 dark-2" type="text" name="add-course-name" id="add-course-title" placeholder="Title"/><br>
                            <input class="height-20 line-height-20 padding-5 rounded-5 width-140 vertical-margin-10 dark-2" type="text" name="add-course-age" id="add-course-age" placeholder="Age Group"/>
                            <input class="height-20 line-height-20 padding-5 rounded-5 width-140 vertical-margin-10 dark-2" type="text" name="add-course-price" id="add-course-price" placeholder="Price"/><br>
                            <input class="height-20 line-height-20 padding-5 rounded-5 width-300 vertical-margin-10 dark-2" type="text" name="add-course-time" id="add-course-time" placeholder="Time"/><br>
                            
                            <select id="category-options-panel" onclick="loadCategoryOptions()" class="height-30 line-height-30 padding-5 rounded-5 width-310 vertical-margin-10 dark-2">
                            
                            </select><br>
                            <select id="course-image-options-panel" onclick="loadCourseImageOptions()" class="height-30 line-height-30 padding-5 rounded-5 width-310 vertical-margin-10 dark-2">
                            
                            </select><br>
                            <input class="height-20 hide line-height-20 padding-5 rounded-5 width-300 vertical-margin-10 dark-2" type="text" name="add-course-location" id="add-course-location" placeholder="Location"/>
                        </div>
                        <div class="float-left width-610 margin-left-20 gray-2 rounded-10 shadow height-360 margin-top-30 padding-20">
                            <div class="heading-2 margin-top-10 margin-bottom-5">Description</div>
                            <textarea class="height-40 input-1 line-height-20 padding-5 rounded-5 max-width-5 left-txt vertical-margin-10 dark-2" id="add-course-short-description" name="add-course-short-description" placeholder="Short Description"></textarea>
                            <textarea class="height-200 input-1 line-height-20 padding-5 rounded-5 max-width-5 left-txt vertical-margin-10 dark-2" id="add-course-long-description" name="add-course-long-description" placeholder="Long Description"></textarea>
                        </div>
                        <div class="float-left max-width-25 gray-2 rounded-10 shadow height-440 margin-bottom-30 margin-top-30 padding-20">
                            <div class="heading-2 margin-top-10 margin-bottom-5">Curriculum Details</div>
                            <textarea class="height-285 input-1 line-height-20 padding-5 rounded-5 half-width-10 left-txt vertical-margin-10 dark-2 float-right" id="add-course-objective" name="add-course-objective" placeholder="What students will learn"></textarea>
                            <textarea class="height-125 input-1 line-height-20 padding-5 rounded-5 half-width-10 margin-right-10 left-txt vertical-margin-10 dark-2" id="add-course-package" name="add-course-package" placeholder="Courses Include"></textarea>
                            <textarea class="height-125 input-1 line-height-20 padding-5 rounded-5 half-width-10 left-txt vertical-margin-10 dark-2" id="add-course-target" name="add-course-target" placeholder="Who is this course Suitable for?"></textarea>
                        
                        
                            <div id="add-course-button" class="form-button body-3 orange-button-hover" onclick="forwardRequest(\'add-course\', \'\');toggleDashboardPopUp(\'\');">
                                <input type="button" class="pointer orange-txt-gradient-2 rounded-30 no-select" value="ADD COURSE" name="add-course">
                            </div>
                            
                            <div id="edit-course-button" class="form-button body-3 orange-button-hover" onclick="forwardRequest(\'edit-course\', this);toggleDashboardPopUp(\'\');">
                                <input type="button" class="pointer orange-txt-gradient-2 rounded-30 no-select" value="SAVE CHANGES" name="edit-course">
                            </div>
                        </div>
                    </form>
                </div>
                <div id="add-category" class="max-width-0 margin-top-10 hide max-height-20">
                    <form action="./assets/php/forms.php" method="post">
                        <div class="float-left width-310 margin-left-20 gray-2 rounded-10 shadow height-360 margin-top-30 padding-20">
                        <input type="hidden" id="add-category-id">
                            <div class="heading-2 margin-top-10 margin-bottom-5">Add Category</div>
                            <input class="height-20 line-height-20 padding-5 rounded-5 width-300 vertical-margin-10 dark-2" type="text" name="add-course-name" id="add-category-title" placeholder="Title"/><br>
                            <textarea class="height-150 input-1 line-height-20 padding-5 rounded-5 max-width-5 left-txt vertical-margin-10 dark-2" name="add-category-description" id="add-category-description" placeholder="Description"></textarea>
                        
                            <div id="add-category-button" class="form-button body-3 orange-button-hover" onclick="forwardRequest(\'add-category\', \'\');toggleDashboardPopUp(\'\');">
                                <input type="button" class="pointer orange-txt-gradient-2 rounded-30 no-select" value="ADD CATEGORY" name="add-category">
                            </div>
                            <div id="edit-category-button" class="form-button body-3 orange-button-hover" onclick="forwardRequest(\'edit-category\', this);toggleDashboardPopUp(\'\');">
                                <input type="button" class="pointer orange-txt-gradient-2 rounded-30 no-select" value="SAVE CHANGES" name="edit-category">
                            </div>
                        </div>
                    </form>
                </div>
                <div id="add-image" class="max-width-0 margin-top-10 hide max-height-20">
                    <form action="./assets/php/forms.php" method="post" enctype="multipart/form-data">
                        <div class="float-left width-310 margin-left-20 gray-2 rounded-10 shadow height-360 margin-top-30 padding-20">
                            <div class="heading-2 margin-top-10 margin-bottom-5">Add Image</div>
                            <input accept="image/*" class="height-20 line-height-20 padding-5 rounded-5 width-300 vertical-margin-10 dark-2" type="file" name="add-image" id="add-image"><br>
                            <input class="height-20 line-height-20 padding-5 rounded-5 width-300 vertical-margin-10 dark-2" type="text" name="add-image-name" id="add-image-name" placeholder="What is the image title?"/><br>
                            <input class="height-20 line-height-20 padding-5 rounded-5 width-300 vertical-margin-10 dark-2" type="text" name="add-image-description" id="add-image-description" placeholder="What is in the image?"/><br>
                            <select id="add-image-type" name="add-image-type" class="height-30 line-height-30 padding-5 rounded-5 width-310 vertical-margin-10 dark-2">
                                <option disabled selected value="">--Select image type--</option>
                                <option value="location">Location logo</option>
                                <option value="course">Course image</option>
                            </select>
                            <div class="form-button body-3 orange-button-hover">
                                <input type="submit" class="pointer orange-txt-gradient-2 rounded-30 no-select" value="ADD IMAGE" name="img-upload">
                            </div>
                        </div>
                    </form>
                </div>
                <div id="add-location" class="max-width-0 margin-top-10 hide max-height-20">
                    <form action="./assets/php/forms.php" method="post">
                        <div class="float-left width-310 margin-left-20 gray-2 rounded-10 shadow height-490 margin-top-30 padding-20">
                            <input type="hidden" id="add-location-id">
                            <div class="heading-2 margin-top-10 margin-bottom-5">Add Location</div>
                            <input class="height-20 line-height-20 padding-5 rounded-5 width-300 vertical-margin-10 dark-2" type="text" name="add-location-name" id="add-location-name" placeholder="Name"/><br>
                            <textarea class="height-40 input-1 line-height-20 padding-5 rounded-5 max-width-5 left-txt vertical-margin-10 dark-2" name="add-location-street" id="add-location-street" placeholder="Street"></textarea>
                            <input class="height-20 line-height-20 padding-5 rounded-5 width-300 vertical-margin-10 dark-2" type="text" name="add-location-city" id="add-location-city" placeholder="City"/><br>
                            <input class="height-20 line-height-20 padding-5 rounded-5 width-300 vertical-margin-10 dark-2" type="text" name="add-location-code" id="add-location-code" placeholder="ZIP/Postal Code"/><br>
                            <input class="height-20 line-height-20 padding-5 rounded-5 width-300 vertical-margin-10 dark-2" type="text" name="add-location-province" id="add-location-province" placeholder="State/Province"/><br>
                            <input class="height-20 line-height-20 padding-5 rounded-5 width-300 vertical-margin-10 dark-2" type="text" name="add-location-country" id="add-location-country" placeholder="Country"/><br>
                            
                            <select id="location-image-options-panel" onclick="loadLocationImageOptions()" class="height-30 line-height-30 padding-5 rounded-5 width-310 vertical-margin-10 dark-2">
                            
                            </select>
                            <div id="add-location-button" class="form-button body-3 orange-button-hover" onclick="forwardRequest(\'add-location\', \'\');toggleDashboardPopUp(\'\');">
                                <input type="button" class="pointer orange-txt-gradient-2 rounded-30 no-select" value="ADD LOCATION" name="add-location">
                            </div>
                            <div id="edit-location-button" class="form-button body-3 orange-button-hover" onclick="forwardRequest(\'edit-location\', \'\');toggleDashboardPopUp(\'\');">
                                <input type="button" class="pointer orange-txt-gradient-2 rounded-30 no-select" value="SAVE CHANGES" name="add-location">
                            </div>
                        </div>
                    </form>
                </div>
                <div id="change-course-locations" class="max-width-0 margin-top-10 hide max-height-20">
                    <form action="" method="post">
                        <div class="float-left width-310 margin-left-20 gray-2 rounded-10 shadow height-490 margin-top-30 padding-20">
                            <div class="heading-2 margin-top-10 margin-bottom-5">Change Course Locations</div>
                            <div id="course-locations-panel" class="margin-top-20 scroll-y height-300 line-height-15"></div>
                            <div class="form-button body-3 orange-button-hover" onclick="forwardRequest(\'save-course-locations\', this);toggleDashboardPopUp(\'\');">
                                <input type="button" class="pointer orange-txt-gradient-2 rounded-30 no-select" value="SAVE" name="add-location">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        ';
    }
?>