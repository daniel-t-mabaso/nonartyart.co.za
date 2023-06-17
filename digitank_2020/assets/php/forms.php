<?php

$msg="";
    if(isset($_POST['img-upload'])){
        $name = $_POST['add-image-name'];
        $description = $_POST['add-image-description'];
        $type = $_POST['add-image-type'];

        echo "Got: $name<br>$description<br>$type"; 

        $target_dir = "../media/images/uploads/";
        $target_dir_direct = "assets/media/images/uploads/";
        $target_file = $target_dir . basename($_FILES["add-image"]["name"]);
        $target_file_direct = $target_dir_direct . basename($_FILES["add-image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        $check = getimagesize($_FILES["add-image"]["tmp_name"]);
        if($check) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $msg .= "File is not an image.";
            $uploadOk = 0;
        }


        if ($_FILES["add-image"]["size"] > 90000000) {
            $msg .= "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            $msg .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed. > $imageFileType";
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            //echo "File already exists.";
            $uploadOk = -1;
        }
        if ($uploadOk == 0) {
            $msg .= "<br>Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else if ($uploadOk == -1) {
            $msg .= "<br>File updated.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["add-image"]["tmp_name"], $target_file)) {
                include('connection.php');
                $url=mysqli_real_escape_string($dbc,$target_file_direct);
                $name=mysqli_real_escape_string($dbc,$name);
                $description=mysqli_real_escape_string($dbc,$description);
                $type=mysqli_real_escape_string($dbc,$type);
                    
                $sql = "INSERT INTO images (image_url, image_name, image_description, image_type)
                        VALUES ('$url','$name','$description','$type')";   
                $error =  mysqli_query($dbc, $sql);
                
                include('close_connection.php');
                
                $msg .= "<br>The file ". basename( $_FILES["add-image"]["name"]). " has been uploaded.";
                                
                echo '<script>
                window.location = "../../dashboard.php";
                </script>';
            } else {
                $msg .= "<br>Sorry, there was an error uploading your file.";
            }
    }
}
echo $msg;

?>