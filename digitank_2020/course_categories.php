<?php
    include("./assets/php/session.php");
    $_SESSION['CURRENT_PAGE'] = 'digitank. | Categories';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("./assets/php/dependencies.php");
        

$name = '';
    ?>
</head>
<body class='dark-2  white-txt'>
    <!-- Header -->
    <?php include("./assets/php/header.php");
    ?>
    <!-- Row 1 -->
       <div id="category-row-1" class="dark-3">
            <div class="category-content">
                <?php
                loadCategoryCourses();
                ?>
            </div>
    </div>

    <div id="courses-pop-up-container" class="hide">
        <div class="courses-pop-up-blur max-width-0 max-height-0 blur"></div>
        <div class="absolute top-50 z-205 max-width-20 max-height-20 padding-20">
            <div class="courses-pop-up-content">
                <div class="courses-pop-up-close-button center-txt circle orange-txt-gradient-1 white-txt body-1 bold pointer" onclick="toggleCoursesPopUp('');">&#10005;</div>
                <div class="courses-pop-up-content courses-summary-height">
                    <div id="courses-pop-up-image" class="rounded-30 shadow"></div>
                    <div id="courses-pop-up-summary" class="rounded-30 gray-2 shadow">
                        <div id='courses-pop-up-title' class="heading-2 margin-top-5"></div>
                        <div class="max-width-0 height-45 margin-top-20">
                            <div class='width-100 margin-top-n5 float-left'>
                                <div class='logo-width primary-txt'><div id='courses-pop-up-age' class='heading-2 white-txt'></div><span class='body-3'>AGES</span></div>
                            </div>
                            <div class='float-right primary-txt right-txt'>
                                <span id='courses-pop-up-price' class='heading-2 white-txt'></span><br>
                                <span class='body-3'>STARTING FROM</span>
                            </div>
                        </div>
                        <div class='center-txt margin-top-10 height-15 line-height-15 max-width-0 body-5 footer-heading'>
                            <img class='size-10' src='assets/media/images/gray-location-icon.png' alt='Grey location icon'> <span id="courses-pop-up-location"></span>
                        </div>
                        <div class='width-270 center height-30 line-height-30 padding-top-5 center-txt'>
                            <a id="courses-pop-up-id" href=""><div class='rounded pointer height-30 body-4 width-110 orange-txt-gradient-1 float-left margin-right-10'>BOOK COURSE</div></a>
                            <div class='rounded-10 pointer height-30 width-150 light-gray-bg float-left body-4 white-txt'><img src='./assets/media/svg/Clock_Icon_Orange.svg' alt='Orange Clock Icon' height='8px'>&nbsp;&nbsp;<span id="courses-pop-up-time">During School Holidays</span></div>
                        </div>

                    </div>
                </div>
                <div id="courses-pop-up-description" class="gray-1 shadow rounded-30">
                    <div class="heading-3 margin-bottom-5">Description</div>
                    <div id='courses-pop-up-description-content' class="body-3"></div>
                </div>
                <div class="courses-pop-up-content">
                    <div id="courses-pop-up-includes" class="gray-1 rounded-30 shadow">
                        <div class="heading-3 margin-bottom-5">Course Includes</div>
                        <div id="courses-pop-up-package" class="body-3"></div>
                    </div>
                    <div id="courses-pop-up-learn" class="gray-1 rounded-30 shadow">
                        <div class="heading-3 margin-bottom-5">What Students will Learn</div>
                        <div id='courses-pop-up-objective' class="body-3"></div>
                    </div>
                    <div id="courses-pop-up-suitable" class="gray-1 rounded-30 shadow">
                        <div class="heading-3 margin-bottom-5">Who is the course suitable for?</div>
                        <div id='courses-pop-up-target' class="body-3"></div>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
        </div>

    <div id="category-row-2 dark-2">
        <div class="category-content vertical-padding-50">
            
                <div class="col-12 course-type-panel">
                    <div class="something-else-panel large-title">
                        <div class="looking-panel">LOOKING FOR SOMETHING ELSE?</div>
                        <div class="blue-txt-gradient-2">TRY THESE</div>
                        
                    </div>
                </div>
                <?php
                
                loadCategories($name)?>
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
    <!-- Footer -->
    <?php include("./assets/php/footer.php");?>
    
</body>
</html>

<?php
    function loadCategories($name){
        include("assets/php/connection.php");
        $sql = "SELECT * FROM categories ORDER BY category_order ASC";
        $result = mysqli_query($dbc, $sql);
        //need name surname email and type
        $count = 0;
        while($category_row = mysqli_fetch_row($result)){
            $category_row_array = $category_row;

            $category_id = $category_row_array[0];
            $category_name = $category_row_array[1];
            $category_description = $category_row_array[2];
            $title = strtoupper($category_name);
            $tmp = '';
            if($name == $title){
                $tmp = "hide";}
            echo "<div class='col-12 course-type-panel $tmp'>
                    <div class='course-type'>
                        <div class='heading-3'>$title</div>
                        <div class='body-3 vertical-margin-10 line-height-15 height-130 margin-bottom-40'>
                            $category_description
                        </div>
                        <a href='course_categories.php?type=$category_id'><div class='button clicked-blue-box-gradient-2 hover-blue-box-gradient-2 hover-blue-box pointer width-200 height-35 line-height-35 center heading-5 center-txt rounded-50 border-gray margin-top-10 margin-bottom-40 vertical-padding-5'>
                            <span class='blue-txt-gradient-2 no-select'> $category_name &nbsp;&nbsp; &rarr;</span>
                        </div></a>
                    </div>
                </div>";

                $count++;
                if($count>= 3){
                break;
                }
    }
}

function loadCategoryCourses(){
    include("assets/php/connection.php");
    
    $category_id = $_GET['type'];
    if(isset($category_id)){
        $sql = "SELECT * FROM categories WHERE category_id = $category_id";
        $result = mysqli_query($dbc, $sql);
        $cArray = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $name = strtoupper($cArray['category_name']);
        $GLOBALS['name'] = $name;
        $description = $cArray['category_description'];
        $colour = '';
        if($name == "1 ON 1 COURSES"){
            $colour = 'blue';
        }
        echo "<div class='heading-1 center-txt padding-top-100'>
                        $name
                    </div>
                    <div class='category-description body-2 center-txt footer-heading center'>
                        $description
                    </div>
                    <div id='category-courses'>
    ";
        $sql = "SELECT * FROM courses WHERE category_id=$category_id";
        $result2 = mysqli_query($dbc, $sql);
        $count = 0;
        $started = false;
        echo "<div class='courses-group-of-3'>";
        while($row = mysqli_fetch_row($result2)){
            $array = $row;

            $id = $array[0];
            $creator = $array[1];
            $category = $array[2];
            $date = $array[3];
            $location = $array[4];
            if(count(explode(',', $location)) > 1){
            $location = 'Multiple locations';
            }else if(is_numeric($location)){
                $location = 'One Location';
            }
            $shortDescription = $array[5];
            $description = $array[6];
            $title = $array[7];
            $age = $array[8];
            $price = $array[9];
            $time = $array[10];
            $package = $array[11];
            $objective = $array[12];
            $target = $array[13];
            $image = $array[14];

            $description = $array[2];
            
            createCategoryCourseCard($id,$title, $shortDescription, $location, $price, $age, $time, $image, $colour);
            $count++;
            
            if($count == 3)
            {
                echo "</div><div class='courses-group-of-3'>";
                $count = 0;
            }
        }
        createCategoryCourseCard('','_request_','', '', '', '', '', '', $colour);
        
            echo '</div>
        </div>';}
        else{
            
        echo '<script>
        window.location = "courses.php";
        </script>';
        }
}
?>