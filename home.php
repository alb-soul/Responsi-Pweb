<?php
    session_start();

    

    if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == false) {
        header("location: login.php");
        exit;
    }
    if ($_SESSION["username"]=="admin") {
        header("location: homeadmin.php");
    }
      
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>ArumBakery</title>
        <link rel="stylesheet" href="style-home.css">
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
                    <li><a href="logout.php" style="color: rgb(253, 98, 98);"><b>Logout</b></a></li>
                </ul>
            </nav>
        </div>
        <main>
            <div style="color: white; font-size: 20px; margin-left: 60px; margin-bottom: 20px; border-radius: 6px; font-family: Arial; font-weight: bold; background-color: #0d71c4; width: fit-content; padding: 10px">Hello! <?php echo $_SESSION["username"]?></div>
            <form name="memesan" action="proses-pesanan.php" method="post">
                <div class="card">
                    <div class="nm_roti">
                        <h2>Roti Tawar</h2>
                    </div>
                    <div class="desc">
                        <figure><img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2021/11/07/fotojet-11-1jpg-20211107052035.jpg"></figure>
                    </div>
                    <div class="ket">
                        <p>Rp20.000,-<br>Roti tawar putih dan roti tawar beras yang mengandung susu.</p>
                        <label>
                            <div class="pesan">
                                Pesan roti?
                            </div>
                            <div class="container">
                                <input id="check" name="check" type="checkbox" value="Roti Tawar">
                                <span class="checkmark"></span>
                                <span class="jmlnya">Jumlah</span>
                                <input id="jml" name="jml" class="jml" type="number" min="0" placeholder="0" disabled="disabled">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="card">
                    <div class="nm_roti">
                        <h2>Gembong Isi Coklat</h2>
                    </div>
                    <div class="desc">
                        <figure><img src="https://cdn0-production-images-kly.akamaized.net/J4GXMv6D_qObmilkwpb1c2mBNqo=/0x0:1000x563/1200x675/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3653759/original/046108000_1638766318-shutterstock_1959431266.jpg"></figure>
                    </div>
                    <div class="ket">
                        <p>Rp32.000,-<br>Gembong isi coklat kukus. Mengandung gula jawa.</p>
                        <label>
                            <div class="pesan">
                                Pesan roti?
                            </div>
                            <div class="container">
                                <input id="check1" name="check1" type="checkbox" value="Gembong Isi Coklat">
                                <span class="checkmark"></span>
                                <span class="jmlnya">Jumlah</span>
                                <input id="jml1" name="jml1" class="jml" type="number" min="0" placeholder="0" disabled="disabled">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="card">
                    <div class="nm_roti">
                        <h2>Roti Beras Coklat</h2>
                    </div>
                    <div class="desc">
                        <figure><img src="https://ds393qgzrxwzn.cloudfront.net/resize/c500x500/cat1/img/images/0/MtKxLvlFqE.jpg"></figure>
                    </div>
                    <div class="ket">
                        <p>Rp22.000,-<br>Roti beras coklat yang gurih, mengandung gula jawa.</p>
                        <label>
                            <div class="pesan">
                                Pesan roti?
                            </div>
                            <div class="container">
                                <input id="check2" name="check2" type="checkbox" value="Roti Beras Coklat">
                                <span class="checkmark"></span>
                                <span class="jmlnya">Jumlah</span>
                                <input id="jml2" name="jml2" class="jml" type="number" min="0" placeholder="0" disabled="disabled">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="card">
                    <div class="nm_roti">
                        <h2>Pizza Mini</h2>
                    </div>
                    <div class="desc">
                        <figure><img src="http://www.tokomesin.com/wp-content/uploads/2017/10/pizza-mini-empuk-tokomesin.jpg"></figure>
                    </div>
                    <div class="ket">
                        <p>Rp28.000,-<br>Pizza lezat dengan ukuran mini cocok untuk mengganjal lapar</p>
                        <label>
                            <div class="pesan">
                                Pesan roti?
                            </div>
                            <div class="container">
                                <input id="check3" name="check3" type="checkbox" value="Pizza Mini">
                                <span class="checkmark"></span>
                                <span class="jmlnya">Jumlah</span>
                                <input id="jml3" name="jml3" class="jml" type="number" min="0" placeholder="0" disabled="disabled">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="card">
                    <div class="nm_roti">
                        <h2>Donat Seres Coklat</h2>
                    </div>
                    <div class="desc">
                        <figure><img src="https://sweetrip.id/wp-content/uploads/2022/01/resepdonaat_125302437_771151533464423_2344791246737745250_n.jpg"></figure>
                    </div>
                    <div class="ket">
                        <p>Rp25.000,-<br>Donat lembut dengan campuran kentang + seres coklat</p>
                        <label>
                            <div class="pesan">
                                Pesan roti?
                            </div>
                            <div class="container">
                                <input id="check4" name="check4" type="checkbox" value="Donat Seres Coklat">
                                <span class="checkmark"></span>
                                <span class="jmlnya">Jumlah</span>
                                <input id="jml4" name="jml4" class="jml" type="number" min="0" placeholder="0" disabled="disabled">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="card">
                    <div class="nm_roti">
                        <h2>Bolu Keju</h2>
                    </div>
                    <div class="desc">
                        <figure><img src="https://asset.kompas.com/crops/-NkmtGdzUleauvRzXgD3vkE_xKU=/0x2212:4000x4879/780x390/data/photo/2020/07/09/5f0694272fc0e.jpg"></figure>
                    </div>
                    <div class="ket">
                        <p>Rp37.000,-<br>Kue bolu susu keju dengan krim rasa blueberi</p>
                        <label>
                            <div class="pesan">
                                Pesan roti?
                            </div>
                            <div class="container">
                                <input id="check5" name="check5" type="checkbox" value="Bolu Keju">
                                <span class="checkmark"></span>
                                <span class="jmlnya">Jumlah</span>
                                <input id="jml5" name="jml5" class="jml" type="number" min="0" placeholder="0" disabled="disabled">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="card">
                    <div class="nm_roti">
                        <h2>Roti Panggang Gula</h2>
                    </div>
                    <div class="desc">
                        <figure><img src="https://cdn0-production-images-kly.akamaized.net/jZIjGFb_m0VLsYr2HxuZE7q7xqE=/1x16:1000x579/469x260/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3418629/original/067794800_1617425603-shutterstock_1871665009__1_.jpg"></figure>
                    </div>
                    <div class="ket">
                        <p>Rp21.000,-<br>Roti panggang gula. Gurih dengan kematangan merata.</p>
                        <label>
                            <div class="pesan">
                                Pesan roti?
                            </div>
                            <div class="container">
                                <input id="check6" name="check6" type="checkbox" value="Roti Panggang Gula">
                                <span class="checkmark"></span>
                                <span class="jmlnya">Jumlah</span>
                                <input id="jml6" name="jml6" class="jml" type="number" min="0" placeholder="0" disabled="disabled">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="card">
                    <div class="nm_roti">
                        <h2>Bakpao Kacang</h2>
                    </div>
                    <div class="desc">
                        <figure><img src="https://cdn1-production-images-kly.akamaized.net/oRBGkQxASgHssKeR4rPWpYAO7Nc=/1200x1200/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3545874/original/019954700_1629432189-BAKPAOKOE_Bukukan_Penjualan_Lebih_dari_1000_buah_Dalam_Waktu_Dua_Bulan.jpg"></figure>
                    </div>
                    <div class="ket">
                        <p>Rp24.000,-<br>Bakpao putih isi kacang dan susu krim.</p>
                        <label>
                            <div class="pesan">
                                Pesan roti?
                            </div>
                            <div class="container">
                                <input id="check7" name="check7" type="checkbox" value="Bakpao Kacang">
                                <span class="checkmark"></span>
                                <span class="jmlnya">Jumlah</span>
                                <input id="jml7" name="jml7" class="jml" type="number" min="0" placeholder="0" disabled="disabled">
                            </div>
                        </label>
                    </div>
                </div>
                <div id="lokasi" style="margin-top: 30px;">
                    <h3 style="margin-bottom: 6px;">Masukkan alamat pengiriman :</h3>
                    <textarea id="alamat" name="alamat" placeholder=" Alamat pengiriman" rows="6" cols="40"></textarea>
                </div>
                <div class="kekeranjang">
                    <input type="submit" value="Pesan Sekarang" onclick="alert('Pesanan Anda akan diproses!');">
                </div>
            </form>
        </main>
        <footer>
            <div class="hakcipta">
                <p>Copyright &copy; 2022 - &#128153; Imamuddin Al Mustaqim (ArumBakery Owner)</p>
            </div>
        </footer>
        <script>
            //JQuery code for enable input if checkbox is checked
            $('#check').click(function() {
                if ($('#jml').is(':disabled')) {
                    $('#jml').removeAttr('disabled');
                }
                else {
                    $('#jml').attr('disabled', 'disabled');
                }
            });

            $('#check1').click(function() {
                if ($('#jml1').is(':disabled')) {
                    $('#jml1').removeAttr('disabled');
                }
                else {
                    $('#jml1').attr('disabled', 'disabled');
                }
            });

            $('#check2').click(function() {
                if ($('#jml2').is(':disabled')) {
                    $('#jml2').removeAttr('disabled');
                }
                else {
                    $('#jml2').attr('disabled', 'disabled');
                }
            });

            $('#check3').click(function() {
                if ($('#jml3').is(':disabled')) {
                    $('#jml3').removeAttr('disabled');
                }
                else {
                    $('#jml3').attr('disabled', 'disabled');
                }
            });

            $('#check4').click(function() {
                if ($('#jml4').is(':disabled')) {
                    $('#jml4').removeAttr('disabled');
                }
                else {
                    $('#jml4').attr('disabled', 'disabled');
                }
            });

            $('#check5').click(function() {
                if ($('#jml5').is(':disabled')) {
                    $('#jml5').removeAttr('disabled');
                }
                else {
                    $('#jml5').attr('disabled', 'disabled');
                }
            });

            $('#check6').click(function() {
                if ($('#jml6').is(':disabled')) {
                    $('#jml6').removeAttr('disabled');
                }
                else {
                    $('#jml6').attr('disabled', 'disabled');
                }
            });

            $('#check7').click(function() {
                if ($('#jml7').is(':disabled')) {
                    $('#jml7').removeAttr('disabled');
                }
                else {
                    $('#jml7').attr('disabled', 'disabled');
                }
            });
        </script>
    </body>
</html>