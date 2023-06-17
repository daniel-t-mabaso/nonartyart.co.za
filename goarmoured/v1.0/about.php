<!DOCTYPE html>
<html lang="en">
<head>
    <title>Go Armoured - Secure, convenient luggage wrapping</title>

    <?php include 'assets/php/dependencies.php'?>

</head>
<body class="secondary-txt">
    
    <!--Include header-->
    <?php include 'assets/php/header.php'?>
    
    <div id="row-2" class=" alternative-bg">
        <div class="col-6" id="about-panel">
            <h2 class="heading">About Go Armoured</h2>
            <div class="small-media float-left"><img src="assets/images/logo.png" class="cover-media" alt="Go Armoured logo"></div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Perferendis incidunt amet laborum voluptate earum aperiam
                et quasi rerum assumenda corporis, obcaecati, doloribus
                asperiores repudiandae totam molestiae accusamus minus enim odit?
                <br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Perferendis incidunt amet laborum voluptate earum aperiam
                et quasi rerum assumenda corporis, obcaecati, doloribus
                asperiores repudiandae totam molestiae accusamus minus enim odit?
                <br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Perferendis incidunt amet laborum voluptate earum aperiam
                et quasi rerum assumenda corporis, obcaecati, doloribus
                asperiores repudiandae totam molestiae accusamus minus enim odit?
            </p>
        </div>
    </div>
    <div id="row-3">
        <div class="col-3 white-txt">
            <ul class="tick-list">
                <h3>Added benefits</h3>
                <li class="tick-list-item">Secure</li>
                <li class="tick-list-item">Convenient</li>
                <li class="tick-list-item">Quality</li>
                <li class="tick-list-item">Fast</li>
                <li class="tick-list-item">Accessible</li>
            </ul>
        </div>
        <?php 
        $_GET['src'] = "packedbags";
        include 'assets/php/background.php';?>
    </div>

    <div id="row-4">
        <div class="col-6">
            <h2 class="heading">Meet the team</h2>
            <div class="team-container">
                <div class="small-media">
                    <img src="assets/images/uploads/" alt="Team Member picture" class="cover-media"></div>
                <div class="member-name">Full Name</div>
                <div class="member-position">Position</div>
                <p class="member-bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Perferendis incidunt amet laborum voluptate earum aperiam
                et quasi rerum assumenda corporis</p>
            </div>
            <div class="team-container">
                <div class="small-media">
                    <img src="assets/images/uploads/" alt="Team Member picture" class="cover-media"></div>
                <div class="member-name">Full Name</div>
                <div class="member-position">Position</div>
                <p class="member-bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Perferendis incidunt amet laborum voluptate earum aperiam
                et quasi rerum assumenda corporis</p>
            </div>
        </div>
    </div>
    <?php include 'assets/php/partners.php'?>
    <!--Include footer-->
    <?php include 'assets/php/footer.php'?>
</body>
</html>