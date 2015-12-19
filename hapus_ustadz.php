<?php
include "koneksi.php";
include "lock.php";
$id = $_GET['id'];

$hapus = mysql_query("DELETE FROM ustadz WHERE user_id = '$id'");

if($hapus){
		echo "<script>
		alert('Data Berhasil di Hapus');
		window.location = 'biodata_ustadz.php';
		</script>";
	}else{
		echo "<script>
		alert('Data GAGAL di Hapus');
		window.location = 'biodata_ustadz.php';
		</script>";
	}
?>