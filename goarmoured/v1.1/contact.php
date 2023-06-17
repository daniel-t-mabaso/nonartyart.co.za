<!DOCTYPE html>
<html lang="en">
<head>
    <title>Go Armoured - Secure, convenient luggage wrapping</title>

    <?php include 'assets/php/dependencies.php'?>

</head>
<body class="secondary-txt">
    
    <!--Include header-->
    <?php include 'assets/php/header.php'?>
    
    <div id="row-6" class="white-txt">
        <div class="col-3">
            <?php 
                $_GET['src'] = "rotary phones";
                include 'assets/php/background.php';?>
        <!-- Contact details and contact form -->
        <h2 class="heading"><?php echo $contact[0];?></h2>
            <div class="contact-panel">
                <div class="contact-details-panel">
                    <h4><?php echo $contact[1];?></h4>
                    <?php echo nl2br($contact[2]);?>
                </div>
                <div class="contact-details-panel">
                    <h4><?php echo $contact[3];?></h4>
                    <?php echo nl2br($contact[4]);?>
                </div>
            </div>
            <div class="contact-panel">
                <form action="assets/php/forms.php" class="contact-form" name='contact-form'>
                    <input class="contact-form-input" type="text" name="fullname" placeholder="Full name"/>
                    <input class="contact-form-input" type="text" name="email" placeholder="Email"/>
                    <textarea class="contact-form-input" placeholder="Message" rows="7" cols="30" name="message"></textarea>
                    <input type="submit" class="button" value="Send"/>
                </form>
            </div>
        </div>
        <div class="col-9 alternative-bg secondary-txt">
            <!-- physical address and map -->
            
        <div class='physical-address-panel'>
        <h3 class="heading"><?php echo $contact[5];?></h3>
            <div class="address-details-panel">
                <h4><?php echo $contact[6];?></h4>
                <?php echo nl2br($contact[7]);?>
            </div>
            <div class="address-details-panel">
                <h4><?php echo $contact[8];?></h4>
                <?php echo nl2br($contact[9]);?>
            </div>
        </div>
        <div id="map-panel">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.3575820948295!2d18.4590050504447!3d-33.957647531011176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc5d22b778b401%3A0x5f90e4dc19b5fa4e!2sUniversity+of+Cape+Town!5e0!3m2!1sen!2sza!4v1532356466147" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        </div>
    </div>
    
    <!--Include footer-->
    <?php include 'assets/php/footer.php'?>
</body>
</html>