<?php
  session_start();
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
      //echo '<script>prompt(1)</script>';
      header("location: home.php");
    exit;
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>ArumBakery Sign-up</title>
        <link rel="stylesheet" href="style-signup.css">
    </head>
    <body>
        <div class="login-box">
            <div class="judul">
                <h2>ArumBakery Sign-up</h2>
            </div>
            <div class="logininput">
                <form id="daftar" name="daftar" method="post" onsubmit="return validasiForm()">
                    <label><div class="jdl">Nama :</div>
                        <input type="text" placeholder=" nama">
                    </label><br>
                    <label><div class="jdl">Username :</div>
                        <input type="text"
                        name="username"
                        placeholder=" username"
                        pattern=".{4,}"
                        title="Username harus terdiri minimal 4 karakter">
                    </label><br>
                    <label><div class="jdl">Email :</div>
                        <input type="email"
                        id="email"
                        name="email"
                        placeholder=" email"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    </label><br>
                    <label><div class="jdl">Password :</div>
                        <input type="password"
                        id="pwd"
                        name="password"
                        placeholder=" password"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                    </label><br>
                    <div id="message">
                        <h4>Password must contain the following:</h4>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">
                          A <b>capital (uppercase)</b> letter
                        </p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                      </div>
                    <div class="kirim">
                        <input type="submit" value="Sign-up">
                    </div><br>
                    <p style="font-family: Calibri;">Already have account? <a style="text-decoration: none;" href="login.html">Login here</a></p>
                </form>
            </div>
        </div>
        <script src="aut.js"></script>
    </body>
</html>