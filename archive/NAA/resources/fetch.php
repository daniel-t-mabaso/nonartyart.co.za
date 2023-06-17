
<?php 
function fetch_android_apps(){
	$list=NULL;
	//returns a list of top 4 applications by download
	$query = "SELECT app_name FROM applications ORDER BY app_name ASC";
	$response = @mysqli_query($dbc, $query);
	if ($response)
		{
			$list = mysqli_fetch_array($response);
		}
	return $list;
}
function fetch_popular(){
	$list=NULL;
	//returns a list of top 4 applications by download
	$query = "SELECT app_name FROM applications ORDER BY app_downloads ASC LIMIT 4";
	$response = @mysqli_query($dbc, $query);
	if ($response)
		{
			$list = mysqli_fetch_array($response);
		}
	return $list;
}
?>