<?php 

session_start();
include "style.php";
//include "script.js";
//session_start();

date_default_timezone_set('Asia/Manila');
//store current timestamp
$_SESSION['reportdate'] = date("Y-m-d H:i:s");
  
//test if session logged in is set
if (!isset($_SESSION['loggedin'])) {
	echo "<script>alert('You need to login first!')</script>";
	echo "<script>window.location.href='LoginHere'</script>";
	}

if (isset($_POST['logout'])) {
	unset($_SESSION['loggedin']);
	unset($_SESSION['username']);
	echo "<script>alert('you are logged out')</script>";
	echo "<script>window.location.href='LoginHere'</script>";
	session_destroy();
}




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div class="container2">
		<div class="centered-content">
			<form action="" method="post">
				<h1>Home Page.</h1>
				<input type="submit" class="login" name="logout" value="logout">
			</form>
		</div>
	</div>
</body>
</html>