<?php
DEFINE ('DB_USER', 'f3106386_bot');
DEFINE ('DB_PASSWORD', '1996Get07there29fast!');
DEFINE ('DB_NAME', 'f3106386_naaDB');

DEFINE ('DB_HOST', 'localhost');


$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)
or die('Could not connect to the Mysql'.mysql_connect_error());
$db = mysql_select_db(DB_NAME);
//echo 'connected<br/>';

//store tester details in database

echo '<div style="text-align: center;"><h1>Non-Artistic Art</h1><h2>Registered BETA testers:</h2>';

$query2 = "SELECT * FROM feedback ORDER BY email ASC";
$result2 = mysql_query($query2);
if (isset($result2)){
	$count=0;
	echo '<table style="border:1px solid black; width=500px; margin: 0 auto; background-color: #fafafa;">
			<tr">
				<th style="border:1px solid black; width=250px;">Name</th>
				<th style="border:1px solid black; width=250px;">Email</th>
			</tr>';
	while($row = mysql_fetch_array($result2)){
		$user = $row['email'];
		$mail = $row['answers'];
		

		if(!($user == ''))
		{
			$count++;
			echo "<tr'>
			<td style='border:1px solid black; width=250px;'><p>$count. $user</p></td>
			<td style='border:1px solid black; width=250px;'><p>$mail</p></td>
			</tr>"; 
		}
		
	}
	echo '</table></div>';
}