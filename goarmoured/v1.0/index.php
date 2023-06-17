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
    
        <div id="row-1" class="div-slant-bottom white-txt">
                <?php 
                $_GET['src'] = "packedbags";
                include 'assets/php/background.php';?>
            <!-- landing cover -->
            <div class="col-6">
                <div class="welcome-text-panel">
                    <h2>Be ensured that your luggage is secured</h2>
                    <a href="#overview"><div class="button div-center">Learn more</div></a>
                </div>
                <div class="quick-links-panel">
       
                    <a href="about.php"><div class="quick-link">About us &#9655;</div></>
                    <br>
                    <a href="contact.php"><div class="quick-link">Get in touch &#9655;</div></a>
                </div>
            </div>
        </div>
    <div id="row-2" class="white-bg">
        <span id="overview"></span>
        <!-- Services overview -->
        <div class="col-3">
            <h3 class="heading">Overview of what Go Armoured offers</h3>
            <h4 class="subheading">Secure luggage wrapping</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Repellat veritatis eius ex necessitatibus eum vitae...</p>
            <h4 class="subheading">Convenience</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Repellat veritatis eius ex necessitatibus eum vitae...</p>

            <a href="services.php"><div class="button">Learn more</div></a>
        </div>
        <div class="col-9">
            <div class="medium-media div-center secondary-bg">
            <img class='cover-media' src="assets/images/luggage at airport.jpg" alt="Services overview picture"/>
            </div>
        </div>
    </div>

    <div id="row-3" class="">
        <!-- Added benefits -->
        <div class="col-3">
            <?php 
                $_GET['src'] = "foldable map";
                include 'assets/php/background.php';?>
        </div>
        <div class="col-9 tertiary-bg">
            <ul class="tick-list">
                <h3>Added benefits</h3>
                <li class="tick-list-item">Secure</li>
                <li class="tick-list-item">Convenient</li>
                <li class="tick-list-item">Quality</li>
                <li class="tick-list-item">Fast</li>
                <li class="tick-list-item">Accessible</li>
            </ul>
        </div>
    </div>

    <?php include 'assets/php/partners.php'?>

    
    <!--Include footer-->
    <?php include 'assets/php/footer.php'?>
</body>
</html>