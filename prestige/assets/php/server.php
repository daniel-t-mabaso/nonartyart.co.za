<?php
    include 'connection.php';
    @include 'session.php';

    if($_SESSION['logged_in']==='false'){

        $errors = array();


        if(isset($_POST['login'])){

            $email = strtolower(mysqli_real_escape_string($dbc, $_POST['email']));
            $password = mysqli_real_escape_string($dbc, $_POST['password']);

            if (empty($email)){
                array_push($errors, "Email is required");
            }

            if (empty($password)){
                array_push($errors, "Password is required");
            }
            //continue to login
            if (count($errors)==0){
                //fetch data
                $query = "SELECT * FROM users WHERE user_email = '$email'";
                $result = mysqli_query($dbc, $query);
                if (isset($result)){
                    $array = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $user_hash = $array['user_password'];
                    $user_type = $array['user_type'];
                    $fullname = $array['first_name'];
                    mysqli_free_result($result);
                    if (password_verify($password, $user_hash)){
                        
                        $_SESSION['logged_in'] = 'true';
                        $_SESSION['username'] = $fullname;
                        $_SESSION['user_type'] = $user_type;
                        $user_hash="";
                        $array="";
                        
                        echo '<script>
                        window.location = "index.php";
                        </script>';
                    }
                    else{
                        $user_hash="";
                        array_push($errors, "Your email/password is incorrect");
                    }

                }   
            } 
        }

        if (isset($_POST['register'])){
            $username = strtolower(mysqli_real_escape_string($dbc, $_POST['username']));
            $email = mysqli_real_escape_string($dbc, $_POST['email']);   
            $password1 = mysqli_real_escape_string($dbc, $_POST['password']);   
            $password2 = mysqli_real_escape_string($dbc, $_POST['password_confirmation']);   
            
            if (empty($username)){
                array_push($errors, "Username is required");
            }
            if (empty($email)){
                array_push($errors, "Email is required");
            }
            if (empty($password1)){
                array_push($errors, "Password is required");
            }
            if (strlen($password1) <6){
                array_push($errors, "Password must be at least 6 characters long");
            }
            if ($password1 != $password2){
                array_push($errors, "The two passwords do not match ");
            }

            $query = "SELECT * FROM users WHERE user_name = '$username'";
            $result = mysqli_query($dbc, $query);
            if (isset($result) && mysqli_fetch_array($result, MYSQLI_ASSOC)['user_name']==$username){
                array_push($errors, "Username already in use");
            }
            mysqli_free_result($result);
            $query = "SELECT * FROM users WHERE user_email = '$email'";
            $result = mysqli_query($dbc, $query);
            if (isset($result) && mysqli_fetch_array($result, MYSQLI_ASSOC)['user_email']==$email){
                array_push($errors, "Email already registered");
            }
            mysqli_free_result($result);
            if (count($errors) == 0){
                $options = array('cost'=>11);
                
                $hash = password_hash($password1, PASSWORD_BCRYPT, $options);

                $sql = "INSERT INTO users (user_name, user_email, user_password, user_type, user_status)
                            VALUES ('$username','$email','$hash','regular', 'active')";
                mysqli_query($dbc, $sql);
                
                $_SESSION['logged_in'] = 'true';
                $_SESSION['username'] = $username;
                $_SESSION['user_type'] = 'regular';

                echo '<script>
                window.location = "index.php";
                </script>';
            }
        
        }
    }
    else if($_SESSION['logged_in']==='true'){
        echo '<script>
        window.location = "index.php";
        </script>';

    }
?>