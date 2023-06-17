<?php
    //Check login
    if($_SESSION['auth']===false){
        if(isset($_POST["login"])){
            // Instantiate error array
            $errors = array();
            // SET UP VARIABLES TO GET FROM USERS
            $email;
            $password;
            // GET FORM DATA
            if(isset($_POST['email']) && $_POST['email'] !=""){
                $email = $_POST['email'];
            }else{
                array_push($errors, "* Email is required");
            }
            if(isset($_POST['password']) && $_POST['password'] !=""){
                $password = $_POST['password'];
            }else{
                array_push($errors, "* Password is required");
            }


            // CHECK FORM DATA VALIDITY. CHECK DB IF NO ERRORS
            if (count($errors)==0){
                // SET UP VARIABLES TO GET DATA FROM DATABASE
                $fname;
                $lname;
                $usertype;
                // CHECK FORM DATA AGAINST DB
                // RESPOND
            }
        }
    }else{
        echo '<script>
                window.location = "index.php";
            </script>';
    }

?>