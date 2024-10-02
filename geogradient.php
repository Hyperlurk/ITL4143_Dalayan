<?php 
session_start();
include "config.php";
include "style.php";
$error ="";

if (!isset($_SESSION['errorcnt'])) {
  $_SESSION['errorcnt'] = 0;
}

if (isset($_POST['login'])) {
  if (!empty($_POST['uname']) && !empty($_POST['pass'])) {

    $_POST['uname'] = htmlspecialchars($_POST['uname']);
    $_POST['pass'] = htmlspecialchars($_POST['pass']);

    $Q = mysqli_query($con,"SELECT * FROM securedlogin WHERE username = '".$_POST['uname']."' AND password = '".$_POST['pass']."'");
    //$N = mysqli_num_rows($Q);//checking
    $A = mysqli_num_rows($Q);
    if ($A>0) {
      $J = mysqli_fetch_array($Q);

      /*echo "<script>alert('Hi, {$J['jason']}. you are now logged in.')</script>";
      echo "<script>window.location.href='homepage.php'</script>";*/

      if ($J['activation'] == 'act') {
        include "config.php";
        $_SESSION['loggedin'] = "Active";
        $_SESSION['username'] = $J['username'];
        echo "<script>alert('Hi, {$J['username']}. you are now logged in.')</script>";
        echo "<script>window.location.href='home.php'</script>";
        
        mysqli_close($con);
      }
      elseif ($J['activation'] == 'deact') {
        echo "<script>alert('your acc is banned.')</script>";
      }
      else{
        $error = "account does not exist";
      }
    }
    else{
      $error = "Student/Employee or password is incorrect!";
      $_SESSION['errorcnt']++;
    }
  }
  else{
    $error = "Pls Fill out empty login!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
     .error{
      color: red;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <form action="" method="post">

                <label for="username">Username</label>
                <input type="text" name="uname">

                <label for="username">Password</label>
                <input type="password" name="pass">

<?php
      if ($_SESSION['errorcnt'] >= 10) { //check if tries 
    ?>
      <div class="input-submit">
        <input type="submit" class="submit-btn" id="submit" name="login" value="login" disabled>
        <!--<label for="submit">Sign In</label>-->
      </div>
        <?php  
          echo "<p class='error'>Too many failed attempt. wait for 5 minutes.</p>";
        ?>
    
    <?php 
    }else{
    ?>
   
    
    

                <input type="submit" class="login" name="login" value="login">
                 <a href="signup.php" id="signup">Signup</a>
                <?php }  ?>
    <?php if ($error != "") {?>
      <p class="error"><?= $error ?></p>
    <?php } ?>

            </form>
        </div>
    </div>
</body>
</html>