<?php 
session_start();
require_once("db_connect.php");
$database = new databases();
$session = session_id();
$username = $_SESSION['username'];
$hancur = $database->offline($session,$username);
session_unset();
session_destroy();
setcookie('username', '', 0, '/');
setcookie('nama', '', 0, '/');
header('location:login.php');
?>
