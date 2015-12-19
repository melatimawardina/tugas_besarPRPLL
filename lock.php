<?php
include("koneksi.php");
session_start();
$user_check = $_SESSION['login_user'];

$ses_sql = mysql_query("SELECT*FROM login WHERE username = '$user_check'");

$row = mysql_fetch_array($ses_sql);
$login_session = $row['username'];
$akses = $row['akses'];

if(!isset($login_session)){
	header("location: login.php");
}
?>