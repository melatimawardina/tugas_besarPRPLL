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
<table width="1000" height="665" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1000" bgcolor="#FFFF99"><p><strong><h1> Sistem Informasi Pendataan Hafalan <em>Al-Qur'an</em> </strong></p></h1>
      <table width="958" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="958" align="right"><form id="form4" name="form4" method="post" action="halaman_utama.php">
            <p>
              <input type="submit" name="halaman_utama" id="halaman_utama" value="Halaman Utama" />
            </p>
          </form></td>
        </tr>
      </table>
      <table width="916" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
        <td width="15">&nbsp;</td><td width="838" rowspan="5">
		<table width="833" border="2" align="center">
<tr>
	<td align="center" width="73" bgcolor="#FFFFFF">Nomor_ID</td>
	<td align="center" width="129" bgcolor="#FFFFFF">Tanggal Setor</td>
	<td align="center" width="46" bgcolor="#FFFFFF">Juz ke</td>
    <td align="center" width="109" bgcolor="#FFFFFF">Nama Surat</td>
    <td align="center" width="128" bgcolor="#FFFFFF">Dari Ayat ke</td>
    <td align="center" width="121" bgcolor="#FFFFFF">Sampai Ayat ke</td>
    <td align="center" width="54" bgcolor="#FFFFFF">User ID</td>
    
	<td align="center" width="70" bgcolor="#FFFFFF">Keterangan</td>
	<td align="center" width="43" bgcolor="#FFFFFF" colspan="2">Action</td>
</tr>
		<?php
	include "koneksi.php";
	$cari=mysql_query("select *from hafalan");
	while($a=mysql_fetch_array($cari)){
		echo"
		<tr>
			<td>$a[nomor_ID]</td>
			<td>$a[tanggal_setor]</td>
			<td>$a[juz_ke]</td>
			<td>$a[nama_surat]</td>
			<td>$a[dari_ayat_ke]</td>
			<td>$a[sampai_ayat_ke]</td>
			<td>$a[user_id]</td>
			<td>$a[keterangan]</td>
			<td><a href ='ubah_hafalan.php?id=$a[nomor_ID]'>Ubah</td>
			<td><a href ='hapus_hafalan.php?id=$a[nomor_ID]'>Hapus</td>
		</tr>";
	}

?>
</table>        
        <td width="63">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><form id="form1" name="form1" method="post" action="tambah_hafalan.php">
          <p>
            <input type="submit" name="tambah" id="tambah" value="Tambah" />
          </p>
        </form></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><form id="form2" name="form2" method="post" action="ubah_hafalan.php">
          <p>&nbsp;</p>
        </form></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><form id="form3" name="form3" method="post" action="hapus.php">
          <p>&nbsp;</p>
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
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
