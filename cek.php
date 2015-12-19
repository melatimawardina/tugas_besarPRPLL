<?php
include "koneksi.php";
$id = $_GET['id'];
$u = mysql_fetch_array(mysql_query("SELECT nama_depan FROM santri WHERE nomor_ID = '$id'"));

echo $u['nama_depan'];
//echo "SELECT nama_depan FROM santri WHERE nomor_ID = '$id'";
?>