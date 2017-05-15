<?php session_start();  ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php  

	include("config.php")
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM member_table where username = '$username'";
	$result = mysql_query($sql);
	$row =@mysql_fetch_row($result);

	if($username!=null && $password!=null && $row[1]==$id && $row[2]==$password)
	{
		$_SESSION['username'] = $username ;
		
		echo header('location: dwtest1.php');
	}
	else
	{
		echo header('location: index.php') ; 
	}
?>