<?php 
session_start();
$session = session_id();
include("admin/db_connect.php");
$databases = new databases();

// $jejak = $databases->koneksi->query("DELETE FROM tb_session WHERE sesi='$session'");
// return $jejak;

$offline = $databases->offline($session);
// return $offline;
session_unset();
session_destroy();
header('location:login.php');

// 
// setcookie('username', '', 0, '/');
// setcookie('nama', '', 0, '/');
// header('location:login.php');
?>
