<?php
    @include 'session.php';
    include 'connection.php';
    include 'class_lib_direct.php';
    @include 'session.php';

    $q = $_REQUEST["q"];
    $destination = $_REQUEST["id"];
    if($current_user->get_type() == "admin" || $current_user->get_type() == "mod"){
        switch($q){
        case 'booking-cancelled':
            //make user  regular
            $sql = "UPDATE `bookings` SET `status` = 'cancelled' WHERE `booking_id` = '$destination'";
            mysqli_query($dbc, $sql);
            echo "Booking successfully cancelled.";
            break;
        case 'booking-reserved':
            //make user editor
            $sql = "UPDATE `bookings` SET `status` = 'reserved' WHERE `booking_id` = '$destination'";
            mysqli_query($dbc, $sql);
            echo "Booking status successfully updated.";
            break;
        case 'booking-paid':
            //make user editor
            $sql = "UPDATE `bookings` SET `status` = 'paid' WHERE `booking_id` = '$destination'";
            mysqli_query($dbc, $sql);
            echo "Booking status successfully updated.";
            break;
        case 'booking-completed':
            //make user editor
            $sql = "UPDATE `bookings` SET `status` = 'completed' WHERE `booking_id` = '$destination'";
            mysqli_query($dbc, $sql);
            echo "Booking status successfully updated.";
            break;


        case 'make-mod':
            //make user  regular
            $sql = "UPDATE `users` SET `user_type` = 'mod' WHERE `user_email` = '$destination'";
            mysqli_query($dbc, $sql);
            echo "User type successfully updated.";
            break;
        case 'make-teacher':
            //make user editor
            $sql = "UPDATE `users` SET `user_type` = 'teacher' WHERE `user_email` = '$destination'";
            mysqli_query($dbc, $sql);
            echo "User type successfully updated.";
            break;
        case 'make-parent':
            //make user editor
            $sql = "UPDATE `users` SET `user_type` = 'parent' WHERE `user_email` = '$destination'";
            mysqli_query($dbc, $sql);
            echo "User type successfully updated.";
            break;
        case 'make-student':
            //make user editor
            $sql = "UPDATE `users` SET `user_type` = 'student' WHERE `user_email` = '$destination'";
            mysqli_query($dbc, $sql);
            echo "User type successfully updated.";
            break;
        case 'make-unverified':
            //make user editor
            $sql = "UPDATE `users` SET `user_type` = 'unverified' WHERE `user_email` = '$destination'";
            mysqli_query($dbc, $sql);
            echo "User type successfully updated.";
            break;
        case 'make-admin':
            //make user admin
            $sql = "UPDATE `users` SET `user_type` = 'admin' WHERE `user_email` = '$destination'";
            mysqli_query($dbc, $sql);
            echo "User type successfully updated.";
            break;


        case 'users':
            //make user admin
            
            $sql = "SELECT * FROM users";
            $result = mysqli_query($dbc, $sql);
            //need name surname email and type
            $open = "<details class='input-1 vertical-margin-5 gray-2 padding-10 rounded-10 white-txt margin-bottom-15 line-height-25'><summary class='heading-3 primary-txt left-txt'> ";
            $close1 = "</summary>";
            $close2 = "</details>";
            $string ="";
            $admins="";
            $mods="";
            $teachers="";
            $parents="";
            $students="";
            $unvs="";

            $count1 = 0; 
            $count2 = 0; 
            $count3 = 0; 
            $count4 = 0; 
            $count5 = 0; 
            $count6 = 0;

            $string .="";
            while($row = mysqli_fetch_row($result)){
                $array = $row;

                $name = $array[2];
                $surname = $array[3];
                $email = $array[0];
                $type = $array[4];
                $date = $array[5];
                $tmp = "<details class='input-1 vertical-margin-5 gray-1 padding-10 rounded-10 white-txt margin-bottom-15 line-height-25'><summary class='heading-3 footer-heading left-txt'> $name $surname</summary><br> Email: $email<br>Registered on $date";
                if($current_user->get_email()!=$email){
                    $tmp .="<select class='change-user-type' onchange='request(this.value, \"$email\")'><option value='' selected disabled hidden>-- change user type --</option>";

                    if($type!="unverified"){
                    $tmp .="<option value='make-unverified'>Unverify</option>";}
                    if($type!="student"){
                    $tmp .="<option value='make-student'>Make Student</option>";}
                    if($type!="parent"){
                    $tmp .="<option value='make-parent'>Make Parent</option>";}
                    if($type!="teacher"){
                    $tmp .="<option value='make-teacher'>Make Teacher</option>";}
                    if($type!="mod"){
                    $tmp .="<option value='make-mod'>Make Moderator</option>";}
                    if($type!="admin"){
                    $tmp .="<option value='make-admin'>Make Administrator</option>";}

                    $tmp.="</select>";
                }
                $tmp.="</details>";

                switch($type){
                    case 'admin':
                        $admins .=$tmp;
                        $count1++;
                        break;
                    case 'mod':
                        $mods .=$tmp;
                        $count2++;
                        break;
                    case 'teacher':
                        $teachers .=$tmp;
                        $count3++;
                        break;
                    case 'parent':
                        $parents .=$tmp;
                        $count4++;
                        break;
                    case 'student':
                        $students .=$tmp;
                        $count5++;
                        break;
                    case 'unverified':
                        $unvs .=$tmp;
                        $count6++;
                        break;
                }
            }

            if($admins == ""){
                $admins = "<br>No users available";
            }
            if($mods == ""){
                $mods = "<br>No users available";
            }
            if($teachers == ""){
                $teachers = "<br>No users available";
            }
            if($parents == ""){
                $parents = "<br>No users available";
            }
            if($students == ""){
                $students = "<br>No users available";
            }
            if($unvs == ""){
                $unvs = "<br>No users available";
            }
            $string .= "$open Administrators <span class='float-right'>[$count1]</span> $close1 $admins $close2 
                        $open Moderators <span class='float-right'>[$count2]</span> $close1 $mods $close2
                        $open Teachers <span class='float-right'>[$count3]</span> $close1 $teachers $close2 
                        $open Parents <span class='float-right'>[$count4]</span> $close1 $parents $close2 
                        $open Students <span class='float-right'>[$count5]</span> $close1 $students $close2 
                        $open Unverified <span class='float-right'>[$count6]</span> $close1 $unvs $close2";
            echo $string;
            break;
        case 'categories':
            //make user admin
            
            $sql = "SELECT * FROM categories ORDER BY category_order ASC";
            $result = mysqli_query($dbc, $sql);
            //need name surname email and type
            $number_of_rows = mysqli_num_rows($result);

            
            $string ="";
            $string .="<div class='add-new-button circle size-15 padding-10 fixed shadow center-txt line-height-15 pointer primary-bg heading-2' onclick='toggleDashboardPopUp(\"categories\")'>+</div>";
            $tmp ="";
            while($row = mysqli_fetch_row($result)){
                $array = $row;

                $id = $array[0];
                $reorder = "<select id='change-category-order' class='change-booking-status float-right' onchange='request(\"change-category-order\", this)'>
                            
                            <option value='' selected disabled hidden>-- change category order --</option>
                            ";
                for($i = 1; $i <=$number_of_rows; $i++){
                        $reorder .= "<option value='$i'>To position $i</option>";
                }
                $reorder .="</select><input class='absolute' type='hidden' value='$id'>";
                $name = $array[1];
                $description = $array[2];
                if(strlen($description)>20){
                $shortDescr = substr($description, 0, 20)."...";}
                else{
                    $shortDescr = $description;
                }
                $creator = $array[3];
                $date = $array[4];
                $tmp .= "<details class='category input-1 vertical-margin-5 dark-3 padding-10 rounded-10 white-txt margin-bottom-15 line-height-25'>
                <input type='hidden' value='$id'/>
                <summary class='heading-3 footer-heading left-txt'><span>$name</span> $reorder</summary>
                <br> <div>$description</div><br>
                <span class='italic footer-heading'> Created by $creator on $date</span>
                
                <span class='float-right input-2 margin-left-10 bold padding-5 height-15 line-height-15 rounded-5 white-txt pointer center-txt shadow primary-bg' onclick='confirmationRequest(\"delete-category\",\"$id\")'>DELETE</span>
                <span class='float-right input-2 margin-left-10 bold padding-5 height-15 line-height-15 rounded-5 white-txt pointer center-txt shadow primary-bg' onclick='dashboardPopUp(\"edit-category\",\"$id\")'>EDIT</span>
                
                </details>";
            }
            if($tmp==""){
                $tmp = "No categories created yet.";
            }
            $string .= "$tmp";
            echo $string;
            break;
        case 'images':
            //make user admin
            
            $sql = "SELECT * FROM images";
            $result = mysqli_query($dbc, $sql);
            //need name surname email and type
            $string ="";
            $string .="<div class='add-new-button circle size-15 padding-10 fixed shadow center-txt line-height-15 pointer primary-bg heading-2' onclick='toggleDashboardPopUp(\"images\")'>+</div>";
            $tmp ="";
            while($row = mysqli_fetch_row($result)){
                $array = $row;

                $url = $array[0];
                $name = $array[1];
                if(strlen($name)>23){
                    $name = substr($name, 0, 20)."...";
                }
                $description = $array[2];
                $tmp .= "<div class='width-150 horizontal-margin-10 margin-bottom-5 height-160 center-txt hide-overflow float-left'>$name<br><img alt='$description' class='margin-top-5' src='$url' height='100px'/><div class='input-2 bold padding-5 height-15 line-height-15 margin-top-10 rounded-5 white-txt pointer center-txt shadow primary-bg' onclick='confirmationRequest(\"delete-image\",\"$url\")'>DELETE</div></div>";
            }
            if($tmp==""){
                $tmp = "No images created yet.";
            }
            $string .= "$tmp";
            echo $string;
            break;
        case 'load-category-name':
            //make user admin
            
            $sql = "SELECT category_name FROM categories WHERE category_id = $destination";
            $result = mysqli_query($dbc, $sql);
            //need name surname email and type
            
            $array = mysqli_fetch_array($result, MYSQLI_ASSOC);
            echo $array['category_name'];
            break;
        case 'category-options':
            //make user admin
            
            $sql = "SELECT * FROM categories";
            $result = mysqli_query($dbc, $sql);
            //need name surname email and type
            $string ="";
            $tmp ="<option disabled selected>Select course type</option>";
            while($row = mysqli_fetch_row($result)){
                $array = $row;

                $id = $array[0];
                $name = $array[1];
                $description = $array[2];
                if(strlen($description)>20){
                $shortDescr = substr($description, 0, 20)."...";}
                else{
                    $shortDescr = $description;
                }
                $creator = $array[3];
                $date = $array[4];
                $tmp .= "<option value='$id'> $name</option>";
            }
            $string .= $tmp;
            echo $string;
            break;
        case 'change-category-order':
            //make user admin
            $id = (int)explode(',',$destination)[0];
            $order = explode(',',$destination)[1];
            
            // get id of category currently with this order
            $sql = "SELECT * FROM categories WHERE category_order = $order";
            $replacement = mysqli_query($dbc, $sql);
            $row = mysqli_fetch_array($replacement, MYSQLI_ASSOC); // Use something like this to get the result
            $replacement = $row['category_id'];
            
            //$str = mysqli_error($dbc); 
            //get old order of the category we want to change
            
            $sql = "SELECT * FROM `categories` WHERE `category_id` = $id";
            $old_order = mysqli_query($dbc, $sql);
            $row = mysqli_fetch_array($old_order, MYSQLI_ASSOC);
            $old_order = $row['category_order'];
            
            
            // //replace the category in the current order with the order of the new category that will take it's order 
            if(is_numeric($replacement) && $replacement > 0){
                $sql = "UPDATE `categories` SET `category_order` = $old_order WHERE `category_id` = $replacement";
                $result = mysqli_query($dbc, $sql);
            }
            // //change order to new order
            if(is_numeric($order) && (int)$order > 0){
                
           $order = (int)$order;
           $id = (int)$id;
             //echo "Changing $old_order to $order at $id";
                $sql = "UPDATE `categories` SET `category_order` = $order WHERE `category_id` = $id";
                $result = mysqli_query($dbc, $sql);
                echo "Successfully changed category order" ;
            }
            break;
        case 'course-image-options':
            //make user admin
            
            $sql = "SELECT * FROM images WHERE image_type = 'course'";
            $result = mysqli_query($dbc, $sql);
            //need name surname email and type
            $string ="";
            $tmp ="<option disabled selected>Select course image</option>";
            while($row = mysqli_fetch_row($result)){
                $array = $row;

                $url = $array[0];
                $name = $array[1];
                $tmp .= "<option value='$url'> $name</option>";
            }
            $string .= $tmp;
            echo $string;
            break;
        case 'location-image-options':
            //make user admin
            
            $sql = "SELECT * FROM images WHERE image_type = 'location'";
            $result = mysqli_query($dbc, $sql);
            //need name surname email and type
            $string ="";
            $tmp ="<option disabled selected>Select location image</option>";
            while($row = mysqli_fetch_row($result)){
                $array = $row;

                $url = $array[0];
                $name = $array[1];
                $tmp .= "<option value='$url'> $name</option>";
            }
            $string .= $tmp;
            echo $string;
            break;
        case 'courses':
            //make user admin
            
            $sql = "SELECT * FROM courses";
            $result = mysqli_query($dbc, $sql);
            //need name surname email and type
            $string ="";
            $string .="<div class='add-new-button circle size-15 padding-10 fixed shadow center-txt line-height-15 pointer primary-bg heading-2' onclick='toggleDashboardPopUp(\"courses\")'>+</div><ul>";
            $tmp ="";
            while($row = mysqli_fetch_row($result)){
                $array = $row;

                $id = $array[0];
                $creator = $array[1];
                $category = $array[2];
                $date = $array[3];
                $location = $array[4];
                $shortDescr = $array[5];
                $description = $array[6];
                $title = $array[7];
                $age = $array[8];
                $price = $array[9];
                $time = $array[10];
                $package = $array[11];
                $objective = $array[12];
                $target = $array[13];
                $image = $array[14];
                $f = $array[15];
                $feature = 'empty_star';
                if($f=="true"){
                    $feature = 'coloured_star';
                }

                $sql = "SELECT category_name FROM categories WHERE category_id = $category";
                $result4 = mysqli_query($dbc, $sql);
                //need name surname email and type
                
                $ar = mysqli_fetch_array($result4, MYSQLI_ASSOC);
                
                $cat_name = $ar['category_name'];
                $tmp .= "<details class='course input-1 vertical-margin-5 dark-3 padding-10 rounded-10 white-txt margin-bottom-15 line-height-25'>
                <input type='hidden' value='$id'/>
                <summary class='heading-3 footer-heading left-txt'><span>$title</span><img class='float-right' onclick='forwardRequest(\"change-course-feature\",this)' src='assets/media/images/$feature.png' width='20px'></summary>
                <img src='$image' class='rounded-10 margin-top-20' height='120px'/><br>
                <span class='primary-txt'>Course Type: </span><span class='italic' id='course-category-display'>$cat_name</span>
                
                <br><b>Age: </b> <i>$age</i>
                <br><b>Price: </b> <i>$price</i>
                <br><b>Time: </b> <i>$time</i>
                <br><b>Location: </b> <i>$location</i>
                <br><b>Short Description: </b><i>$shortDescr</i>
                <br><b>Long Description: </b> <i>$description</i>
                <br><b>The Course Includes: </b> <i>$package</i>
                <br><b>Students will learn: </b> <i>$objective</i>
                <br><b>Who is suitable: </b> <i>$target</i> <br>
                <span class='italic footer-heading'> Created by $creator on $date</span>
                <span class='float-right input-2 margin-left-10 bold padding-5 height-15 line-height-15 rounded-5 white-txt pointer center-txt shadow primary-bg' onclick='confirmationRequest(\"delete-course\",\"$id\")'>DELETE</span>
                <span class='float-right input-2 margin-left-10 bold padding-5 height-15 line-height-15 rounded-5 white-txt pointer center-txt shadow primary-bg' onclick='dashboardPopUp(\"edit-course\",\"$id\")'>EDIT</span>
                <span class='float-right input-2 margin-left-10 bold padding-5 height-15 line-height-15 rounded-5 white-txt pointer center-txt shadow gray-2' onclick='forwardRequest(\"change-course-locations\",\"$id\")'>LOCATIONS</span>

                </details>";
            }
            if($tmp==""){
                $tmp = "No courses created yet.";
            }
            $string .= "$tmp</ul>";
            echo $string;
            break;
        
        case 'locations':
            //make user admin
            
            $sql = "SELECT * FROM locations";
            $result = mysqli_query($dbc, $sql);
            //need name surname email and type
            $string ="";
            $string .="<div class='add-new-button circle size-15 padding-10 fixed shadow center-txt line-height-15 pointer primary-bg heading-2' onclick='toggleDashboardPopUp(\"locations\")'>+</div><ul>";
            $tmp ="";
            while($row = mysqli_fetch_row($result)){
                $array = $row;

                $id = $array[0];
                $name = $array[1];
                $street = $array[2];
                $city = $array[3];
                $code = $array[4];
                $province = $array[5];
                $country = $array[6];
                $creator = $array[7];
                $date = $array[8];
                $image = $array[9];
                $tmp .= "<details class='location input-1 vertical-margin-5 dark-3 padding-10 rounded-10 white-txt margin-bottom-15 line-height-25'>
                    <input type='hidden' value='$id'/>
                    <summary class='heading-3 footer-heading left-txt'> $name</summary>
                    <img src='$image' class='rounded-10 margin-top-20' height='90px'/>
                    <br><br>
                    <div>$street</div>
                    <span>$city</span>, 
                    <span>$code</span>
                    <br><span>$province</span>, 
                    <span>$country</span><br>
                    <span class='italic footer-heading'> Created by $creator on $date</span>
                    <span class='float-right input-2 margin-left-10 bold padding-5 height-15 line-height-15 rounded-5 white-txt pointer center-txt shadow primary-bg' onclick='confirmationRequest(\"delete-location\",\"$id\")'>DELETE</span>
                    <span class='float-right input-2 margin-left-10 bold padding-5 height-15 line-height-15 rounded-5 white-txt pointer center-txt shadow primary-bg' onclick='dashboardPopUp(\"edit-location\",\"$id\")'>EDIT</span>
                    </details>";
            }
            if($tmp==""){
                $tmp = "No locations created yet.";
            }
            $string .= "$tmp</ul>";
            echo $string;
            break;
        case 'add-category':
            //make user admin
            $title = mysqli_real_escape_string($dbc,explode("~",$destination)[0]);
            $description = mysqli_real_escape_string($dbc,explode("~",$destination)[1]);
            $author = mysqli_real_escape_string($dbc,$current_user->get_email());
            $sql = "INSERT INTO categories (category_name, category_description, creator_email, `category_id`)
            VALUES ('$title', '$description', '$author', 1)";
            mysqli_query($dbc, $sql);
            echo "Category successfully created.";
            break;
        case 'edit-category':
            //make user admin
            
            $id = mysqli_real_escape_string($dbc,explode("~",$destination)[0]);
            $title = mysqli_real_escape_string($dbc,explode("~",$destination)[1]);
            $description = mysqli_real_escape_string($dbc,explode("~",$destination)[2]);
            $author = mysqli_real_escape_string($dbc,$current_user->get_email());
            $sql = "UPDATE `categories` SET `category_name` = '$title', category_description = '$description', creator_email = '$author' WHERE `category_id` = '$id'";
            mysqli_query($dbc, $sql);
            echo "Category successfully updated.";
            break;
        case 'add-location':
            //make user admin
            $name = mysqli_real_escape_string($dbc,explode("~",$destination)[0]);
            $street = mysqli_real_escape_string($dbc,explode("~",$destination)[1]);
            $city = mysqli_real_escape_string($dbc,explode("~",$destination)[2]);
            $code = mysqli_real_escape_string($dbc,explode("~",$destination)[3]);
            $province = mysqli_real_escape_string($dbc,explode("~",$destination)[4]);
            $country = mysqli_real_escape_string($dbc,explode("~",$destination)[5]);
            $image = mysqli_real_escape_string($dbc,explode("~",$destination)[6]);

            $author = mysqli_real_escape_string($dbc,$current_user->get_email());
            $sql = "INSERT INTO locations (name, street, city, postal_code, province, country, creator_email, image_url)
            VALUES ('$name', '$street', '$city', '$code', '$province', '$country', '$author', '$image')";
            mysqli_query($dbc, $sql);
            echo "Location successfully created.";
            break;
        case 'edit-location':
            //make user admin
            $id = (int)mysqli_real_escape_string($dbc,explode("~",$destination)[0]);
            $name = mysqli_real_escape_string($dbc,explode("~",$destination)[1]);
            $street = mysqli_real_escape_string($dbc,explode("~",$destination)[2]);
            $city = mysqli_real_escape_string($dbc,explode("~",$destination)[3]);
            $code = mysqli_real_escape_string($dbc,explode("~",$destination)[4]);
            $province = mysqli_real_escape_string($dbc,explode("~",$destination)[5]);
            $country = mysqli_real_escape_string($dbc,explode("~",$destination)[6]);
            $image = mysqli_real_escape_string($dbc,explode("~",$destination)[7]);
            

            echo $destination;

            $author = mysqli_real_escape_string($dbc,$current_user->get_email());
            $sql = "UPDATE locations SET 
                        `name` = '$name',
                        `street` = '$street',
                        `city` = '$city',
                        `postal_code` = '$code',
                        province = '$province',
                        country = '$country',
                        creator_email = '$author',
                        image_url = '$image'
                    WHERE location_id = $id";
            mysqli_query($dbc, $sql);
            echo "Location successfully updated.";
            break;
        case 'add-course':
            //make user admin
            $short = mysqli_real_escape_string($dbc,explode("~",$destination)[0]);
            $long = mysqli_real_escape_string($dbc,explode("~",$destination)[1]);
            $title = mysqli_real_escape_string($dbc,explode("~",$destination)[2]);
            $age = mysqli_real_escape_string($dbc,explode("~",$destination)[3]);
            $price = mysqli_real_escape_string($dbc,explode("~",$destination)[4]);
            $time = mysqli_real_escape_string($dbc,explode("~",$destination)[5]);
            $package = mysqli_real_escape_string($dbc,explode("~",$destination)[6]);
            $objective = mysqli_real_escape_string($dbc,explode("~",$destination)[7]);
            $target = mysqli_real_escape_string($dbc,explode("~",$destination)[8]);
            $image = mysqli_real_escape_string($dbc,explode("~",$destination)[9]);
            $location = mysqli_real_escape_string($dbc,explode("~",$destination)[11]);
            

            // UPLOAD IMAGE


            //END UPLOAD IMAGE
            $id = mysqli_real_escape_string($dbc,explode("~",$destination)[10]);

            $author = mysqli_real_escape_string($dbc,$current_user->get_email());

            $sql = "INSERT INTO courses (course_locations,creator_email, category_id, short_description, long_description, course_title, course_age, course_price, course_time, course_package, course_objective, course_target, image_url)
                                    VALUES ('$location','$author', '$id', '$short', '$long', '$title', '$age', '$price', '$time', '$package', '$objective', '$target', '$image')";
            mysqli_query($dbc, $sql);
            echo "Course successfully created.";
            break;
        case 'edit-course':
            //make user admin
            $id = (int)mysqli_real_escape_string($dbc,explode("~",$destination)[0]);
            $short = mysqli_real_escape_string($dbc,explode("~",$destination)[1]);
            $long = mysqli_real_escape_string($dbc,explode("~",$destination)[2]);
            $title = mysqli_real_escape_string($dbc,explode("~",$destination)[3]);
            $age = mysqli_real_escape_string($dbc,explode("~",$destination)[4]);
            $price = mysqli_real_escape_string($dbc,explode("~",$destination)[5]);
            $time = mysqli_real_escape_string($dbc,explode("~",$destination)[6]);
            $package = mysqli_real_escape_string($dbc,explode("~",$destination)[7]);
            $objective = mysqli_real_escape_string($dbc,explode("~",$destination)[8]);
            $target = mysqli_real_escape_string($dbc,explode("~",$destination)[9]);
            $image = mysqli_real_escape_string($dbc,explode("~",$destination)[10]);
            $location = mysqli_real_escape_string($dbc,explode("~",$destination)[12]);
            

            // UPLOAD IMAGE


            //END UPLOAD IMAGE
            $cat_id = (int)mysqli_real_escape_string($dbc,explode("~",$destination)[11]);

            $author = mysqli_real_escape_string($dbc,$current_user->get_email());
            
            $sql = "UPDATE `courses` SET 
                        `creator_email` = '$author',
                        `short_description` = '$short',
                        `long_description` = '$long',
                        `category_id` = $cat_id,
                        `course_title` = '$title',
                        `course_age` = '$age',
                        `course_price` = '$price',
                        `course_time` = '$time',
                        `course_package` = '$package',
                        `course_objective` = '$objective',
                        `course_target` = '$target',
                        `image_url` = '$image'
                    WHERE `course_id` = $id";
            mysqli_query($dbc, $sql);
            echo "Course successfully updated.";
            break;
        case 'delete-course':
            //make user admin
            $id = $destination;
            $sql = "DELETE FROM courses
            WHERE course_id = $id";
            mysqli_query($dbc, $sql);
            echo "Course successfully deleted.";
            break;
        case 'delete-image':
            //make user admin
            $id = mysqli_real_escape_string($dbc,$destination);
            $sql = "DELETE FROM images
            WHERE image_url = '$id'";
            mysqli_query($dbc, $sql);
            echo "Image successfully deleted.";
            break;
        case 'delete-category':
            //make user admin
            $id = $destination;
            $sql = "DELETE FROM categories
            WHERE category_id = $id";
            mysqli_query($dbc, $sql);
            echo "Category successfully deleted.";
            break;
        case 'delete-location':
            //make user admin
            $id = $destination;
            $sql = "DELETE FROM locations
            WHERE location_id = $id";
            mysqli_query($dbc, $sql);
            echo "Location successfully deleted.";
            break;
        case 'save-course-locations':
            //make user admin
            $array = explode(',',$destination);
            $id = $array[0];
            unset($array[0]);
            $locations = implode(',',$array);

            $sql = "UPDATE `courses` SET `course_locations` = '$locations' WHERE `course_id` = '$id'";
            mysqli_query($dbc, $sql);
            echo "Course location(s) successfully saved.";
            break;
        case 'change-course-feature':
            //make user admin
            $array = explode(',',$destination);
            $id = $array[0];
            $val = $array[1];

            $sql = "UPDATE `courses` SET `featured` = '$val' WHERE `course_id` = '$id'";
            mysqli_query($dbc, $sql);
            break;
        case 'change-course-locations':
            //make user admin
            $id = $destination;
            $sql = "SELECT * FROM locations";
            $location_results = mysqli_query($dbc, $sql);
            $sql = "SELECT * FROM courses WHERE course_id = $destination";
            $course_results = mysqli_query($dbc, $sql);
            $cArray = mysqli_fetch_array($course_results, MYSQLI_ASSOC);
            $course_locations = $cArray['course_locations'];
            $course_name = $cArray['course_title'];
            
            $string = "<input type='hidden' value='$id' id='course_id'/>
            <div class='heading-3 primary-txt vertical-margin-10'>$course_name</div>";
            if($course_locations == "In-person" || strpos($course_locations, "I") !==false){
            $string .= "<div><input type='checkbox' value='In-person' name='course-locations' checked> In-person</div>";}
            else{
                $string .= "<div><input type='checkbox' value='In-person' name='course-locations'> In-person</div>";
            }if($course_locations == "Online" || strpos($course_locations, "O") !==false){
            $string .= "<div><input type='checkbox' value='Online' checked name='course-locations'> Online</div>";}
            else{
                $string .= "<div><input type='checkbox' value='Online' name='course-locations'> Online</div>";
            }
            while($row = mysqli_fetch_row($location_results)){
                $location_id = $row[0];
                $name = $row[1];

                if($course_locations == $location_id || is_numeric(strpos($course_locations, $location_id))){
                    $string .= "<div><input type='checkbox' value='$location_id' name='course-locations' checked> $name</div>";
                }else{
                    $string .= "<div><input type='checkbox' value='$location_id' name='course-locations'> $name</div>";
                }
            }
            echo $string;
            break;
        }
    }
    if($current_user->get_type() == "admin" || $current_user->get_type() == "mod" || $current_user->get_type() == "teacher" || $current_user->get_type() == "parent" || $current_user->get_type() == "student"){
        if($q=='bookings'){
        
            $sql = "SELECT * FROM bookings";
            $result = mysqli_query($dbc, $sql);
            //need name surname email and type
            $string ="";
            $cancelled ="<details class='input-1 vertical-margin-5 footer-heading line-height-25 gray-2 padding-10 rounded-10'><summary class='heading-3 primary-txt'>Cancelled</summary>";
            $paid ="<details class='input-1 vertical-margin-5 footer-heading line-height-25 gray-2 padding-10 rounded-10'><summary class='heading-3 primary-txt'>Paid</summary>";
            $reserved ="<details class='input-1 vertical-margin-5 footer-heading line-height-25 gray-2 padding-10 rounded-10'><summary class='heading-3 primary-txt'>Reserved</summary>";
            $completed ="<details class='input-1 vertical-margin-5 footer-heading line-height-25 gray-2 padding-10 rounded-10'><summary class='heading-3 primary-txt'>Completed</summary>";
            $tmp ="";
            while($row = mysqli_fetch_row($result)){
                $array = $row;

                $id = $array[0];
                $course = $array[1];
                $location = $array[2];
                $email = $array[3];
                $date = $array[4];
                $status = $array[5];

                //get course name & image
                        
                $sql = "SELECT * FROM courses WHERE course_id=$course";
                $course_result = mysqli_query($dbc, $sql);
                //need name surname email and type
                
                $array = mysqli_fetch_array($course_result, MYSQLI_ASSOC);
                    
                $course = $array['course_title'];
                $course_image = $array['image_url'];
                        
                $sql = "SELECT * FROM locations WHERE location_id=$location";
                $course_result = mysqli_query($dbc, $sql);
                //need name surname email and type
                
                $array = mysqli_fetch_array($course_result, MYSQLI_ASSOC);
                $location = $array['name'];
                $location_image = $array['image_url'];

                //get location name & image
                if($current_user->get_type()== "mod" || $current_user->get_type()== "admin" || $current_user->get_email() == $email )
                $tmp .= "<details class='input-1 vertical-margin-5 footer-heading line-height-25 gray-1 padding-10 rounded-10'> <summary><span class='heading-3'>$course</span> booked by $email<div class='input-1 primary-txt float-right'>$status</div></summary>
                <div></div>
                <div>Location: $location</div>
                <div>Booked on: $date</div>
                <div class='max-width-0 height-30'>";
                if($current_user->get_email() == $email && ($status == "reserved" || $status=="cancelled")){
                    $tmp .= "<span class='float-right input-2 margin-left-10 bold padding-5 height-15 line-height-15 rounded-5 white-txt pointer center-txt shadow primary-bg' onclick='confirmationRequest(\"delete-booking\",\"$id\")'>DELETE</span>";
                }else if(($current_user->get_type()== "mod" || $current_user->get_type()== "admin") && ($status=="cancelled")){
                    $tmp .= "<span class='float-right input-2 margin-left-10 bold padding-5 height-15 line-height-15 rounded-5 white-txt pointer center-txt shadow primary-bg' onclick='confirmationRequest(\"delete-booking\",\"$id\")'>DELETE</span>";
                }

                if($current_user->get_type() == "admin" || $current_user->get_type() == "mod"){

                    $tmp .="<select class='change-booking-status float-right' onchange='request(this.value, \"$id\")'><option value='' selected disabled hidden>-- change booking status --</option>";

                    if($status!="reserved"){
                    $tmp .="<option value='booking-reserved'>Reserve Booking</option>";}
                    if($status!="paid"){
                    $tmp .="<option value='booking-paid'>Booking paid</option>";}
                    if($status!="cancelled"){
                    $tmp .="<option value='booking-cancelled'>Cancel Booking</option>";}
                    if($status!="completed"){
                    $tmp .="<option value='booking-completed'>Course Completed</option>";}
                    
                    $tmp.="</select></div>";
                }
                $tmp .="
                </div></details>";
                
                if($status == "reserved"){
                    $reserved .=$tmp;
                }
                else if($status == "cancelled"){
                    $cancelled .=$tmp;
                }
                else if($status == "completed"){
                    $completed .=$tmp;
                }
                else if($status == "paid"){
                    $paid .=$tmp;
                }
            }
            $string .= "$reserved</details>$paid</details>$completed</details>$cancelled</details>";
            echo $string;
        }else if($q =='delete-booking'){
            //make user admin
            $id = $destination;
            $sql = "DELETE FROM bookings
            WHERE booking_id = $id";
            mysqli_query($dbc, $sql);
        }
    }
    if($q == 'load-all-course-details-to-popup'){
        //make user admin
        $id = 1* $destination;
        $sql = "SELECT * FROM courses WHERE course_id=$id";
        $result = mysqli_query($dbc, $sql);
        //need name surname email and type
        
        $array = mysqli_fetch_array($result, MYSQLI_ASSOC);
            
            $location = $array['course_locations'];
            if(count(explode(',',$location))>1){
                $location = "Multiple locations";
            }else if(is_numeric($location)){
                
                $sql = "SELECT * FROM locations WHERE location_id=$location";
                $result = mysqli_query($dbc, $sql);
                //need name surname email and type
                
                $location = mysqli_fetch_array($result, MYSQLI_ASSOC)['name'];
            }
            $description = $array['long_description'];
            $title = $array['course_title'];
            $age = $array['course_age'];
            $price = $array['course_price'];
            $time = $array['course_time'];
            $package = $array['course_package'];
            $objective = $array['course_objective'];
            $target = $array['course_target'];
            $image = $array['image_url'];
            
            echo "$title~$description~$age~$price~$time~$package~$objective~$target~$location~$image";
    }
    else if($q == 'book-course'){
        //make user admin
        if(isset($_SESSION['digi_auth']) && $_SESSION['digi_auth']==true){
                header('Content-Type: text/html; charset=utf-8');
            $id = explode('~',$destination);
            @$location = $id[1];
            $id = $id[0];
            $email = $current_user->get_email();
            
            $sql = "INSERT INTO bookings (course_id, location_id, user_email, status) VALUES ('$id','$location','$email','reserved') ";
            $result = mysqli_query($dbc, $sql);
            //need name surname email and type
            echo "Course successfully booked!";
            
            $to = "<$email>";
            $subject_text = "digitank. | Booking Successful";
            $subject = '=?UTF-8?B?' . base64_encode($subject_text) . '?=';
            $name = $current_user->get_name();
            
            $txt = base64_encode("Hi $name,\r\n\r\nYour booking has successfully been received.\r\n\r\nA member of our team will get in touch with you for further details.\r\n\r\nRegards\r\nDigitank Team");
            
            
            $headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n";
            $headers .= 'Content-Transfer-Encoding: base64' . "\r\n";
            $headers .= " digitank. <From: no-reply@digitank.co.za>" . "\r\n" .
            "CC: <info@nonartyart.co.za>";
            // Send Confirmation to user
            
            mail($to,$subject,$txt,$headers);
            $name = $current_user->get_full_name();
            $to = "<learn@digitank.co.za>";
            
            $subject_text = "digitank. | New Booking";
            $subject = '=?UTF-8?B?' . base64_encode($subject_text) . '?=';
            
            $txt = base64_encode("[SYSTEM]\r\n\r\nA new booking has been place by user ($name) with email $email");
            
            
            // Send confirmation to digitank.
            mail($to,$subject,$txt,$headers);
            }
            else{
                echo "[login],$id~$location";
            }
    }
    else if($q == 'submit-know-more-form'){
        
            $data = explode('$',$destination);
            $name = $data[0];
            $email = $data[1];
            $type = $data[2];

            if(count($data)>0){
                header('Content-Type: text/html; charset=utf-8');
                $to = "<$email>";
                $subject_text = "digitank. | Request Received";
                $subject = '=?UTF-8?B?' . base64_encode($subject_text) . '?=';
                $name = $current_user->get_name();
                
                $txt = base64_encode("Hi $name,\r\n\r\nWe've received your request to know more about our courses.\r\n\r\nA member of our team will get in touch with you for further details.\r\n\r\nRegards\r\nDigitank Team");
                
                $headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n";
                $headers .= 'Content-Transfer-Encoding: base64' . "\r\n";
                $headers .= "From: digitank.<no-reply@digitank.co.za>" . "\r\n" .
                "CC: <info@nonartyart.co.za>";
                
                // Send confirmation to user 
                mail($to,$subject,$txt,$headers);
                
                $headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n";
                $headers .= 'Content-Transfer-Encoding: base64' . "\r\n";
                $headers .= "From: digitank. <no-reply@digitank.co.za>" . "\r\n" .
                "CC: <info@nonartyart.co.za>" . "\r\n" .
                "Reply-To: <$email>";
                
                $to = "<learn@digitank.co.za>";
                $subject_text = "digitank. | New Request";
                $subject = '=?UTF-8?B?' . base64_encode($subject_text) . '?=';
                $txt = base64_encode("[SYSTEM]\r\n\r\nA new request has been sent by a user to know more about digitank. courses. \r\n\r\nUser Details:\r\nName: $name\r\nEmail: $email\r\nUser type: $type");
                
                // Send notification to digitank
                mail($to,$subject,$txt,$headers);
                
                echo "Request sent! Please check<br>your email for a confirmation.";
            }
    }


    
?>