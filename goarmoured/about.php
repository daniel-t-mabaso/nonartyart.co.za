<!DOCTYPE html>
<html lang="en">
<head>
    <title>Go Armoured - Secure, convenient luggage wrapping</title>

    <?php include 'assets/php/dependencies.php'?>

</head>
<body class="secondary-txt">
    
    <!--Include header-->
    <?php include 'assets/php/header.php'?>
    
    <div id="row-2" class="white-bg secondary-txt">
        <div class="content-wrapper">
            <div class="col-6" id="about-panel">
                <h2 class="heading"><?php echo $about[0]?></h2>
                <div class="small-media float-left"><img src="assets/images/Square Lockup.png" class="cover-media" alt="Go Armoured logo"></div>
                <p>
                <?php echo nl2br($about[1])?>
                </p>
            </div>
        </div>
        <?php 
        $_GET['src'] = "packedbags";
        include 'assets/php/background.php';?>
        </div>
        
    </div>

    <div id="row-3" class="">
        <div class="col-3 alternative-bg secondary-txt">
            <div class="half-wrapper float-right">
            <ul class="tick-list">
                <h3><?php echo $about[2]?></h3>
                <?php $list = explode(",",$about[3]);
                    foreach ($list as $item):
                        echo "<li class='tick-list-item'>$item</li>";
                    endforeach
                ?>
            </ul>
            </div>
        </div>
        <div class="col-9">
            <?php 
            $_GET['src'] = "adult-airport-arrival";
            include 'assets/php/background.php';?>
            <div style="line-height: 350px; margin: 0 auto; text-align: center;"><h2 class="heading white-txt">"Serenity and guaranteed safety of valuables" </h2></div>
        </div>
    </div>

    <div id="row-4">
        <div class="col-6">
            <h2 class="heading"><?php echo $about[4]?></h2>
                <div class="content-wrapper">
                <div class="team-container">
                    <div class="small-media">
                        <img src="assets/images/uploads/zureenah.jpg" alt="Team Member picture" class="cover-media"></div>
                    <div class="member-name"><?php echo $about[5]?></div>
                    <div class="member-position"><?php echo $about[6]?></div>
                    <p class="member-bio"><?php echo $about[7]?></p>
                </div>
                <div class="team-container">
                    <div class="small-media">
                        <img src="assets/images/uploads/lyll.jpg" alt="Team Member picture" class="cover-media"></div>
                    <div class="member-name"><?php echo $about[8]?></div>
                    <div class="member-position"><?php echo $about[9]?></div>
                    <p class="member-bio"><?php echo $about[10]?></p>
                </div>
            </div>
        </div>
    </div>
    <?php include 'assets/php/partners.php'?>
    <!--Include footer-->
    <?php include 'assets/php/footer.php'?>
</body>
</html>