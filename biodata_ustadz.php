<?php
include "lock.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="900" height="665" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FFCC99"><p><strong><h1>Sistem Informasi Pendataan Hafalan <em>Al-Qur'an</em></strong></p></h1>
    <p>&nbsp;</p>
    <table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="628">&nbsp;</td>
        <td width="152" align="right"><form id="form4" name="form4" method="post" action="halaman_utama.php">
          <input type="submit" name="halaman_utama" id="halaman_utama" value="Halaman Utama" />
        </form></td>
      </tr>
      <tr>
        <td rowspan="5">
		<table align="center" border="2">
<tr>
	<td align="center" width="68" bgcolor="#FFFFFF">User ID</td>
	<td align="center" width="81" bgcolor="#FFFFFF">Nama Depan</td>
	<td align="center" width="97" bgcolor="#FFFFFF">Nama Belakang</td>
    <td align="center" width="83" bgcolor="#FFFFFF">Jenis Kelamin</td>
    <td align="center" width="106" bgcolor="#FFFFFF">Tempat Lahir</td>
    <td align="center" width="89" bgcolor="#FFFFFF">Tanggal Lahir</td>
   
	<td align="center" width="96" bgcolor="#FFFFFF">Alamat</td>
	<td align="center" width="88" bgcolor="#FFFFFF" colspan="2">Action</td>
</tr>
		<?php
	include "koneksi.php";
	$cari=mysql_query("select *from ustadz");
	while($a=mysql_fetch_array($cari)){
		echo"
		<tr>
			<td>$a[user_id]</td>
			<td>$a[nama_depan]</td>
			<td>$a[nama_belakang]</td>
			<td>$a[JK]</td>
			<td>$a[tempat_lahir]</td>
			<td>$a[tanggal_lahir]</td>
			<td>$a[alamat]</td>
			<td><a href ='ubah_ustadz.php?id=$a[user_id]'>Ubah</td>
			<td><a href ='hapus_ustadz.php?id=$a[user_id]'>Hapus</td>
		</tr>";
	}

?>
</table>
        <td><form id="form1" name="form1" method="post" action="tambah_ustadz.php">
          <p>
            <input type="submit" name="tambah" id="tambah" value="Tambah" />
          </p>
        </form></td>
      </tr>
      <tr>
        <td><form id="form2" name="form2" method="post" action="ubah_santri.php">
          <p>&nbsp;</p>
        </form></td>
      </tr>
      <tr>
        <td><form id="form3" name="form3" method="post" action="laporan/cetak.php">
          <p>
            <input type="submit" name="cetak" id="cetak" value="Cetak" />
          </p>
        </form></td>
      </tr>
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
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
