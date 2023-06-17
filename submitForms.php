<!DOCTYPE html>
<html>
<head>
	<title>Non-Artistic Art</title>
	<link href="https://fonts.googleapis.com/css?family=Candal" rel="stylesheet">
	<meta name="viewport" content="width =  device-width, initial-scale:1.0">
	<link href="https://fonts.googleapis.com/css?family=Catamaran:300" rel="stylesheet">
	<link rel="stylesheet" type='text/css' href='./resources/scripts/common.css'>
	<link rel="stylesheet" type='text/css' href='./resources/scripts/about.css'>
	<link rel="icon" type="image/png" href="./resources/images/naa.png">
	<meta name="keywords" content="Giyani, Graphic, Design, Web, Development, Gauteng, Limpopo, Mpumalanga, Western, Cape, Town, Non, Artistic, Non-Artistic, Art">
	<meta name="revisit-after" content="1 days">
	<meta name="description" content="Get affordable quality graphic designs and websites.">
	<meta name="url" content="http://www.nonartyart.co.za/">
	<meta name="designer" content="Non-Artistic Art, http://nonartyart.co.za">

	<meta name="googlebot" content="noarchive">

	<meta property="og:url" content="http://www.nonartyart.co.za/"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="Non-Artistic Art"/>
	<meta property="og:description" content="Get affordable quality graphic designs and websites."/>
	<meta property="og:image" content="./resources/images/naa.png"/>
</head>
<body>

	<!--Widgets | Small elements that are positioned at fixed positions-->
	<div id='widgets'>
		<div id='social-media-panel'>
			<div class="trnsp-bg"></div>
			<img class="social-icon" src="./resources/images/facebook.png"/>
			<img class="social-icon" src="./resources/images/youtube.png"/>
		</div>
		<div id='to-top-button'>Top</div>
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
			<h3 style='font-weight: normal;'><?php
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
		mail($to, $subj, "Name: $name\nemail: $email \nPhone: $phone \nType: $type\nCompany: $company \n\n$msg", $header);
		mail($email, 'Non-Artistic Art Confirmation', "Hi $name,\n\nThis email is to confirm that we have received your communication. A member of our team will attend to you soon.\n\nPlease do not reply to this email. Please direct any queries email info@nonartyart.co.za or contact +27 60 757 6877\n\nKind Regards\nNon-Artistic Art Team", $header);
		echo "Thank you for getting in touch with us. A member of our team will get back to you soonest!<br/><br/>An email confirmation will be sent to <b>$email</b>.";
	}
	$ACTION= $_GET['rdr'];
	switch ($ACTION){
		case 'send':
			@sendMail();
			break;
		default:
			echo 'Error 404: Page not found!';
	}
?></h3>
			
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

