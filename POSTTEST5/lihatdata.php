<?php
require'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM barang");

$barang = [];

while ($row = mysqli_fetch_assoc($result)) {
    $barang[] = $row;
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
</style>
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
        <div class = box>
            <center><h1>Data Barang</h1><center><br>
            <div class="tbl-tambah">
                <a href="inputdata.php">Tambah Data</a>
            </div>
            <table border=1px>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>ID</th>
                        <th>Nama Buah</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Kedaluwarsa</th>
                        <th>Berat</th>
                        <th>Jenis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($barang AS $brg):?>
                    <tr>
                        <td><?php echo $i ;?></td>
                        <td><?php echo $brg["id"] ;?></td>
                        <td><?php echo $brg["nama"] ;?></td>
                        <td><?php echo $brg["tglmasuk"] ;?></td>
                        <td><?php echo $brg["expired"] ;?></td>
                        <td><?php echo $brg["berat"] ;?></td>
                        <td><?php echo $brg["jenis"] ;?></td>
                        <td>
                            <a href="editdata.php?id=<?php echo $brg["id"]; ?>">Edit</a> 
                            |<a href="delete.php?id=<?php echo $brg["id"]; ?>" onclick = "return confirm('And yakin ingin mengahpus data ini ?')">Hapus</a>
                        </td>
                        </tr>
                    <?php $i++; endforeach;?>
                </tbody>
            </table>
        </div>
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

