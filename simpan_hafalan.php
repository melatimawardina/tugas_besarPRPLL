<?php
include "koneksi.php";
include "lock.php";
$nomor_ID = $_POST ['nomor_ID'];
$tanggal_setor = $_POST ['tanggal_setor'];
$juz_ke = $_POST ['juz_ke'];
$nama_surat = $_POST ['nama_surat'];
$dari_ayat_ke= $_POST ['dari_ayat_ke'];
$sampai_ayat_ke = $_POST ['sampai_ayat_ke'];
$user_id = $_POST ['user_id'];
$keterangan = $_POST ['keterangan'];

//echo "<pre>".print_r($_POST,true)."</pre>";

$simpan = mysql_query ("insert into hafalan(nomor_ID, tanggal_setor, juz_ke, nama_surat, dari_ayat_ke, sampai_ayat_ke, user_id, keterangan) values ('$nomor_ID','$tanggal_setor', '$juz_ke', '$nama_surat', '$dari_ayat_ke', '$sampai_ayat_ke', '$user_id', '$keterangan')");

if ($simpan) {
	echo "<script>
		alert('Data Berhasil di Simpan');
		window.location = 'hafalan.php';
		</script>";
}
else {
	echo "<script>
		alert('Data Gagal di Simpan');
		window.location = 'tambah_hafalan2.php';
		</script>";
}
?>