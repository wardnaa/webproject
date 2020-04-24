<?php
require_once("../admin/db_connect.php");
$databases = new databases;

if(isset($_POST['upload'])) {
    $ekstensi_valid = array('png','jpg','jpeg');
    $image_berita = $_FILES['file']['name'];
    $x = explode('.', $image_berita);
    $ext = strtolower(end($x));
    $img_tmp = $_FILES['file']['tmp_name'];
    $judul_berita = $_POST['judul'];
    if(in_array($ext, $ekstensi_valid) == true ) {
        move_uploaded_file($img_tmp, '/opt/lampp/htdocs/kampus/img/berita/'.$image_berita);
    }else {
     echo '<script>alert("ESKTENSI FILE ILEGAL BRO!")</script>';
    }
    $judul_berita = $_POST['judul'];
    $isi_berita = $_POST['konten'];

    if($databases->Tambahberita($judul_berita,$isi_berita,$image_berita)) {
        echo '<script>alert("SUCCESS !")</script>';
    }

}

?>

<html>
    <head>
        <title>MEMBUAT BERITA</title>
    </head>

<body>
    <h1>membuat berita</h1>
    <form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" >
    <p> Masukan judul berita</p>
    <input type="text" name="judul" id="judul">
    <p>Masukan isi berita</p>
    <textarea name="konten" id="konten" cols="60" rows="10"></textarea>
    <br>
    <button type="submit" name="upload" id="upload">UPLOAD!</button>
    </form><br><hr>
    <button><a href="index.php">HALAMAN BERITA</a></button>
</body>
</html>