<?php
  session_start();

  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: home.php");
    exit;
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>ArumBakery Login</title>
        <link rel="stylesheet" href="style-login.css">
    </head>
    <body>
        <div class="login-box">
            <div class="judul">
                <h2>ArumBakery Login</h2>
            </div>
            <div class="logininput">
                <form id="logininput" action="loginproses.php" method="post">
                    <label><div class="jdl">Username :</div>
                        <input name="username" type="text" placeholder=" username">
                    </label><br>
                    <label><div class="jdl">Password :</div>
                        <input name="password" type="password" placeholder=" password">
                    </label>
                    <div class="kirim">
                        <input type="submit" value="Login">
                    </div><br>
                    <p style="font-family: Calibri;">Are you Admin? <a style="text-decoration: none;" href="loginadmin.php">Login here</a></p>
                    <p style="font-family: Calibri;">Don't have account? <a style="text-decoration: none;" href="signup.php">Register here</a></p>
                </form>
            </div>
        </div>
        
    </body>
</html>