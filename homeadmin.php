<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == false) {
        header("location: login.php");
        exit;
    }
    if ($_SESSION["username"]!="admin") {
        header("location: home.php");
    }
      
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>ArumBakery</title>
        <link rel="stylesheet" href="style-home-admin.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div class="judul">
                <h1>ArumBakery Store</h1><br>
                <p>Menjual Roti Enak dan Bergizi</p>
            </div>
        </header>
        <div class="nav">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="pesanan.php" style="color: greenyellow;">Cek Pesanan</a></li>
                    <li><a href="logout.php" style="color: rgb(253, 98, 98);"><b>Logout</b></a></li>
                </ul>
            </nav>
        </div>
        <main>
            <div class="adminspace">
                <h2>Hello Admin!</h2>
            </div>
        </main>
        <footer>
            <div class="hakcipta">
                <p>Copyright &copy; 2022 - &#128153; Imamuddin Al Mustaqim (ArumBakery Owner)</p>
            </div>
        </footer>
        <script src="tampil.js"></script>
    </body>
</html>