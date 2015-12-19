<?php
include "koneksi.php";
$id = $_GET['user_id'];
$d = mysql_fetch_array(mysql_query("SELECT nama_depan FROM ustadz WHERE user_id = '$user_id'"));

echo $d['nama_depan'];
//echo "SELECT nama_depan FROM ustadz WHERE user_id = '$user_id'";
?>