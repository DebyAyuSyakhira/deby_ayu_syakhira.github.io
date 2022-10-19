<?php
require 'koneksi.php';

if (isset($_POST["tambah"])) {
    $nama = htmlspecialchars($_POST["id"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $tglmasuk = htmlspecialchars($_POST["tglmasuk"]);
    $expired = htmlspecialchars($_POST["expired"]);
    $berat = htmlspecialchars($_POST["berat"]);
    $jenis = htmlspecialchars($_POST["jenis"]);

    $sql = "INSERT INTO barang VALUES ('', '$nama', '$tglmasuk', '$expired',  '$berat',  '$jenis')";

    $result = mysqli_query($conn, $sql);

    if ( $result ) {
        echo"
            <script>
                alert('Berhasil! Data Telah Disimpan.');
                document.location.href = 'lihatdata.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Gagal! Terjadi Kesalah.');
                document.location.href = 'inputdata.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO BUAH DHARMASRAYA</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>   
</head>
<body>
<nav class="header">
        <ul>
            <div class="header-text">
                <a href="#">Toko Buah Dharmasraya</a></li>
            </div>
            <li><a href="halaman_admin.php">Home</a></li>
            <li><a href="inputdata.php">Input Data</a></li>
            <li><a href="lihatdata.php">Data Barang</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li>
                <a href="#" class="tampilan">
                <button class="tombol-terang" onclick="ubahwarna()">Lightmode</button>
                <button class="tombol-gelap" onclick="ubahwarna()">Darkmode</button></a>
            </li>
            <script src="javascript.js"></script>
        </ul>
    </nav>
    <div class ="databarang">
        <center><h1>Input Data Buah</h1><center><br>
        <form action="" method="post">
            <!-- <section class="table-barang"> -->
                <div class="kol">
                    <label for="id">ID : </label>
                    <input type="number" name="id" required><br><br>
                </div>
                <div class="kol">
                    <label for="nama">Nama Buah : </label>
                    <input type="text" name="nama" required><br><br>
                </div>
                <div class="kol">
                    <label for="tglmasuk">Tanggal Masuk : </label>
                    <input type="date" name="tglmasuk" required><br><br>
                </div>
                <div class="kol">
                    <label for="expired">Tanggal Kedaluwarsa : </label>
                    <input type="date" name="expired" required><br><br>
                </div>
                <div class="kol">
                    <label for="berat">Berat : </label>
                    <input type="number" name="berat" required><br><br>
                </div>
                <div class="kol">
                    <label for="jenis">Jenis : </label>
                    <input type="radio" name="jenis" value="lokal"> Lokal
                    <input type="radio" name="jenis" value="import"> Import<br><br>
                </div>
                <div class="kol">
                    <button type="submit" name="tambah">Tambah</button>
                </div>
        </form>
    </div>
    <footer>
        <p>Terimakasih Telah Mengunjungi Toko Kami</p>
        <p>Jangan lupa untuk Berbelanja lagi di Toko Dharmasraya
        <br>Contact US</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <img alt="kaki-logo" class="kaki-logo" src="img/logo.png"> 
    </footer>
</body>
</html>