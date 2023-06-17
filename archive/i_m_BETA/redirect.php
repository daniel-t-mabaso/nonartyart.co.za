<?php
//DEFINE ('DB_NAME', 'naa_site_db');
//DEFINE ('DB_USER', 'naa_bot');
//DEFINE ('DB_PASSWORD', 'gettherefast');
DEFINE ('DB_USER', 'f3106386_bot');
DEFINE ('DB_PASSWORD', '1996Get07there29fast!');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'f3106386_naaDB');

//$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)
or die('Could not connect to the Mysql'.mysql_connect_error());
$db = mysql_select_db(DB_NAME);
//echo 'connected<br/>';
$name = $_POST['name'];
$email = $_POST['email'];

//store tester details in database
$query2 = "SELECT * FROM beta_testers";
$result2 = mysql_query($query2);
//echo $result2;
if (isset($result2)){
	//echo 'entered if';
	$count=0;
	while (($row = mysql_fetch_array($result2)) && (mysql_num_rows ($result2)>0)){
		$user = $row['tester_name'];
		$mail = $row['tester_email'];
		//echo "$user, $mail<br/>";

		if(strtolower($email) === strtolower($mail))
		{
			//echo 'email already exists';
			$count=1; 
		}
	}
	if($count === 0)
		{
			//echo '<br/>count = 0 and entered insert';
			$query = "INSERT INTO beta_testers(tester_email, tester_name, tested) VALUES ('$email','$name', 'false')";
			$result = mysql_query($query);
			//echo $result.mysql_error($dbc);
			if($result){
				//echo "Data inserted<br/>";
			}
			else{//echo "Data not inserted<br/>";
			}

		}
	else{//echo '<br/>User already exists.';
	}
	}

else
	{$count= 0;
	//echo 'entered else';
		$query = "INSERT INTO beta_testers(tester_email, tester_name, tested) VALUES ('$email','$name', 'false')";
		$result = mysql_query($query);
		//echo $result.mysql_error($dbc);
		if($result){
		//echo "Data inserted<br/>";
		}
		else{//echo "Data not inserted<br/>";
		}
	}


//send confirmation email to the tester
$subj = 'BETA Tester Registration';
$msg = "Hi $name,

You have been successfully registered as a Non-Artistic Art BETA tester.

Your task as a tester is to simply browse, and place a test order on our BETA site. After this, simply click the 'Feedback' button and submit your feedback.

Once done, you will receive a confirmation email. It will also contain your one-time promo code which gives you 15% off your next order. Exclusive offers/rewards may also be sent to all our testers.

You will receive link as soon as the test period begins.

Thank you, once again, for choosing to be a BETA tester.

Regards
Non-Artistic Art team
info@nonartyart.co.za
060 757 6877
";
$header = "From: <no-reply@nonartyart.co.za>";
//echo '<br/><br/><br/>sending mail';
mail($email, $subj, $msg, $header);
$msg2 = "New tester: $name | $email";

?>

<!DOCTYPE HTML>
<!--All rights reserved. Property of NON ARTISTIC ART-->

<HTML>
<HEAD>
<TITLE>Non-Artistic Art | BETA Tester</TITLE>
<link rel=stylesheet type="text/css" href="layout.css">
<link rel=icon type="image/png" href="naa.png">
<meta name=viewport content="width= device-width, initial-scale:1.0">
</HEAD>
<BODY>
	<div id="container">
	<!--social ribon-->
		<div id="social-ribon">
			<a href="http://facebook.com/nonartyart"><img class="icon" src="facebook.png"/></a>
			<a href="https://www.youtube.com/channel/UCRgn-Bo0UfcRV-XoZdiS7VA"><img class="icon" src="youtube.png"/></a>
		</div>
		<div id="ROW-2">
			<div class="COL-6">
				<div id="logo-container">
					<img src="naa.png" width="100%"/>
				</div>
			</div>
		</div>
		<div id="ROW-3"><!--Notification-->
			<div class="COL-6">
				<div id="text-large">
					<?php
						if($count==0)
							{
								echo "<b id='letter'>S</b>uccessfully Registered!";
							}
						else
							{
								echo "<b id='letter'>U</b>nsuccessful!";
							}
					?>
					
				</div>
			</div>
		</div>
		<div id="ROW-4"><!--Request-->
			<div class="COL-6">
				<div id="text-small"><b style="font-size: 22px;">
				<?php
					if($count==0)
							{
								echo "$name, a confirmation email has been sent to $email.";
							}
						else
							{
								echo 'Email already in use! Use different email address to continue.<br/><br/><a href="http://nonartyart.co.za/i_m_BETA">Back</a>';
							}
							?></b>
				</div>

			</div>
		</div>
	
		<div id="ROW-b">
		</div>
		<div id="ROW-6"><!--footer-->
			<div id="tilted-panel">
			</div>
			<div class="COL-6">

				<div id="text-medium">
					Graphic Design | Web Development | App Development
				</div>
			</div>
		</div>
	</div>
</BODY>
</HTML>