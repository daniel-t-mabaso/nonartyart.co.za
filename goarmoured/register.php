<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <?php include 'assets/php/dependencies.php'?>
    <?php include 'assets/php/server.php'?>
</head>
<body class='alternative-bg'>
<?php
        include 'assets/php/header.php';
    ?>
    <div class="login-panel alternative-txt">
        <div id="title">
            Register
        </div>
        <form action="register.php" method="post" class="login-form">
            
        <?php
                include 'error.php';
             
            ?>
        <label class="form-label">Username</label><br>
        <input type="text" class="form-input" name="username" autofocus value=<?php if(isset($_POST['username'])) echo '"'.$_POST['username'].'"';?>><br>
        <label class="form-label">Email</label><br>
        <input type="email" class="form-input" name="email" value=<?php if(isset($_POST['email'])) echo '"'.$_POST['email'].'"';?>><br>
        <label class="form-label">Password</label><br>
        <input type="password" class="form-input" name="password"><br>
        <label class="form-label">Confirm Password</label><br>
        <input type="password" class="form-input" name="password_confirmation"><br>
        <input type="submit" class="btn secondary-bg alternative-txt" name = 'register' value="Register">
        </form>

        Already have an account? <a href="login.php"><u>Login</u></a>
    </div>
    <?php
        include 'assets/php/footer.php';
    ?>
</body>
</html>