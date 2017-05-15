<?php 
require('config.php');

if(!isset($_COOKIE['session_id']))
{
	header('Location:login.php?refer='.urlencode(getenv('REQUEST_URL')));
}

$guild = $_COOKIE['session_id'];
$con = mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_name,$con);

$query ="SELECT userid FROM susers WHERE guild='$guild'";
$result = mysql_query($query,$con);

if(!mysql_num_rows($result))
{
header('Location: login.php?refer='. urlencode(getenv('REQUEST_URI')));
}
?>