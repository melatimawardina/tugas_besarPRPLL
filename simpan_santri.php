<?php
include "koneksi.php";
include "lock.php";
$nomor_ID = $_POST ['nomor_ID'];
$nama_depan = $_POST ['nama_depan'];
$nama_belakang = $_POST ['nama_belakang'];
$JK = $_POST ['JK'];
$tempat_lahir= $_POST ['tempat_lahir'];
$tanggal_lahir = $_POST ['tanggal_lahir'];
$nama_ayah = $_POST ['nama_ayah'];
$nama_ibu = $_POST ['nama_ibu'];
$alamat = $_POST ['alamat'];

//echo "<pre>".print_r($_POST,true)."</pre>";

$simpan = mysql_query ("insert into santri(nomor_ID, nama_depan, nama_belakang, JK, tempat_lahir, tanggal_lahir, nama_ayah, nama_ibu, alamat) values ('$nomor_ID','$nama_depan', '$nama_belakang', '$JK', '$tempat_lahir', '$tanggal_lahir', '$nama_ayah', '$nama_ibu', '$alamat')");

if ($simpan) {
	echo "<script>
		alert('Data Berhasil di Simpan');
		window.location = 'biodata_siswa.php';
		</script>";
}
else {
	echo "<script>
		alert('Data Gagal di Simpan');
		window.location = 'tambah.php';
		</script>";
}
?>