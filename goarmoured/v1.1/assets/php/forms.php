<?php
// handle forms here
    include 'connection.php';
    @include 'session.php';
   // echo "Initialized<br>";
   if(isset($_POST['home-page-content-form'])){
    //echo "form filled<br>";
    
    $catch_phrase = mysqli_real_escape_string($dbc,htmlentities($_POST['catch-phrase']));
    $overview_heading = mysqli_real_escape_string($dbc,htmlentities($_POST['overview-heading']));
    $service_1_subheading = mysqli_real_escape_string($dbc,htmlentities($_POST['service-1-subheading']));
    $service_1_summary = mysqli_real_escape_string($dbc,htmlentities($_POST['service-1-summary']));
    $service_2_subheading = mysqli_real_escape_string($dbc,htmlentities($_POST['service-2-subheading']));
    $service_2_summary = mysqli_real_escape_string($dbc,htmlentities($_POST['service-2-summary']));
    $list_heading = mysqli_real_escape_string($dbc,htmlentities($_POST['List-1-heading']));
    $list_item_1 = mysqli_real_escape_string($dbc,htmlentities($_POST['List-item-1']));
    $list_item_2 = mysqli_real_escape_string($dbc,htmlentities($_POST['List-item-2']));
    $list_item_3 = mysqli_real_escape_string($dbc,htmlentities($_POST['List-item-3']));
    $list_item_4 = mysqli_real_escape_string($dbc,htmlentities($_POST['List-item-4']));
    $list_item_5 = mysqli_real_escape_string($dbc,htmlentities($_POST['List-item-5']));
    
    //echo "<br><br>The following data was found on the form:<br><br>home<br>$catch_phrase<br>$overview_heading<br>$service_1_subheading<br>$service_1_summary<br>$service_2_subheading<br>$service_2_summary<br>$list_heading<br>$list_item_1<br>$list_item_2<br>$list_item_3<br>$list_item_4<br>$list_item_5<br><br>Now storing the data...<br><br>";
    $sql = "UPDATE `content` SET `content_description` = '$catch_phrase' WHERE `content`.`content_id` = 1";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'heading', `content_page` = 'home', `content_description` = '$overview_heading', `content_type` = 'heading' WHERE `content`.`content_id` = 2";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'Service 1 subheading', `content_page` = 'home', `content_description` = '$service_1_subheading', `content_type` = 'subheading' WHERE `content`.`content_id` = 3";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'Service 1 summary', `content_page` = 'home', `content_description` = '$service_1_summary', `content_type` = 'paragraph' WHERE `content`.`content_id` = 4";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'Service 2 subheading', `content_page` = 'home', `content_description` = '$service_2_subheading', `content_type` = 'subheading' WHERE `content`.`content_id` = 5";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'Service 2 summary', `content_page` = 'home', `content_description` = '$service_2_summary', `content_type` = 'paragraph' WHERE `content`.`content_id` = 6";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'List heading', `content_page` = 'home', `content_description` = '$list_heading', `content_type` = 'heading' WHERE `content`.`content_id` = 7";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'List items', `content_page` = 'home', `content_description` = '$list_item_1,$list_item_2,$list_item_3,$list_item_4,$list_item_5', `content_type` = 'list' WHERE `content`.`content_id` = 8";
    mysqli_query($dbc, $sql);
    echo '<script>
    window.location = "../../";
    </script>';
}
else if(isset($_POST['services-page-content-form'])){
    //echo "form filled<br>";
    
    $services_page_heading = mysqli_real_escape_string($dbc,htmlentities($_POST['service-page-heading']));
    $services_description = mysqli_real_escape_string($dbc,htmlentities($_POST['services-description']));
    $services_list_heading = mysqli_real_escape_string($dbc,htmlentities($_POST['services-list-heading']));
    $list_item_1 = mysqli_real_escape_string($dbc,htmlentities($_POST['List-item-1']));
    $list_item_2 = mysqli_real_escape_string($dbc,htmlentities($_POST['List-item-2']));
    $list_item_3 = mysqli_real_escape_string($dbc,htmlentities($_POST['List-item-3']));
    $list_item_4 = mysqli_real_escape_string($dbc,htmlentities($_POST['List-item-4']));
    $list_item_5 = mysqli_real_escape_string($dbc,htmlentities($_POST['List-item-5']));
    $service_target_heading = mysqli_real_escape_string($dbc,htmlentities($_POST['service-target-heading']));
    $service_target_description = mysqli_real_escape_string($dbc,htmlentities($_POST['service-target-description']));
    $process_heading = mysqli_real_escape_string($dbc,htmlentities($_POST['process-heading']));
    $process_description = mysqli_real_escape_string($dbc,htmlentities($_POST['process-description']));
    $c2a_heading = mysqli_real_escape_string($dbc,htmlentities($_POST['c2a-heading']));
    $c2a_description = mysqli_real_escape_string($dbc,htmlentities($_POST['c2a-description']));
   
    //echo "<br><br>The following data was found on the form:<br><br>home<br>$catch_phrase<br>$overview_heading<br>$service_1_subheading<br>$service_1_summary<br>$service_2_subheading<br>$service_2_summary<br>$list_heading<br>$list_item_1<br>$list_item_2<br>$list_item_3<br>$list_item_4<br>$list_item_5<br><br>Now storing the data...<br><br>";
    $sql = "UPDATE `content` SET  `content_title` = 'services page heading', `content_page` = 'services', `content_description` = '$services_page_heading', `content_type` = 'heading' WHERE `content`.`content_id` = 9";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'services overview', `content_page` = 'services', `content_description` = '$services_description', `content_type` = 'paragraph' WHERE `content`.`content_id` = 10";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'services list heading', `content_page` = 'services', `content_description` = '$services_list_heading', `content_type` = 'heading' WHERE `content`.`content_id` = 11";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'services list items', `content_page` = 'services', `content_description` = '$list_item_1,$list_item_2,$list_item_3,$list_item_4,$list_item_5', `content_type` = 'list' WHERE `content`.`content_id` = 12";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'service target heading', `content_page` = 'services', `content_description` = '$service_target_heading', `content_type` = 'heading' WHERE `content`.`content_id` = 13";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'service target descrition', `content_page` = 'services', `content_description` = '$service_target_description', `content_type` = 'paragraph' WHERE `content`.`content_id` = 14";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'process heading', `content_page` = 'services', `content_description` = '$process_heading', `content_type` = 'heading' WHERE `content`.`content_id` = 15";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'process description', `content_page` = 'services', `content_description` = '$process_description', `content_type` = 'paragraph' WHERE `content`.`content_id` = 16";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'call to action heading', `content_page` = 'services', `content_description` = '$c2a_heading', `content_type` = 'heading' WHERE `content`.`content_id` = 17";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'call to action description', `content_page` = 'services', `content_description` = '$c2a_description', `content_type` = 'paragraph' WHERE `content`.`content_id` = 18";
    mysqli_query($dbc, $sql);
    echo '<script>
    window.location = "../../services.php";
    </script>';
}
else if(isset($_POST['about-page-content-form'])){
    //echo "form filled<br>";
    
    $about_page_heading = mysqli_real_escape_string($dbc,htmlentities($_POST['about-page-heading']));
    $about_description = mysqli_real_escape_string($dbc,htmlentities($_POST['about-description']));
    $about_list_heading = mysqli_real_escape_string($dbc,htmlentities($_POST['list-heading']));
    $list_item_1 = mysqli_real_escape_string($dbc,htmlentities($_POST['List-item-1']));
    $list_item_2 = mysqli_real_escape_string($dbc,htmlentities($_POST['List-item-2']));
    $list_item_3 = mysqli_real_escape_string($dbc,htmlentities($_POST['List-item-3']));
    $list_item_4 = mysqli_real_escape_string($dbc,htmlentities($_POST['List-item-4']));
    $list_item_5 = mysqli_real_escape_string($dbc,htmlentities($_POST['List-item-5']));
    $team_heading = mysqli_real_escape_string($dbc,htmlentities($_POST['team-heading']));
    $p_1_name = mysqli_real_escape_string($dbc,htmlentities($_POST['member-1-name']));
    $p_1_position = mysqli_real_escape_string($dbc,htmlentities($_POST['member-1-position']));
    $p_1_bio = mysqli_real_escape_string($dbc,htmlentities($_POST['member-1-bio']));
    $p_2_name = mysqli_real_escape_string($dbc,htmlentities($_POST['member-2-name']));
    $p_2_position = mysqli_real_escape_string($dbc,htmlentities($_POST['member-2-position']));
    $p_2_bio = mysqli_real_escape_string($dbc,htmlentities($_POST['member-2-bio']));
   
    //echo "<br><br>The following data was found on the form:<br><br>home<br>$catch_phrase<br>$overview_heading<br>$service_1_subheading<br>$service_1_summary<br>$service_2_subheading<br>$service_2_summary<br>$list_heading<br>$list_item_1<br>$list_item_2<br>$list_item_3<br>$list_item_4<br>$list_item_5<br><br>Now storing the data...<br><br>";
    $sql = "UPDATE `content` SET  `content_title` = 'about page heading', `content_page` = 'about', `content_description` = '$about_page_heading', `content_type` = 'heading' WHERE `content`.`content_id` = 19";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'about overview', `content_page` = 'about', `content_description` = '$about_description', `content_type` = 'paragraph' WHERE `content`.`content_id` = 20";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'about list heading', `content_page` = 'about', `content_description` = '$about_list_heading', `content_type` = 'heading' WHERE `content`.`content_id` = 21";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'about list items', `content_page` = 'about', `content_description` = '$list_item_1,$list_item_2,$list_item_3,$list_item_4,$list_item_5', `content_type` = 'list' WHERE `content`.`content_id` = 22";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'team heading', `content_page` = 'about', `content_description` = '$team_heading', `content_type` = 'heading' WHERE `content`.`content_id` = 23";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'member 1 name', `content_page` = 'about', `content_description` = '$p_1_name', `content_type` = 'paragraph' WHERE `content`.`content_id` = 24";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'member 1 position', `content_page` = 'about', `content_description` = '$p_1_position', `content_type` = 'paragraph' WHERE `content`.`content_id` =25";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'member 1 bio', `content_page` = 'about', `content_description` = '$p_1_bio', `content_type` = 'paragraph' WHERE `content`.`content_id` = 26";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'member 2 name', `content_page` = 'about', `content_description` = '$p_2_name', `content_type` = 'paragraph' WHERE `content`.`content_id` = 27";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'member 2 position', `content_page` = 'about', `content_description` = '$p_2_position', `content_type` = 'paragraph' WHERE `content`.`content_id` = 28";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'member 2 bio', `content_page` = 'about', `content_description` = '$p_2_bio', `content_type` = 'paragraph' WHERE `content`.`content_id` = 29";
    mysqli_query($dbc, $sql);
    echo '<script>
    window.location = "../../about.php";
    </script>';
}
else if(isset($_POST['contact-page-content-form'])){
    //echo "form filled<br>";
    
    $contact_heading = mysqli_real_escape_string($dbc,htmlentities($_POST['contact-heading']));
    $contact_1_subheading = mysqli_real_escape_string($dbc,htmlentities($_POST['contact-1-subheading']));
    $contact_1_details = mysqli_real_escape_string($dbc,htmlentities($_POST['contact-1-details']));
    $contact_2_subheading = mysqli_real_escape_string($dbc,htmlentities($_POST['contact-2-subheading']));
    $contact_2_details = mysqli_real_escape_string($dbc,htmlentities($_POST['contact-2-details']));
    $address_heading = mysqli_real_escape_string($dbc,htmlentities($_POST['address-heading']));
    $address_1_subheading = mysqli_real_escape_string($dbc,htmlentities($_POST['address-1-subheading']));
    $address_1_details = mysqli_real_escape_string($dbc,htmlentities($_POST['address-1-details']));
    $address_2_subheading = mysqli_real_escape_string($dbc,htmlentities($_POST['address-2-subheading']));
    $address_2_details = mysqli_real_escape_string($dbc,htmlentities($_POST['address-2-details']));
   
    //echo "<br><br>The following data was found on the form:<br><br>home<br>$catch_phrase<br>$overview_heading<br>$service_1_subheading<br>$service_1_summary<br>$service_2_subheading<br>$service_2_summary<br>$list_heading<br>$list_item_1<br>$list_item_2<br>$list_item_3<br>$list_item_4<br>$list_item_5<br><br>Now storing the data...<br><br>";
    $sql = "UPDATE `content` SET  `content_title` = 'contact heading', `content_page` = 'contact', `content_description` = '$contact_heading', `content_type` = 'heading' WHERE `content`.`content_id` = 30";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'contact 1 subheading', `content_page` = 'contact', `content_description` = '$contact_1_subheading', `content_type` = 'subheading' WHERE `content`.`content_id` = 31";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'contact 1 details', `content_page` = 'contact', `content_description` = '$contact_1_details', `content_type` = 'paragraph' WHERE `content`.`content_id` = 32";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'contact 2 subheading', `content_page` = 'contact', `content_description` = '$contact_2_subheading', `content_type` = 'subheading' WHERE `content`.`content_id` = 33";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'contact 2 details', `content_page` = 'contact', `content_description` = '$contact_2_details', `content_type` = 'heading' WHERE `content`.`content_id` = 34";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET  `content_title` = 'address heading', `content_page` = 'contact', `content_description` = '$address_heading', `content_type` = 'heading' WHERE `content`.`content_id` = 35";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'address 1 subheading', `content_page` = 'contact', `content_description` = '$address_1_subheading', `content_type` = 'subheading' WHERE `content`.`content_id` = 36";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'address 1 details', `content_page` = 'contact', `content_description` = '$address_1_details', `content_type` = 'paragraph' WHERE `content`.`content_id` = 37";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'address 2 subheading', `content_page` = 'contact', `content_description` = '$address_2_subheading', `content_type` = 'subheading' WHERE `content`.`content_id` = 38";
    mysqli_query($dbc, $sql);
    $sql = "UPDATE `content` SET `content_title` = 'address 2 details', `content_page` = 'contact', `content_description` = '$address_2_details', `content_type` = 'heading' WHERE `content`.`content_id` = 39";
    mysqli_query($dbc, $sql);

    echo '<script>
    window.location = "../../contact.php";
    </script>';
}

?>