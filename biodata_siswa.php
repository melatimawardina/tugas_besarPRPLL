<?php
include "lock.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #FFFFFF;
}
</style>
</head>

<body>
<table width="1000" height="665" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="959" bgcolor="#FFCC99"><strong><h1>Sistem Informasi Pendataan Hafalan <em>Al-Qur'an </em></h1>
    </strong>
      <table align="center" width="990" border="0" cellpadding="0" cellspacing="0">
        <tr>
        <td width="883" rowspan="2">&nbsp;</td>
        <td width="107"><form id="form1" name="form1" method="post" action="halaman_utama.php">
          <input type="submit" name="halaman_utama" id="halaman_utama" value="Halaman Utama" />
        </form></td>
      </tr>
      <tr>
        <td><form id="form3" name="form3" method="post" action="laporan/cetak_santri.php">
          <input type="submit" name="cetak_santri" id="cetak_santri" value="Cetak" />
        </form></td>
      </tr>
      <tr>
        <td rowspan="5">
		<table align="center" border="2">
<tr>
	<td align="center" width="68" bgcolor="#FFFFFF">Nomor_ID</td>
	<td align="center" width="81" bgcolor="#FFFFFF">Nama Depan</td>
	<td align="center" width="97" bgcolor="#FFFFFF">Nama Belakang</td>
    <td align="center" width="83" bgcolor="#FFFFFF">Jenis Kelamin</td>
    <td align="center" width="106" bgcolor="#FFFFFF">Tempat Lahir</td>
    <td align="center" width="89" bgcolor="#FFFFFF">Tanggal Lahir</td>
    <td align="center" width="41" bgcolor="#FFFFFF">Nama Ayah</td>
    <td align="center" width="61" bgcolor="#FFFFFF">Nama Ibu</td>
	<td align="center" width="96" bgcolor="#FFFFFF">Alamat</td>
	<td align="center" width="88" bgcolor="#FFFFFF" colspan="2">Action</td>
</tr>
		<?php
	include "koneksi.php";
	$cari=mysql_query("select *from santri");
	while($a=mysql_fetch_array($cari)){
		echo"
		<tr>
			<td>$a[nomor_ID]</td>
			<td>$a[nama_depan]</td>
			<td>$a[nama_belakang]</td>
			<td>$a[JK]</td>
			<td>$a[tempat_lahir]</td>
			<td>$a[tanggal_lahir]</td>
			<td>$a[nama_ayah]</td>
			<td>$a[nama_ibu]</td>
			<td>$a[alamat]</td>
			<td><a href ='ubah_santri.php?id=$a[nomor_ID]'>Ubah</td>
			<td><a href ='hapus.php?id=$a[nomor_ID]'>Hapus</td>
		</tr>";
	}

?>
</table>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
        <td height="50" valign="bottom">&nbsp;</td>
      </tr>
      <tr>
        <td><form id="form2" name="form2" method="post" action="tambah_santri.php">
          <p>
            <input type="submit" name="tambah" id="tambah" value="Tambah" />
          </p>
        </form></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
        </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
