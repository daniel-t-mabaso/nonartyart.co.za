<?php
require('recaptcha-master/src/autoload.php');
?><!DOCTYPE html>
<html>
<head>
	<title>Non-Artistic Art</title>
	<link href="https://fonts.googleapis.com/css?family=Candal" rel="stylesheet">
	<meta name="viewport" content="width =  device-width, initial-scale:1.0">
	<link href="https://fonts.googleapis.com/css?family=Catamaran:300" rel="stylesheet">
	<link rel="stylesheet" type='text/css' href='./resources/scripts/common.css'>
	<link rel="stylesheet" type='text/css' href='./resources/scripts/about.css'>
	<link rel="icon" type="image/png" href="./resources/images/naa.png">
	
</head>
<body>

	<!--Widgets | Small elements that are positioned at fixed positions-->
	<div id='widgets'>
		<div id='social-media-panel'>
			<div class="trnsp-bg"></div>
			<img class="social-icon" src="./resources/images/facebook.png"/>
			<img class="social-icon" src="./resources/images/youtube.png"/>
		</div>
		<div id='to-top-button'></div>
	</div>
	
	<!--Header-->
	<style>
		
	</style>
	<div id='ROW-1' name='header'>
		<div class="trnsp-bg"></div>
		<a href='./index.html'><img id='header-logo' src='./resources/images/naa.png' /></a>
		<div id='header-navigation-bar'>
			<ul class='nav-link-list'><img id='hamburger' src='./resources/images/hamburger.png'/>
				<li class='nav-link'><a href='./index.html'>Home</a></li>
				<li class='nav-link'><a href='./graphic_design.html'>Graphic Design</a></li>
				<li class='nav-link'><a href='./web_development.html'>Web Development</a></li>
				<li class='nav-link'><a href='./our_work.html'>Our work</a></li>
				<li class='nav-link'><a href='./contact.html'>Contact</a></li>
				<li class='nav-link'><a href='./about.html'>About</a></li>
			</ul>
		</div>
		
	</div>
	
	
	<!--Cover with changing backgrounds-->
	<div id='ROW-2' name='cover'>
		<img id='background-image' src='./resources/images/bg5.jpg' />
		<div class='tint-panel'></div>
		
		<div class="text-panel">
			<h2>Contact us</h2>
			<p><?php

	function sendMail(){
		$name = $_POST['name'];
		$type = $_POST['type'];
		$company = $_POST['company'];
		$email = trim($_POST['email']);
		$msg = $_POST['comment'];
		$phone = $_POST['phone'];
		$to = 'info@nonartyart.co.za';
		$subj = "$type from $name";
		$header = "From: <no-reply@nonartyart.co.za>";
		@mail($to, $subj, "Name:$name<br/>email:$email<br/>Phone:$phone<br/>Type:$type<br/><br/>$msg", $header);
		@mail($email, 'Non-Artistic Art Contact', "Hi $name, <br/><br/>Thank you for getting in touch with us. A member of our team will get in touch with you soon.<br/><br/>Regards<br/>Non-Artistic Art Team<br/><br/>Please do not reply to this email. Direct all queries to info@nonartyart.co.za", $header);
		echo "Thank you for getting in touch with us. A member of our team will get back to you soonest!<br/><br/>A confirmation email has been sent to <b>$email</b>";
	}
	$ACTION= $_GET['rdr'];
	switch ($ACTION){
		case 'send':
			
			$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';
            
            // If something goes wrong, we will display this message.
            $errorMessage = 'There was an error while submitting the form. Please try again later';
			$recaptchaSecret = '6LeV844UAAAAADn8GQhvr_z4PBKg4-R2sfJBeRV2';
			try {
    if (!empty($_POST)) {

        // validate the ReCaptcha, if something is wrong, we throw an Exception,
        // i.e. code stops executing and goes to catch() block
        
        if (!isset($_POST['g-recaptcha-response'])) {
            throw new \Exception('ReCaptcha is not set.');
        }

        // do not forget to enter your secret key from https://www.google.com/recaptcha/admin
        
        $recaptcha = new \ReCaptcha\ReCaptcha($recaptchaSecret, new \ReCaptcha\RequestMethod\CurlPost());
        
        // we validate the ReCaptcha field together with the user's IP address
        
        $response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

        if (!$response->isSuccess()) {
            throw new \Exception('ReCaptcha was not validated.');
        }
        
        // Send email
        sendMail();

        $responseArray = array('type' => 'success', 'message' => $okMessage);
        }
        } catch (\Exception $e) {
            $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
        }
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $encoded = json_encode($responseArray);
        
            header('Content-Type: application/json');
        
            echo $encoded;
        } else {
            echo $responseArray['message'];
        }
			break;
		default:
			echo 'Error 404: Page not found!';
	}
?></p>
			
		</div>
	</div>
	
	
	
	<div id='footer'>
	
	<style>
		
	</style>
		<div class='footer-item'>
			<ul class='footer-link-list'><b>NON-ARTISTIC ART</b>
				<li class='footer-link'><a href='./index.html'>Home</a></li>
				<li class='footer-link'><a href='./graphic_design.html'>Graphic Design</a></li>
				<li class='footer-link'><a href='./web_development.html'>Web Development</a></li>
				<li class='footer-link'><a href='./our_work.html'>Our work</a></li>
				<li class='footer-link'><a href='./about.html'>About</a></li>
				<li class='footer-link'><a href='./contact.html'>Contact</a></li>
			</ul>
		</div>
		<div class='footer-item'>
			<ul class='footer-link-list'><b>CONTACT</b>
				<li class='footer-link'>info@nonartyart.co.za</li>
				<li class='footer-link'>+27 60 757 6877</li>
				<li class='footer-link'><b><tt>WhatsApp</tt></b> +27 73 576 8852</li>
			</ul>
		</div>
		<div class='footer-item'>
			<ul class='footer-link-list'><b>CONNECT</b>
				<li class='footer-link'><a href='http://www.facebook.com/nonartyart'>Facebook</a></li>
				<li class='footer-link'><a href='https://www.youtube.com/channel/UCRgn-Bo0UfcRV-XoZdiS7VA'>Youtube</a></li>
			<b>LEGAL</b>
				<li class='footer-link'><a href='#'>Policy</a></li></a>
				<li class='footer-link'><a href='#'>Terms & Conditions</a></li>
			</ul>
		</div>
		<img id='footer-logo' src='./resources/images/naa_black_txt.png'>
	</div>
	
	<script src='./resources/scripts/background.js'></script>
</body>
</html>	

