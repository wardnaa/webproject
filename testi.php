<?php

// require_once("admin/db_connect.php");
// $databases = new databases();

// $username = "admin";
// $password = "admin123";
// $remember = FALSE;
// echo "hello world";
// echo "sessions = ".$_SESSION['username'];


session_start();
require_once("admin/db_connect.php");

// $session = session_id();
// $waktu = time();
// $username = 'saominovelia'; // timer session valid 10 menit


// $databases = new databases();
// $user = $databases->loaduser();
$admin = "wardana";
$admin1 = "waa";

if ($admin == $admin1) {
    echo "value sama";
}else {
    echo "error";
}

// echo $user;
// $cheking = $databases->koneksi->query("SELECT * FROM tb_session WHERE sesi='$session' AND username='$username'");
// $result = mysqli_num_rows($cheking);

// if ($result == "0") {
//    $insert = $databases->koneksi->query("INSERT INTO tb_session VALUES ('$session','$username')"); 
//    return $insert;
// }else {
//     $total = $databases->koneksi->query("SELECT * FROM tb_session");
//     $hasil = mysqli_num_rows($total);
//     echo " jumblah user online : ". $hasil;
// }


// $sesi = session_id();
// $waktu = time();
// $timer = $waktu-600;

// if ($databases->loginadmin($username,$password,$remember)) {
//     echo "login";
// }else {
//     echo "failed";
// }
// $hubungan = $databases->koneksi->query("SELECT * FROM `tb_users` WHERE username='$username'");
// $row = mysqli_fetch_assoc($hubungan);
// // $hasil = $hubungan->fetch_array();

// var_dump($row);

// echo "jabatab : " . $row['jabatan']; 
// var_dump($hubungan);
// if ($hasil['jabatan']=="publisher") {
//     echo "hallo editor";
// }
?>
