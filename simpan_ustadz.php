<?php
include "koneksi.php";
include "lock.php";
$user_id = $_POST ['user_id'];
$nama_depan = $_POST ['nama_depan'];
$nama_belakang = $_POST ['nama_belakang'];
$JK = $_POST ['JK'];
$tempat_lahir= $_POST ['tempat_lahir'];
$tanggal_lahir = $_POST ['tanggal_lahir'];
$alamat = $_POST ['alamat'];

//echo "<pre>".print_r($_POST,true)."</pre>";

$simpan = mysql_query ("insert into ustadz(user_id, nama_depan, nama_belakang, JK, tempat_lahir, tanggal_lahir,alamat) values ('$user_id','$nama_depan', '$nama_belakang', '$JK', '$tempat_lahir', '$tanggal_lahir','$alamat')");

if ($simpan) {
	echo "<script>
		alert('Data Berhasil di Simpan');
		window.location = 'biodata_ustadz.php';
		</script>";
}
else {
	echo "<script>
		alert('Data Gagal di Simpan');
		window.location = 'tambah_ustadz.php';
		</script>";
}
?>