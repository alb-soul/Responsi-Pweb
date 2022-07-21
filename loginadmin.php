<?php
  session_start();

  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    if ($_SESSION["username"] === "admin") {
        header("location: homeadmin.php");
        exit;
    }
    else {
        header("location: home.php");
        exit;
    }
  }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>ArumBakery Admin Login</title>
        <link rel="stylesheet" href="style-admin-login.css">
    </head>
    <body>
        <div class="login-box">
            <div class="judul">
                <h2>ArumBakery Admin Login</h2>
            </div>
            <div class="logininput">
                <form  id="logininput" action="loginproses.php" method="post">
                    <label><div class="jdl">Admin Username :</div>
                        <input name="username" type="text" placeholder=" username">
                    </label><br>
                    <label><div class="jdl">Admin Password :</div>
                        <input name="password" type="password" placeholder=" password">
                    </label>
                    <div class="kirim">
                        <input type="submit" value="Login">
                    </div><br>
                    <p style="font-family: Calibri;">Login as buyer? <a style="text-decoration: none;" href="login.php">Login here</a></p>
                </form>
            </div>
        </div>
        
    </body>
</html>