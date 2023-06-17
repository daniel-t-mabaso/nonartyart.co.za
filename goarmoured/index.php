<!DOCTYPE html>
<html lang="en">
<head>
    <title>Go Armoured - Secure, convenient luggage wrapping</title>

    <?php include 'assets/php/dependencies.php'?>

</head>
<body class="secondary-txt">
    
    <!--Include header-->
    <?php
    include 'assets/php/header.php'?>
    
        <div id="row-1" class="div-slant-bottom alternative-txt">
                <?php 
                $_GET['src'] = "blurredvideo";
                include 'assets/php/background.php';?>
            <!-- landing cover -->
            <div class="content-wrapper">
                <div class="col-6">
                    <div class="welcome-text-panel">
                        <h2><?php echo $home[0];?></h2>
                        <a href="#overview"><div class="button div-center">Learn more</div></a>
                    </div>
                    <div class="quick-links-panel">
        
                        <a href="about.php"><div class="quick-link">About us &#9655;</div></>
                        <br>
                        <a href="contact.php"><div class="quick-link">Get in touch &#9655;</div></a>
                    </div>
                </div>
            </div>
        </div>
    <div id="row-2" class="white-bg">
        <div class="content-wrapper">
            <span id="overview"></span>
            <!-- Services overview -->
            <div class="col-3">
                <h3 class="heading"><?php echo $home[1];?></h3>
                <h4 class="subheading"><?php echo $home[2];?></h4>
                <p><?php echo nl2br($home[3]);?></p>
                <h4 class="subheading"><?php echo $home[4];?></h4>
                <p><?php echo nl2br($home[5]);?></p>

                <a href="services.php"><div class="button">Learn more</div></a>
            </div>
            <div class="col-9">
                <div class="medium-media div-center secondary-bg">
                <img class='cover-media shadow' src="assets/images/packedbags.jpg" alt="Services overview picture"/>
                
                </div>
            </div>
        </div>
    </div>

    <div id="row-3" class="">
            <!-- Added benefits --><?php 
                    $_GET['src'] = "benefits";
                    include 'assets/php/background.php';?>
            <div class="col-6 alternative-txt">
            
            <!-- <div class="secondary-bg">
                <img class='cover-media' src="assets/images/benefits.jpg" alt="Services overview picture"/>
                </div> -->
                
        
                <div class="content-wrapper">
                <ul class="tick-list">
                    <h3 class="subheading"><?php echo $home[6];?></h3>
                    <?php $list = explode(",",$home[7]);
                        foreach ($list as $item):
                            echo "<li class='tick-list-item'>$item</li>";
                        endforeach
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <?php include 'assets/php/partners.php'?>

    
    <!--Include footer-->
    <?php include 'assets/php/footer.php'?>
</body>
</html>