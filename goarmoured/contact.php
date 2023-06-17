<!DOCTYPE html>
<html lang="en">
<head>
    <title>Go Armoured - Secure, convenient luggage wrapping</title>

    <?php include 'assets/php/dependencies.php'?>

</head>
<body class="secondary-txt">
    
    <!--Include header-->
    <?php include 'assets/php/header.php'?>
    
    <div id="row-6" class="alternative-txt">
        <div class="col-6">
            <?php 
                $_GET['src'] = "rotary phones";
                include 'assets/php/background.php';?>
        <!-- Contact details and contact form -->
            <div class="content-wrapper">
                <div  class='physical-address-panel'>
                    <div class="contact-panel">
                        <h3 class="heading text-from-left"><?php echo $contact[0];?></h3>
                        <div class="address-details-panel  float-left text-from-left">
                            <h4><?php echo $contact[1];?></h4>
                            <?php echo nl2br($contact[2]);?>
                        </div>
                        <div class="address-details-panel float-left text-from-left">
                            <h4><?php echo $contact[3];?></h4>
                            <?php echo nl2br($contact[4]);?>
                        </div>

                            <form action="assets/php/forms.php" class="contact-form" name='contact-form'>
                                <input class="contact-form-input" type="text" name="fullname" placeholder="Full name"/>
                                <input class="contact-form-input" type="text" name="email" placeholder="Email"/>
                                <textarea class="contact-form-input" placeholder="Message" rows="15" cols="30" name="message"></textarea>
                                <input type="submit" class="button" value="Send" name="email-contact-form"/>
                            </form>
                        
                    </div>

                    <!-- physical address and map -->  
                    <div class='contact-panel'>
                        <h3 class="heading float-right text-from-right"><?php echo $contact[5];?></h3>
                        <div class="address-details-panel float-right text-from-right">
                            <h4><?php echo $contact[6];?></h4>
                            <?php echo nl2br($contact[7]);?>
                        </div>
                        <div class="address-details-panel float-right text-from-right">
                            <h4><?php echo $contact[8];?></h4>
                            <?php echo nl2br($contact[9]);?>
                        </div>
                        
                        <div id="map-panel" class="float-right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14320.132305660343!2d18.49266553090062!3d-33.82102645884641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc5f3eb2c561f7%3A0x348ccd0d2710d4f3!2sRaats+Dr%2C+Bloubergstrand%2C+Cape+Town%2C+7441!5e0!3m2!1sen!2sza!4v1543568465807" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    
                </div>
                

                
            </div>
        </div>
    </div>
    
    <!--Include footer-->
    <?php include 'assets/php/footer.php'?>
</body>
</html>