
<?php


DEFINE ('DB_USER', 'f3106386_bot');
DEFINE ('DB_PASSWORD', '1996Get07there29fast!');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'f3106386_naaDB');

//$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)
or die('Could not connect to the Mysql'.mysql_connect_error());
mysql_select_db(DB_NAME);
?>
