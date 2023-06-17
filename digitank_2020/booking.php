<?php
    include("./assets/php/session.php");
    $_SESSION['CURRENT_PAGE'] = 'digitank. | Booking';
    $description = '';
    $title = 'No Course Selected';
    $age = '';
    $price = '';
    $time = '';
    $package = '';
    $objective = '';
    $target = '';
    $course_image = '';
    $location_content = "";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        //fetch course details
        include('assets/php/connection.php');
        $sql = "SELECT * FROM courses WHERE course_id=$id";
        $result = mysqli_query($dbc, $sql);
        
        $array = mysqli_fetch_array($result, MYSQLI_ASSOC);
            
        $location = explode(',', $array['course_locations']);
        
        $description = $array['long_description'];
        $title = $array['course_title'];
        $category = $array['category_id'];


        $age = $array['course_age'];
        $price = $array['course_price'];
        $time = $array['course_time'];
        $package = $array['course_package'];
        $objective = $array['course_objective'];
        $target = $array['course_target'];
        $course_image = $array['image_url'];

        
        $sql = "SELECT * FROM categories WHERE category_id=$category";
        $result = mysqli_query($dbc, $sql);
        $array = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $category = $array['category_name'];
        //loop through course locations and get name and image
        
        $colour = '';
            $txtColour = 'primary-txt';
            $boxColour = 'orange-txt-gradient-1';
        if($category == '1 on 1 Courses'){
            $colour = 'blue';
            $txtColour = 'blue-txt';
            $boxColour = 'blue-box-gradient-1';
        }

        $count = 0;
        $started = false;
        $location_content .= "<div class='courses-group-of-3'>";
        for($i = 0; $i<count($location); $i++){
            $tmp = $location[$i];
            if(is_numeric($tmp)){
                $sql = "SELECT * FROM locations WHERE location_id=$tmp";
                $result = mysqli_query($dbc, $sql);

                $array = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $name = $array['name'];
                $image = $array['image_url'];
                $location_content .= loadBookingCard($id, $image, $tmp, $name, $price, $time, $colour);
            }else{
                $location_content.=loadBookingCard($id, "assets/media/images/uploads/blank.png", $tmp, $tmp, $price, $time, $colour);
            }
            $count++;
            if($count == 3){
            $location_content .= "</div><div class='courses-group-of-3'>";
            $count = 0;
            }
        }
        
        $location_content .= "</div>";
        include('assets/php/close_connection.php');
        //fetch locations
    }else{
        echo '<script>
                    window.location = "courses.php";
                    </script>';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("./assets/php/dependencies.php");
    ?>
</head>
<body class='dark-2  white-txt body-3'>
    <!-- Header -->
    <?php include("./assets/php/header.php");
    ?>
    <!-- Row 1 -->
       <div id="booking-row-1" class="hide-overflow">
            <div id="booking-cover-image" class="opacity-70 max-width-0 hide-overflow top-0">
                <img <?php echo "src='$course_image';"?> style="background-size: cover; filter: blur(20px); background-position: center;  -webkit-filter: blur(20px);" id='course-cover';>
            </div>
            <div class="content">
                <div id='booking-course-image' class="rounded-15 shadow" <?php echo "style='background-image: url(\"$course_image\"); background-size: cover;'";?>>
                </div>
                <div id="booking-course-details" class=" padding-top-50">
                <?php echo "<div class='float-right'><div class='heading-2 white-txt'>$age</div><span class='body-3 $txtColour'>AGES</span></div><div class='heading-2'>$title</div><div class='heading-3 footer-heading'>$category</div>
                <div class='heading-3 vertical-margin-15'>Description</div>
                $description";?>
                </div>
            </div>
    </div>
</div>
    <div id="booking-row-2">
        <div class="content">
            <div class="booking-course-details-panel">
                <div class="heading-3 booking-course-details-heading">What will students learn?</div>
                <?php echo $objective;?>
            </div>
            <div class="booking-course-details-panel">
                <div class="heading-3 booking-course-details-heading">What is included?</div>
                <?php echo $package;?>
            </div>
            <div class="booking-course-details-panel">
                <div class="heading-3 booking-course-details-heading">Who is it suitable for?</div>
                <?php echo $target;?>
            </div>
        </div>
    </div>
    <div id="booking-row-3" class="gray-2">
        <div class="content">
            <div class="heading-3 center-txt margin-top-30">VIEWING AVAILABLE COURSES</div>
                <?php echo $location_content?>    
            </div>
        </div>
    <div id="booking-row-4" class=" courses-panel-gradient">

    <div id="respValue"></div>
    <div class="content">
            <div class="heading-3 padding-top-50">SOME OF OUR OTHER COURSES</div>
        </div>
    <?php
        include("assets/php/connection.php");
        echo  "<div id='' class='courses-row'>
            
        <div class='courses-row-padding'>
            <div class='courses-slider-panel'>
                    <div class='booking-scroll-right' onclick='scrollX(\"-320\", this);'></div>
                    <div class='booking-scroll-left' onclick='scrollX(\"320\", this);'></div>
                <div class='courses-slider-panel-extended'>
                    
                    <div class='margin-left-20 width-10 max-height-0 float-left'></div>";
        
        //fetch courses in this category
        $sql = "SELECT * FROM courses";
        $result2 = mysqli_query($dbc, $sql);
        $count = 0;
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
                createCoursesCourseCard($id,$title, $shortDescription, $location, $price, $age, $time, $image, $colour);
            if($count++ > 7){
            break;
            }
            }
            
            include("assets/php/close_connection.php");
            createCoursesCourseCard('','_blank_','','','','', '', '', '');
            echo"       </div>
                    </div>
                    
                </div>
            </div>";
        ?>

</div>
    <!-- Footer -->
    <?php include("./assets/php/footer.php");?>
    
</body>
</html>

<?php

function loadBookingCard($id, $logo, $location_id, $location_name, $price, $time, $colour){
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
    return "<div class='booking-card-container'>
    <div class='width-140 z-10 absolute center-txt'>
        <div class='size-100 circle white-bg hide-overflow center'>
            <img src='$logo' height='100%' width='100%'>
        </div>
        <div class='vertical-margin-10 height-40 line-height-20'>
        $location_name</div>
        <div onclick='forwardRequest(\"book-course\", \"$id~$location_id\");' class='pointer rounded-30 center height-20 padding-10 line-height-20 width-90 shadow $boxColour center-txt'>BOOK</div>
    </div>
    <div class='padding-top-40'>
        <div class='rounded-20 max-width-0 height-140 hide-overflow shadow'>
            <div class='width-140 height-140 float-left gray-2'>

            </div>
            <div class='width-70 padding-15 height-110 float-left gray-1'>
                <div class='input-1 bold margin-top-20'>Time</div>
                <div class='body-4 vertical-margin-10 height-30'>$time</div>
                <div class='input-2 $txtColour'>Price</div>
                <div class='heading-4 bold'>$price</div>
                
            </div>
        </div>
    </div>
</div>
";
}
?>