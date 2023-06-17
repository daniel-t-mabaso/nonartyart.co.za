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
            <h2 class="heading">We'll wrap that for you</h2>
            
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Recusandae architecto, sit expedita sunt officia quisquam. Labore, illum atque?
             Optio sit repellat quam dolore vel nihil expedita ad aperiam illo nisi!</p>
        </div>
        <div class="col-3">
            <ul class="tick-list">
                <h3>Secure wrapping</h3>
                <li class="tick-list-item">Secure</li>
                <li class="tick-list-item">Convenient</li>
                <li class="tick-list-item">Quality</li>
                <li class="tick-list-item">Fast</li>
                <li class="tick-list-item">Accessible</li>
            </ul>    
        </div>
        <div class="col-9">
            <div id="services-banner">
                <img src="assets/images/padlock.jpg" alt="padlock with chains" class="cover-media">
            </div>    
            <h2 class="heading">Can I get the service?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Recusandae architecto, sit expedita sunt officia quisquam. Labore, illum atque?
                Optio sit repellat quam dolore vel nihil expedita ad aperiam illo nisi!</p>
        </div>
    </div>

    <div id="row-5" >
        <div class="col-6 white-txt" id="process-panel" >
            <h2 class="heading">We meet our clients at their point of convenience</h2>
            <div id="process-description"> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Recusandae architecto, sit expedita sunt officia quisquam. Labore, illum atque?
                    Optio sit repellat quam dolore vel nihil expedita ad aperiam illo nisi!</p></div>
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
                $_GET['src'] = "foldable map";
                include 'assets/php/background.php';?>
    </div>

    <div id="row-call-to-action">
        <div id="call-to-action" class="col-6">
            <h2 class="heading">Want us to service your business?</h2>
            <p>We offer our services to hotels, lodges, guest hoses and many more.</p>
            <a href="contact.php"><div class="button div-center">Get in touch &#9655;</div></a>

        </div>
    </div>
    
    <?php include 'assets/php/partners.php'?>
    <!--Include footer-->
    <?php include 'assets/php/footer.php'?>
</body>
</html>