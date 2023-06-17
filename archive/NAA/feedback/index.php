<!DOCTYPE HTML>
<?php
include '../resources/session.php';
?>
<!--
The contents of the file are property of Non-Artistic Art. All rights reserved.
-->
<html>
<head>
	<title>
	Non-Artistic Art | Feedback
	</title>
    <meta name = "viewport" content="width = device-width, initial-scale:1.0">
	<link rel = stylesheet type="text/css" href="./basicLayout.css">
	<link rel = stylesheet type="text/css" href="../resources/fonts.css">
    <link rel = icon type="image/png" href="../resources/naa.png">
</head>
<body>
	<div id='CONTAINER'>
		<!--Header Row-->
		<div id='ROW-1'>
			<h2 id="feedbackHeading"><img src="../resources/naa.png" width='40'/>&nbsp;Beta Test Feedback</h2>
			<p id="feedbackInstruction">Hi <tt><?php if(isset($USER))echo @$USER; else echo 'tester';?></tt>, please fill out the form below. Every answer is measured on a scale from 1 to 5 with 1 being 'Strongly Disagree', 3 being 'Neutral' and 5 being 'Strongly Agree'. 
			</p>
			
			<form action="../resources/redirect.php?rdr=feedback"name="questionnaire" id='questionnaire' method="post">
				<label class="Question">1) Navigating between pages was simple and easy</label>
				<div class='radioDiv'>
					<input type='radio' class="radioButton" value='1' name="q1" required>1</input>
					<input type='radio' class="radioButton" value='2' name="q1">2</input>
					<input type='radio' class="radioButton" value='3' name="q1">3</input>
					<input type='radio' class="radioButton" value='4' name="q1">4</input>
					<input type='radio' class="radioButton" value='5' name="q1">5</input>
				</div>
				
				<label class="Question">2) Buttons are clearly marked and easily understandable</label>
				<div class='radioDiv'>
					<input type='radio' class="radioButton" value='1' name="q2" required>1</input>
					<input type='radio' class="radioButton" value='2' name="q2">2</input>
					<input type='radio' class="radioButton" value='3' name="q2">3</input>
					<input type='radio' class="radioButton" value='4' name="q2">4</input>
					<input type='radio' class="radioButton" value='5' name="q2">5</input>
				</div>
				
				<label class="Question">3) Colours on the site blend perfectly</label>
				<div class='radioDiv'>
					<input type='radio' class="radioButton" value='1' name="q3" required>1</input>
					<input type='radio' class="radioButton" value='2' name="q3">2</input>
					<input type='radio' class="radioButton" value='3' name="q3">3</input>
					<input type='radio' class="radioButton" value='4' name="q3">4</input>
					<input type='radio' class="radioButton" value='5' name="q3">5</input>
				</div>
				
				<label class="Question">4) Pages load on time</label>
				<div class='radioDiv'>
					<input type='radio' class="radioButton" value='1' name="q4" required>1</input>
					<input type='radio' class="radioButton" value='2' name="q4">2</input>
					<input type='radio' class="radioButton" value='3' name="q4">3</input>
					<input type='radio' class="radioButton" value='4' name="q4">4</input>
					<input type='radio' class="radioButton" value='5' name="q4">5</input>
				</div>
			
				<label class="Question">5) Background image perfectly suites the site</label>
				<div class='radioDiv'>
					<input type='radio' class="radioButton" value='1' name="q5" required>1</input>
					<input type='radio' class="radioButton" value='2' name="q5">2</input>
					<input type='radio' class="radioButton" value='3' name="q5">3</input>
					<input type='radio' class="radioButton" value='4' name="q5">4</input>
					<input type='radio' class="radioButton" value='5' name="q5">5</input>
				</div>
				
				<label class="Question">6) I found it easy to complete my task</label>
				<div class='radioDiv'>
					<input type='radio' class="radioButton" value='1' name="q6" required>1</input>
					<input type='radio' class="radioButton" value='2' name="q6">2</input>
					<input type='radio' class="radioButton" value='3' name="q6">3</input>
					<input type='radio' class="radioButton" value='4' name="q6">4</input>
					<input type='radio' class="radioButton" value='5' name="q6">5</input>
				</div>
				
				<label class="Question">7) Information about Non-Artistic Art was readily and easily accessible</label>
				<div class='radioDiv'>
					<input type='radio' class="radioButton" value='1' name="q7" required>1</input>
					<input type='radio' class="radioButton" value='2' name="q7">2</input>
					<input type='radio' class="radioButton" value='3' name="q7">3</input>
					<input type='radio' class="radioButton" value='4' name="q7">4</input>
					<input type='radio' class="radioButton" value='5' name="q7">5</input>
				</div>
				
				<label class="Question">8) Information about the services was readily and easily accessible</label>
				<div class='radioDiv'>
					<input type='radio' class="radioButton" value='1' name="q8" required>1</input>
					<input type='radio' class="radioButton" value='2' name="q8">2</input>
					<input type='radio' class="radioButton" value='3' name="q8">3</input>
					<input type='radio' class="radioButton" value='4' name="q8">4</input>
					<input type='radio' class="radioButton" value='5' name="q8">5</input>
				</div>
				
				<label class="Question">9) Finding service costs was easy and simple</label>
				<div class='radioDiv'>
					<input type='radio' class="radioButton" value='1' name="q9" required>1</input>
					<input type='radio' class="radioButton" value='2' name="q9">2</input>
					<input type='radio' class="radioButton" value='3' name="q9">3</input>
					<input type='radio' class="radioButton" value='4' name="q9">4</input>
					<input type='radio' class="radioButton" value='5' name="q9">5</input>
				</div>
				<label class="Question">10)</label>
				<div>
				<textarea rows="9" cols="45" placeholder='Further comments here...' name='comments' id='commentsTextBox'></textarea>
				</div>
				<input type='submit' id="submit" value='Submit'>
			</form>
		</div>
	</div>
</body>
</html>