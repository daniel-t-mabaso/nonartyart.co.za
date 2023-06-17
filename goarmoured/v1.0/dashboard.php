<?php
    include 'assets/php/session.php';
if (isset($_SESSION['user_type']) && ($_SESSION['user_type']==='regular' || $_SESSION['user_type']==='unauthorised')){
    header("Location:index.php"); /* Redirect browser */
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <?php
        include 'assets/php/dependencies.php';
    ?>
</head>
<body>
    <?php
        include 'assets/php/header.php'
    ?>
    <div id="content-container" class="alternative-bg">
        <div id="placeholder" class="secondary-txt">
            <h1 class="tertiary-txt">Website development Template</h1>
            <h3>Dashboard</h3>
            <i>For use by Non-Artistic Art Developers</i>
        </div>
    </div>
    
    <?php
        include 'assets/php/footer.php'
    ?>
</body>
</html>