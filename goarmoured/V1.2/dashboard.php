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
    <link rel="stylesheet" href="./assets/css/dashboard.css">
</head>
<body onload="edit_page();">
    <?php
        include 'assets/php/header.php'
    ?>
    <div id="row-dashboard">
        <div id="dashboard-navigation" class="primary-bg alternative-txt">
            <h2 class="heading">Dashboard</h2>
            <div class="dashboard-navigation-item">Content</div>
            <div class="dashboard-navigation-item">Statistics</div>
            <div class="dashboard-navigation-item">Users</div>
            <div class="dashboard-navigation-item">Settings</div>
            <div class="dashboard-navigation-item">Logout</div>
        </div>
        <div id="dashboard-panel" class="alternative-bg">
                <label class="dashboard-label">Select page to edit</label><br>
                <select name="page-titles" onchange="edit_page();" id="select_page" class="dashboard-input">
                    <option value="home">Home</option>
                    <option value="services">Services</option>
                    <option value="about">About</option>
                    <option value="contact">Contact</option>
                </select><br>

                <!-- Home page form -->
                <form id="home-page-form" class="dashboard-form hide" action="assets/php/forms.php" method="post">

                <label class="dashboard-label">Home screen title</label><br>
                <input name="catch-phrase" class="dashboard-input" value=<?php echo '"'.htmlentities($home[0], ENT_QUOTES).'"';?> required/><br>

                <label class="dashboard-label">Overview heading</label><br>
                <input name="overview-heading" class="dashboard-input" value=<?php echo '"'.htmlentities($home[1], ENT_QUOTES).'"';?>  required/><br>

                <label class="dashboard-label">Service 1 subheading</label><br>
                <input class="dashboard-input" value=<?php echo '"'.htmlentities($home[2], ENT_QUOTES).'"';?>  name="service-1-subheading" required/><br>

                <label class="dashboard-label">Service 1 summary</label><br>
                <textarea class="dashboard-input" name="service-1-summary" rows="10" required><?php echo ''.htmlentities($home[3], ENT_QUOTES).'';?> </textarea><br>

                <label class="dashboard-label">Service 2 subheading</label><br>
                <input class="dashboard-input" value=<?php echo '"'.htmlentities($home[4], ENT_QUOTES).'"';?>  name="service-2-subheading" required/><br>

                <label class="dashboard-label">Service 2 summary</label><br>
                <textarea class="dashboard-input" name="service-2-summary" rows="10" required><?php echo ''.htmlentities($home[5], ENT_QUOTES).'';?> </textarea><br>

                <label class="dashboard-label">List heading</label><br>
                <input class="dashboard-input" value=<?php echo '"'.htmlentities($home[6], ENT_QUOTES).'"';?>  name="List-1-heading" required/><br>


                <?php $list = explode(",",$home[7]);
                    $c = 1;
                    foreach ($list as $item):
                        echo "
                        <label class='dashboard-label'>List item $c</label><br>
                        <input class='dashboard-input' value='".htmlentities($item, ENT_QUOTES)."' name='List-item-$c' required/><br>
                        ";
                        $c++;
                    endforeach;
                ?>

                <div id="dashboard-actions">
                    <div class="dashboard-action-item caution-bg">Discard</div>
                    <input type="submit" class="dashboard-action-item success-bg" name="home-page-content-form" value="Publish"/>
                </div>
                </form>


                <!-- Services page form -->
                <form id="services-page-form" class="dashboard-form hide" action="assets/php/forms.php" method="post">

                    <label class="dashboard-label">Service Page Heading</label><br>
                    <input name="service-page-heading" class="dashboard-input" value=<?php echo '"'.htmlentities($services[0], ENT_QUOTES).'"';?> required/><br>

                    <label class="dashboard-label">Services description</label><br>
                    <textarea class="dashboard-input" name="services-description" rows="10" required><?php echo ''.htmlentities($services[1], ENT_QUOTES).'';?> </textarea><br>

                    <label class="dashboard-label">Service list heading</label><br>
                    <input class="services-list-heading" value=<?php echo '"'.htmlentities($services[2], ENT_QUOTES).'"';?>  name="services-list-heading" required/><br>
                    
                    <?php $list = explode(",",$services[3]);
                        $c = 1;
                        foreach ($list as $item):
                            echo "
                            <label class='dashboard-label'>List item $c</label><br>
                            <input class='dashboard-input' value='".htmlentities($item, ENT_QUOTES)."' name='List-item-$c' required/><br>
                            ";
                            $c++;
                        endforeach;
                    ?>

                    <label class="dashboard-label">Service target heading</label><br>
                    <input class="services-target-heading" value=<?php echo '"'.htmlentities($services[4], ENT_QUOTES).'"';?>  name="service-target-heading" required/><br>

                    <label class="dashboard-label">Service target description</label><br>
                    <textarea class="dashboard-input" name="service-target-description" rows="10" required><?php echo ''.htmlentities($services[5], ENT_QUOTES).'';?> </textarea><br>

                    <label class="dashboard-label">Process heading</label><br>
                    <input class="services-target-heading" value=<?php echo '"'.htmlentities($services[6], ENT_QUOTES).'"';?> name="process-heading" required/><br>

                    <label class="dashboard-label">Process description</label><br>
                    <textarea class="dashboard-input" name="process-description" rows="10" required><?php echo ''.htmlentities($services[7], ENT_QUOTES).'';?> </textarea><br>

                    <label class="dashboard-label">Call to action heading</label><br>
                    <input class="dashboard-input" value=<?php echo '"'.htmlentities($services[8], ENT_QUOTES).'"';?>  name="c2a-heading" required/><br>

                    <label class="dashboard-label">Call to action description</label><br>
                    <textarea class="dashboard-input" name="c2a-description" rows="10" required><?php echo ''.htmlentities($services[9], ENT_QUOTES).'';?> </textarea><br>
                    
                    
                    

                    <div id="dashboard-actions">
                        <div class="dashboard-action-item caution-bg">Discard</div>
                        <input type="submit" class="dashboard-action-item success-bg" name="services-page-content-form" value="Publish"/>
                    </div>
                </form>



                <!-- About page form -->
                <form id="about-page-form" class="dashboard-form hide" action="assets/php/forms.php" method="post">

                    <label class="dashboard-label">About Page Heading</label><br>
                    <input name="about-page-heading" class="dashboard-input" value=<?php echo '"'.htmlentities($about[0], ENT_QUOTES).'"';?> required/><br>

                    <label class="dashboard-label">About description</label><br>
                    <textarea class="dashboard-input" name="about-description" rows="10" required><?php echo ''.htmlentities($about[1], ENT_QUOTES).'';?> </textarea><br>

                    <label class="dashboard-label">List heading</label><br>
                    <input class="services-list-heading" value=<?php echo '"'.htmlentities($about[2], ENT_QUOTES).'"';?>  name="list-heading" required/><br>
                    
                    <?php $list = explode(",",$about[3]);
                        $c = 1;
                        foreach ($list as $item):
                            echo "
                            <label class='dashboard-label'>List item $c</label><br>
                            <input class='dashboard-input' value='".htmlentities($item, ENT_QUOTES)."' name='List-item-$c' required/><br>
                            ";
                            $c++;
                        endforeach;
                    ?>

                    <label class="dashboard-label">Team heading</label><br>
                    <input class="services-target-heading" value=<?php echo '"'.htmlentities($about[4], ENT_QUOTES).'"';?>  name="team-heading" required/><br>

                    <label class="dashboard-label">Member 1 Name</label><br>
                    <input class="services-target-heading" value=<?php echo '"'.htmlentities($about[5], ENT_QUOTES).'"';?> name="member-1-name" required/><br>
                    
                    <label class="dashboard-label">Member 1 Position</label><br>
                    <input class="services-target-heading" value=<?php echo '"'.htmlentities($about[6], ENT_QUOTES).'"';?> name="member-1-position" required/><br>

                    <label class="dashboard-label">Member 1 Bio</label><br>
                    <textarea class="dashboard-input" name="member-1-bio" rows="10" required><?php echo ''.htmlentities($about[7], ENT_QUOTES).'';?> </textarea><br>

                    <label class="dashboard-label">Member 2 Name</label><br>
                    <input class="services-target-heading" value=<?php echo '"'.htmlentities($about[8], ENT_QUOTES).'"';?> name="member-2-name" required/><br>
                    
                    <label class="dashboard-label">Member 2 Position</label><br>
                    <input class="services-target-heading" value=<?php echo '"'.htmlentities($about[9], ENT_QUOTES).'"';?> name="member-2-position" required/><br>

                    <label class="dashboard-label">Member 2 Bio</label><br>
                    <textarea class="dashboard-input" name="member-2-bio" rows="10" required><?php echo ''.htmlentities($about[10], ENT_QUOTES).'';?> </textarea><br>
                    
                    

                    <div id="dashboard-actions">
                        <div class="dashboard-action-item caution-bg">Discard</div>
                        <input type="submit" class="dashboard-action-item success-bg" name="about-page-content-form" value="Publish"/>
                    </div>
                </form>



                <!-- Contact page form -->
                <form id="contact-page-form" class="dashboard-form hide" action="assets/php/forms.php" method="post">

                    <label class="dashboard-label">Contact Heading</label><br>
                    <input name="contact-heading" class="dashboard-input" value=<?php echo '"'.htmlentities($contact[0], ENT_QUOTES).'"';?> required/><br>

                    <label class="dashboard-label">Contact 1 Subheading</label><br>
                    <input name="contact-1-subheading" class="dashboard-input" value=<?php echo '"'.htmlentities($contact[1], ENT_QUOTES).'"';?> required/><br>

                    <label class="dashboard-label">Contact 1 Details</label><br>
                    <textarea class="dashboard-input" name="contact-1-details" rows="10" required><?php echo ''.htmlentities($contact[2], ENT_QUOTES).'';?> </textarea><br>

                    <label class="dashboard-label">Contact 2 Subheading</label><br>
                    <input name="contact-2-subheading" class="dashboard-input" value=<?php echo '"'.htmlentities($contact[3], ENT_QUOTES).'"';?> required/><br>

                    <label class="dashboard-label">Contact 2 Details</label><br>
                    <textarea class="dashboard-input" name="contact-2-details" rows="10" required><?php echo ''.htmlentities($contact[4], ENT_QUOTES).'';?> </textarea><br>

                    <label class="dashboard-label">Address Heading</label><br>
                    <input name="address-heading" class="dashboard-input" value=<?php echo '"'.htmlentities($contact[5], ENT_QUOTES).'"';?> required/><br>

                    <label class="dashboard-label">Address 1 Subheading</label><br>
                    <input name="address-1-subheading" class="dashboard-input" value=<?php echo '"'.htmlentities($contact[6], ENT_QUOTES).'"';?> required/><br>

                    <label class="dashboard-label">Address 1 Details</label><br>
                    <textarea class="dashboard-input" name="address-1-details" rows="10" required><?php echo ''.htmlentities($contact[7], ENT_QUOTES).'';?> </textarea><br>

                    <label class="dashboard-label">Address 2 Subheading</label><br>
                    <input name="address-2-subheading" class="dashboard-input" value=<?php echo '"'.htmlentities($contact[8], ENT_QUOTES).'"';?> required/><br>

                    <label class="dashboard-label">Address 2 Details</label><br>
                    <textarea class="dashboard-input" name="address-2-details" rows="10" required><?php echo ''.htmlentities($contact[9], ENT_QUOTES).'';?> </textarea><br>

                    

                    <div id="dashboard-actions">
                        <div class="dashboard-action-item caution-bg">Discard</div>
                        <input type="submit" class="dashboard-action-item success-bg" name="contact-page-content-form" value="Publish"/>
                    </div>
                </form>
        
        </div>
    </div>
</body>
</html>