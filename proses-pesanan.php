<?php
    session_start();
    $fp = fopen("pesanan.txt","w");

    $username = $_SESSION["username"];
    $tgl = date('y-m-d');
    $alamat = $_POST["alamat"];

    $nama_roti = array();
    $nama_roti[0] = 'Roti Tawar';
    $nama_roti[1] = 'Gembong Isi Coklat';
    $nama_roti[2] = 'Roti Beras Coklat';
    $nama_roti[3] = 'Pizza Mini';
    $nama_roti[4] = 'Donat Seres Coklat';
    $nama_roti[5] = 'Bolu Keju';
    $nama_roti[6] = 'Roti Panggang Gula';
    $nama_roti[7] = 'Bakpao Kacang';

    $cek_roti = array();
    $cek_roti[0] = $_POST['check']  == $nama_roti[0];
    $cek_roti[1] = $_POST['check1'] == $nama_roti[1];
    $cek_roti[2] = $_POST['check2'] == $nama_roti[2];
    $cek_roti[3] = $_POST['check3'] == $nama_roti[3];
    $cek_roti[4] = $_POST['check4'] == $nama_roti[4];
    $cek_roti[5] = $_POST['check5'] == $nama_roti[5];
    $cek_roti[6] = $_POST['check6'] == $nama_roti[6];
    $cek_roti[7] = $_POST['check7'] == $nama_roti[7];

    $harga = array();
    $harga[0] = 20000;
    $harga[1] = 32000;
    $harga[2] = 22000;
    $harga[3] = 28000;
    $harga[4] = 25000;
    $harga[5] = 37000;
    $harga[6] = 21000;
    $harga[7] = 24000;

    $jml = array();
    $jml[0] = $_POST['jml'];
    $jml[1] = $_POST['jml1'];
    $jml[2] = $_POST['jml2'];
    $jml[3] = $_POST['jml3'];
    $jml[4] = $_POST['jml4'];
    $jml[5] = $_POST['jml5'];
    $jml[6] = $_POST['jml6'];
    $jml[7] = $_POST['jml7'];

    $index = array();
    $j = 0;

    for ($i=0;$i<8;$i++) {
        if ($cek_roti[$i]) {
            $index[$j] = $i;
            fputs($fp,"$tgl|$username|$alamat|$nama_roti[$i]|Rp$harga[$i]|$jml[$i]\n");
            $j++;
        }
    }

    fclose($fp);

    header("location: home.php");

?>