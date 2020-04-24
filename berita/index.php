<?php
require_once("../admin/db_connect.php");
$databses = new databases;

$value = $databses->koneksi->query("SELECT * FROM tb_berita")->fetch_all(MYSQLI_ASSOC);
?>


<html>
    <head>
        <title>TAB BERITA</title>
    </head>

<body>
    <center><h1>DAFTAR BERITA</h1></center>
    <br><hr>
    <?php foreach($value as $row): ?>
    <br>
    <h2><?= $row['judul_berita'];?></h6>
    <p><?= substr($row['isi_berita'], 0, 250)?>......</p>
    <a href="artikel.php?id=<?=$row['id_berita'];?>">Read More</a><br>
    <?php endforeach ?>
    <br><hr>
    <button><a href="makeberita.php">BUAT BERITA</button>
    
</body>
</html>