<?php  


session_start();

$site_key = $_ENV['SITE_KEY'];
	$secret_key = $_ENV['SECRET_KEY'];

include "config.php";
include "style.php";
include "environment.php";
if (isset($_POST['register'])) {
	$duplicate = mysqli_query($con, "SELECT * FROM securedlogin where username = '".$_POST['uname']."'");

	

	if (mysqli_num_rows($duplicate) > 0) {

		echo "<script>alert('Username or Email has already taken')</script>";
		/*$fname = $_POST['fname'];
		$uname = $_POST['uname'];
		$mail = $_POST['mail'];
		$pass = $_POST['pass'];
		$cpass	= $_POST['cpass'];
		$utype = $_POST['utype'];*/
	}	
	else{
		if($_POST['pass']!==$_POST['conpass']){
			echo "<script>alert('Password does not match')</script>";
		}
		else if (!empty($_POST['uname']) && !empty($_POST['pass'])) {
			//$newpass= password_hash($_POST['pass'], PASSWORD_DEFAULT);

			$query = mysqli_query($con, "INSERT INTO securedlogin (username, password) VALUES('".$_POST['uname']."' , '".$_POST['pass']."')");
			echo "<script>alert('Registration Successful')</script>";
			echo "<script>window.location.href='LoginHere'</script>";

		}
		else{
			echo "<script>alert('Pls fill out empty registration')</script>";
		}

	}
}

?>

<?php 

$reponse = $_POST['g-recaptcha-response'];
	$payload = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$response.);
	$result =json_decode($payload, TRUE);
	if($result['success']!=1){
		echo "you are bot";
		return false;
	}
	echo "THank you";

	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

	<div class="container">
        <div class="login-form">
            <form action="" method="post">

                <label for="username">Username</label>
                <input type="text" name="uname">

                <label for="password">Password</label>
                <input type="password" name="pass">

                <label for="confirm">Confirm Password</label>
                <input type="password" name="conpass">

                <input type="submit" class="login" name="register" value="register">
                
                 <div class="g-recaptcha" data-callback='captchaVerified' data-sitekey=<?php echo $site_key; ?>></div>
      

            </form>
        </div>
    </div>

    <script>
    	function captchaVerified(){
    		var submitBtn = document.querySelector('#submit');
    		submitBtn.removeAttribute('disabled');
    	}
    </script>


    <script type="script.js"></script>
</body>
</html>