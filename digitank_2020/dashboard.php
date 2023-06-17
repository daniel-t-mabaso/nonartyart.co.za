<?php
    include("./assets/php/session.php");
    $_SESSION['CURRENT_PAGE'] = 'digitank. | Dashboard';
    if(!$_SESSION['digi_auth']){
        
        echo '<script>
        window.location = "index.php";
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
<body class='white-txt'>
    <div id="responsive" class="fixed max-width-0 max-height-0 z-100 dark-2">
        <div class="title content horizontal-padding-30 padding-top-150">Not Responsive yet. Please view on Desktop</div>
    </div>
    <!-- Header -->
    <?php include("./assets/php/header.php");
    ?>
    <!-- Row 1 -->
    <div id="dashboard-row-1" class="vertical-padding-80">
        <div class="content max-height-0">
            
        <div id="dashboard-navigation-panel">
            <div class="dashboard-nav-item rounded-30 shadow gray-1 input-1" onclick="changeDashboard(this);">Bookings</div>
            <?php
                if($current_user->get_type()=="admin" || $current_user->get_type()=="mod"){
                    echo '
                    <div class="dashboard-nav-item rounded-30 shadow gray-1 input-1" onclick="changeDashboard(this);">Courses</div>
                    <div class="dashboard-nav-item rounded-30 shadow gray-1 input-1" onclick="changeDashboard(this);">Categories</div>
                    <div class="dashboard-nav-item rounded-30 shadow gray-1 input-1" onclick="changeDashboard(this);">Locations</div>
                    <div class="dashboard-nav-item rounded-30 shadow gray-1 input-1" onclick="changeDashboard(this);">Images</div>
                    ';
                }
                if($current_user->get_type()=="admin"){
                    echo '<div class="dashboard-nav-item rounded-30 shadow gray-1 input-1" onclick="changeDashboard(this);">Users</div>';
                }?>
            
        </div>
        <div id="dashboard-content-panel" class="dark-3 rounded-10 hide-overflow">
            <div id="dashboard-content-title" class="heading-2 margin-bottom-20 height-35 line-height-35 padding-top-30 horizontal-padding-30 max-width-30">Hi, <?php $name =  $current_user->get_name(); echo $name;?>!</div>
            <div id="dashboard-content" class="max-width-30 body-3 padding-20 horizontal-padding-30 dark-1 max-height-65 scroll-y">
                
            </div>
        </div>

    </div>

    </div>

    <!-- Footer -->
    <?php
        if($current_user->get_type()=="admin" || $current_user->get_type()=="mod"){
            dashboardPopUp();
        }
    ?>
</body>
</html>