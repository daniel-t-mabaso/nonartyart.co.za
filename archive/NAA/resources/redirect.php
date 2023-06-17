<?php
include './session.php';
$PAGE = $_SESSION['page'] ;

function redirect($url) {
	$_SESSION['error']="false";
	$_SESSION['recover']="false";
	flush();
	echo "<script type='text/javascript'>window.location.href='$url';</script>";
    exit;
}

function submitFeedback($email, $answers, $description, $title){
	require_once('./connect.php');
	$query = "INSERT INTO feedback(email, answers, description, title) VALUES ('$email','$answers', '$description', '$title')";

	$result = mysql_query($query);

	//echo $result.mysql_error($dbc);
	if($result){
		//echo "Data inserted";
    require_once('./connect.php');
    $query2 = "UPDATE 'beta_testers' SET 'tested' = 'true' WHERE 'beta_testers'.'tester_email' = '$email'";
    $result2 = mysql_query($query2);
    if($result2){
      //echo "Data updated";
    }

  	else{//echo "Data not updated";
  	}
  }
	else{
	echo '';
	//echo "Data not inserted";
	}
}

function checkTesterSignIn($user)
{
	require_once('./connect.php');
	$query = "SELECT * FROM beta_testers";
	$result = mysql_query($query);
	//echo $result;
	if ($result){
		//echo 'entered if';
		$count = 1;
		while($row = mysql_fetch_array($result))
			{//echo  '<br>',$row['customer_name'],' - ', $row['customer_email'],'<br>';

				//echo 'entered while<br>', $count++,') ';
				if(strtolower($row['tester_email']) == strtolower($user))
					{
						//echo  $row['tester_name'], $row['tester_email'];
						$_SESSION['loggedIn']= true;
						$_SESSION['user']= $row['tester_name'];
						$_SESSION['email']= $row['tester_email'];

						//echo '<br>logged in!<br><br><br><br>';
						redirect('../customer.php?CONFIRM=LogIn');
						die;


					}
				else
					{
						echo '';
						//echo 'Incorrect details!<br>';
					}
			}
	}else{//echo 'no results';
		redirect('../customer.php?CONFIRM=NotRegistered');
	}

  redirect('../customer.php?CONFIRM=IncDetails');
}


function send($name,$email,$message){
	require_once('./connect.php');
	$query = "INSERT INTO mail(user_email, user_name, user_msg) VALUES ('$email','$name', '$message')";

	$result = mysql_query($query);

	//echo $result.mysql_error($dbc);
	if($result){
		//echo "Data inserted";
	}
	else{
	//echo "Data not inserted";
	}
}

function checkSignIn($user, $password)
	{
		require_once('./connect.php');
		$query = "SELECT * FROM customers";
		$result = mysql_query($query);
		if ($result){
			$count = 1;
			while($row = mysql_fetch_array($result))
				{//echo  '<br>',$row['customer_name'],' - ', $row['customer_email'],'<br>';

					if(($row['customer_password'] == md5($password))&& ($row['customer_email'] == $user))
						{
							$_SESSION['loggedIn']= true;
							$_SESSION['user']= $row['customer_name'].' '.$row['customer_surname'];
							$_SESSION['email']= $row['customer_email'];
							$_SESSION['cell']= $row['customer_cell'];
							$_SESSION['customer_id'] = $row['customer_id'];
              $_SESSION['company'] = $row['company_name'];

							redirect('../customer.php?CONFIRM=LogIn');
							die();


						}
					else
						{
						}
				}
				
    				redirect('../customer.php?CONFIRM=IncDetails');
		}else{echo 'no results';
			redirect('../customer.php?CONFIRM=NotRegistered');
		}

    redirect('../customer.php?CONFIRM=IncDetails');
	}

function newUser($name, $surname,$email,$cell, $password){
	require_once('./connect.php');
	$password = md5(12345);
	$query = "INSERT INTO customers(customer_name, customer_surname, customer_email, customer_password, customer_cell) VALUES ('$name','$surname','$email','$password','$cell')";

		$result2 = mysql_query( $query);

		if($result2){
  		checkSignIn($email, '12345');
			redirect('../customer.php?CONFIRM=Registered');
			die();
		}
		else{}
	}
function submitOrder()
  {
    require_once("./connect.php");
    $customerId = $_GET['id'];
    $service = $_POST['SERVICE'];
    $promoCode = $_POST['promo'];
    $startDate = date("H:i")." - ".date("d M Y");

    $query = "INSERT INTO
    projects(customer_id, service_id, promo_code, start_date)
    VALUES ('$customerId', '$service', '$promoCode', '$startDate')
    ";
    $result = mysql_query($query);

    if($result)
    {}
    else {
    }
  }
$ACTION= $_GET['rdr'];
switch ($ACTION){
	  case 'TesterLogIn':
	    $email = $_POST['email'];
	    checkTesterSignIn($email);
	    break;
	case 'msg':
		$name = $_POST['USER_NAME'];
		$email = trim($_POST['USER_EMAIL']);
		$msg = $_POST['USER_MSG'];
		$to = 'info@nonartyart.co.za';
		$subj = "CLIENT MAIL: $name | $email";
		$header = "From: <info@nonartyart.co.za>";
		send($name, $email, $msg);
		mail($to, $subj, $msg, $header);
		break;
	case 'newUser':
		$name = trim($_POST['USER_NAME']);
		$email = trim($_POST['USER_EMAIL']);
		$password = trim($_POST['PASSWORD']);
		newUser($name, $email,$cell, $password);
		break;
	case 'SI':
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		checkSignIn($email, $password);

		break;
	case 'NU':
		$name = trim($_POST['NAME']);
		$surname = trim($_POST['SURNAME']);
		$email = trim($_POST['email']);
    		$cell = trim($_POST['cell']);


		newUser($name, $surname, $email ,$cell, '12345');
		break;
  case 'logout':
	session_destroy();
	session_start();
		redirect('../customer.php?CONFIRM=LogOut');
		break;
  case 'order':
    submitOrder();
    redirect('../customer.php?CONFIRM=Order');
    break;
    case 'feedback':
	  $h1 = $_POST['q1'].','.$_POST['q2'].','.$_POST['q3'].','.$_POST['q4'].','.$_POST['q5'].','.$_POST['q6'].','.$_POST['q7'];
	  if(isset($_POST['comments']) && $_POST['comments']!='')
	    {
	      $comment = $_POST['comments'];
	    }
	  else
	    {
	      $comment = 'null';
	    }
	  $answers = $h1.','.$_POST['q8'].','.$_POST['q9'].','.$comment;
	
	    if (isset($_SESSION['email']))
	      {$email = $_SESSION['email'];}
	    else{$email = 'anon';}
	    submitFeedback($email, $answers, 'Feedback for the first Beta Test for the 2017 February site.', 'BETA_TEST_001');
	    $msg = $email.' has submitted feedback. The answers are as follows: '.$answers;
		$to = 'daniel@nonartyart.co.za';
		$subj = "TESTER FEEDBACK: $email";
		$header = 'From: <info@nonartyart.co.za>'.'\r\n';
		mail($to, $subj, $msg, $header);
		if($email !='anon')
		mail($email, 'Successfully Submitted Feedback', "Hi $USER,<br/>Thank you for taking your time to help us test our new site. As promised you will get 15% off your next order.<br/>Your discount promo code is BT2017. If you place your order online, just enter the code in the promo code text area. If you place your order via email or telephonically, simply inform any of our representatives and they will enter the code in to the system for you.<br/> Thank you once again for your assistance.<br/>Regards<br/>Non-Artistic Art Team", 'From: <info@nonartyart.co.za>'. "\r\n");
	    redirect('../customer.php?CONFIRM=Success');
	    break;
	default:
		echo 'Error: Unknown Action.';
		echo '<a href="http://nonartyart.co.za">Home</a>';
		break;
	}
?>
