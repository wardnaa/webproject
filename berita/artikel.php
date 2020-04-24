<?php
require_once("../admin/db_connect.php");
$databses = new databases;
$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
// $number = mysqli_real_escape_string($databses,$id);
if(! is_numeric($id)) {
    header("Location:../404.php");
}else {
    $value = $databses->koneksi->query("SELECT * FROM tb_berita WHERE id_berita='$id' LIMIT 1");
    $hasil = mysqli_fetch_array($value);
}
error_reporting(0);
ini_set('display_errors', 0);
?>



<html>
    <head>
        <title>ARTIKEL BERITA</title>
    </head>
        <center><h1><?= $hasil['judul_berita'];?></h1></center>
        <br><hr>
       <center><img width="250" height="280" src="../img/berita/<?= $hasil['image_berita'];?>" ></center>
        <center><p>
        <?= $hasil['isi_berita'];?>
        </p>
        </center>


<body>
 
</body>
</html>