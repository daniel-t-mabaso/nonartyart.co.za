<?php
if($_SESSION['digi_auth'] && ($current_user->get_type()=="admin" || $current_user->get_type()=="mod")){
    echo '<a href="dashboard.php"><div class="circle';
    if(isset($_SESSION['CURRENT_PAGE']) && $_SESSION['CURRENT_PAGE'] == "digitank. | Dashboard"){echo ' orange-txt-gradient-1 white-txt';}
     echo ' pointer padding-10 fixed unselected-bg size-20 line-height-20 blur center-txt Z-100 top-25 right-50"><img src="assets/media/images/dashboard-icon-white.png" width="100%"></div></a>';
    }
?>

<div id="pageLoader"></div>
<div id="header">
    <div class="content">
        <div id="navigation-bar">
            <div id="left-navigation-panel">
            <div><a href="index.php">HOME</a></div>
            <div><a href="courses.php">COURSES</a></div>
            <div><a href="schools.php">SCHOOLS</a></div>
            </div>
            <div id="center-navigation-panel">digitank.</div>
            <div id="right-navigation-panel">
            <div><a href="contact.php">CONTACT</a></div>
                <div>
                <?php if(isset($_SESSION['digi_auth']) && $_SESSION['digi_auth']){
                                    echo "<a href='logout.php'>LOGOUT";}
                                    else{
                                        echo "<a href='login.php'>LOGIN";
                                    }?>
                </a></div>
            </div>
        </div>
    </div>
</div>