<?php
    
    //Check login
    if(!$_SESSION['digi_auth']){
        include("assets/php/connection.php");
        if(isset($_POST["login"])){
            // echo "<script>console.log('Login form submitted')</script>";
            // Instantiate error array
            $errors = array();
            // SET UP VARIABLES TO GET FROM USERS
            $email;
            $password;
            
            // GET FORM DATA
            if(isset($_POST['email']) && $_POST['email'] !=""){
                $email = strtolower(mysqli_real_escape_string($dbc, $_POST['email']));
            }else{
                array_push($errors, "Email is required");
            }
            if(isset($_POST['password']) && $_POST['password'] !=""){
                $password = mysqli_real_escape_string($dbc, $_POST['password']);
            }else{
                array_push($errors, "Password is required");
            }


            // CHECK FORM DATA VALIDITY. CHECK DB IF NO ERRORS
            if (count($errors)==0){
                // echo "<script>console.log('No errors in login form');</script>";
                // SET UP VARIABLES TO GET DATA FROM DATABASE
                $fname;
                $lname;
                $usertype;

                //connect to DB
                // CHECK FORM DATA AGAINST DB
                $query = "SELECT * FROM users WHERE user_email = '$email'";
                $result = mysqli_query($dbc, $query);
                if (isset($result)){
                    $array = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $user_hash = $array['user_password'];
                    $user_type = $array['user_type'];
                    mysqli_free_result($result);
                    //disconnect from db
                    include("assets/php/close_connection.php");
                    if (password_verify($password, $user_hash)){
                        $me = new User;
                        $me-> set_details($array['first_name'], $array['last_name'], $array['user_email'], $array['user_type'], $array['date_registered']);
                        $mes = serialize($me);
                        $_SESSION['digi_auth'] = true;
                        $_SESSION['user'] = $mes;
                        $array="";
                        
                        echo '<script>
                        window.location = "index.php";
                        </script>';
                    }
                    else{
                        $user_hash="";
                        
                        array_push($errors, "Your email or password is incorrect.");
                    }
                }
            }   
        }else if(isset($_POST["register"])){
            // echo "<script>console.log('Login form submitted')</script>";
            // Instantiate error array
            $errors = array();
            // SET UP VARIABLES TO GET FROM USERS
           $fname;   
           $lname;   
           $type;   
           $email;   
           $password1;   
           $password2;   
            // GET FORM DATA
            if(isset($_POST['first-name']) && $_POST['first-name'] !=""){
                $fname = mysqli_real_escape_string($dbc, $_POST['first-name']);
            }else{
                array_push($errors, "First name is required");
            }
            if(isset($_POST['last-name']) && $_POST['last-name'] !=""){
                $lname = mysqli_real_escape_string($dbc, $_POST['last-name']);
            }else{
                array_push($errors, "Last name is required");
            }
            if(isset($_POST['user-type']) && $_POST['user-type'] !=""){
                $type = mysqli_real_escape_string($dbc, $_POST['user-type']);
            }else{
                array_push($errors, "User type is required");
            }
            if(isset($_POST['email']) && $_POST['email'] !=""){
                $email = strtolower(mysqli_real_escape_string($dbc, $_POST['email']));
            }else{
                array_push($errors, "Email is required");
            }
            if(isset($_POST['password']) && $_POST['password'] !=""){
                $password1 = mysqli_real_escape_string($dbc, $_POST['password']);
                if (strlen($password1) <6){
                    array_push($errors, "Password must be at least 6 characters long");
                }
            }else{
                array_push($errors, "Password is required");
            }
            if(isset($_POST['confirm-password']) && $_POST['confirm-password'] !=""){
                $password2 = mysqli_real_escape_string($dbc, $_POST['confirm-password']);
                if($password1!="" && $password2!="" && $password1 != $password2){
                    array_push($errors, "Passwords do not match");
                }
            }else{
                array_push($errors, "Confirm Password is required");
            }
    
    
            // CHECK FORM DATA VALIDITY. CHECK DB IF NO ERRORS
            if (count($errors)==0){
                // echo "<script>console.log('No errors in login form');</script>";
                // SET UP VARIABLES TO GET DATA FROM DATABASE
                //connect to DB
                // CHECK FORM DATA AGAINST DB
                $query = "SELECT * FROM users WHERE user_email = '$email'";
                $result = mysqli_query($dbc, $query);
                if (isset($result) && mysqli_fetch_array($result, MYSQLI_ASSOC)['user_email']==$email){
                    array_push($errors, "Email already in use");
                }
                mysqli_free_result($result);
                if (count($errors) == 0){
                    $options = array('cost'=>11);
                    $hash = password_hash($password1, PASSWORD_BCRYPT, $options);
    
                    $sql = "INSERT INTO users (first_name, last_name, user_email, user_password, user_type)
                                VALUES ('$fname', '$lname','$email','$hash','$type')";
                    mysqli_query($dbc, $sql);
    
                    $me = new User;
                    $me-> set_details($fname, $lname, $email, $type, "JUST REGISTERED");
                    $mes = serialize($me);
                    $_SESSION['digi_auth'] = true;
                    $_SESSION['user'] = $mes;
    
                    echo '<script>
                    window.location = "index.php";
                    </script>';
                
                }
            }
    
        }
    }else{
        // already logged in
        // redirect to home
    }

?>