<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == false) {
        header("location: login.php");
        exit;
    }

    if ($_SESSION["username"]!="admin") {
        header("location: home.php");
    }

    $fp = fopen("pesanan.txt", "r");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ArumBakery Store - Pesanan</title>
    <link rel="stylesheet" href="style-pesanan.css">
</head>
<body>
    <div class="header">
        <h1 class="judul" align="center">ArumBakery Store</h1>
    </div>
    <div class="nav">
            <nav>
                <ul>
                    <li><a href="homeadmin.php">Home</a></li>
                    <li><a href="logout.php" style="color: rgb(253, 98, 98);"><b>Logout</b></a></li>
                </ul>
            </nav>
        </div>
    <div class="title">
        <h4 class="title-pesan" style="margin-bottom: 14px;">Data Pesanan Roti</h4>
    </div>

    <table border="1" width="80%" style="margin: 0 auto;" class="tabelnya">
    

        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Username</th>
                <th>Alamat</th>
                <th>Nama Roti</th>
                <th>Harga Roti</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($isi = fgets($fp)): ?>
        <?php $data = explode('|', $isi) ?>
                
                <tr>
                    <td><?php echo $data[0] ?></td>
                    <td><?php echo $data[1] ?></td>
                    <td><?php echo $data[2] ?></td>
                    <td><?php echo $data[3] ?></td>
                    <td><?php echo $data[4] ?></td>
                    <td><?php echo $data[5] ?></td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>

</body>
</html>
