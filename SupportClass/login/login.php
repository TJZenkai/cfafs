<?php
include("../database.php");

	
	$username = getUsername();
	$password = getPassword();
	$hostname = "localhost";//getHostname();
	$dataName = getDataname();
	
	
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	
	$selected = mysql_select_db($dataName, $dbhandle);
	
	$myusername = $_POST['email'];
	$mypassword = $_POST['pass'];
	
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	
	$query = "SELECT * FROM users WHERE Username='$myusername' and Password='$mypassword'";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);
	
	mysql_close();
	
	if($count==1){
		$seconds = 5 + time();
		setcookie(loggedin, date("F jS - g:i a"), $seconds);
		header("location:../../indexLoggedIn.php");
	}else{
		echo 'Incorrect Username or Password';
	}
?>