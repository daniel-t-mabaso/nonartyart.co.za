<!DOCTYPE html>
<html lang="en">
<head>
    <title>Go Armoured - Secure, convenient luggage wrapping</title>

    <?php include 'assets/php/dependencies.php'?>

</head>
<body class="secondary-txt">
    
    <!--Include header-->
    <?php include 'assets/php/header.php'?>
    
    <div id="row-1" class="alternative-bg">
        <div id="service-description-panel" class="col-6">
            <h2 class="heading"><?php echo $services[0]?></h2>
            
        <p><?php echo $services[1]?></p>
        </div>
        <div class="col-3">
            <ul class="tick-list">
                <h3><?php echo $services[2]?></h3>
                <?php $list = explode(",",$services[3]);
                    foreach ($list as $item):
                        echo "<li class='tick-list-item'>$item</li>";
                    endforeach
                ?>
            </ul>    
        </div>
        <div class="col-9">
            <div id="services-banner">
                <img src="assets/images/padlock.jpg" alt="padlock with chains" class="cover-media">
            </div>    
            <h2 class="heading"><?php echo $services[4]?></h2>
            <p><?php echo $services[5]?></p>
        </div>
    </div>

    <div id="row-5" >
        <div class="col-6 white-txt" id="process-panel" >
            <h2 class="heading"><?php echo $services[6]?></h2>
            <div id="process-description"> <p><?php echo $services[7]?></p></div>
            <div class="process-icons-panel">
                <div class="process-media"><img src="assets/images/process-step-1.png" alt="Service request icon" class="cover-media">
                    </br>
                    Service Request
                </div>
                <div class="process-media"><img src="assets/images/process-step-2.png" alt="Operator deployment icon" class="cover-media"></br>
                    Deploy Operator</div>
                    
                <div class="process-media"><img src="assets/images/process-step-3.png" alt="Luggage wrapping icon" class="cover-media"></br>
                    Render Service
                </div>
                
                <div class="process-media"><img src="assets/images/process-step-4.png" alt="Service completed icon" class="cover-media"></br>
                    Job Done</div>
                    
            </div>
        </div>
            <?php 
                $_GET['src'] = "conveyer luggage";
                include 'assets/php/background.php';?>
    </div>

    <div id="row-call-to-action">
        <div id="call-to-action" class="col-6">
            <h2 class="heading"><?php echo $services[8]?></h2>
            <p><?php echo $services[9]?></p>
            <a href="contact.php"><div class="button div-center">Get in touch &#9655;</div></a>

        </div>
    </div>
    
    <?php include 'assets/php/partners.php'?>
    <!--Include footer-->
    <?php include 'assets/php/footer.php'?>
</body>
</html>