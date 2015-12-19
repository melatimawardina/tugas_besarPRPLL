<?php
include "lock.php";
include "koneksi.php";
$no = mysql_fetch_array(mysql_query("SELECT MAX(nomor_ID) AS max FROM santri"));
$last = $no['max'] + 1;
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
<form action="simpan_santri.php" method="POST" >
  <table width="703" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="703" height="665" bgcolor="#ffcc99"><h1><strong>Sistem Informasi Pendataan Hafalan <em>Al-Qur'an</em></strong>
        </p></h1>
        <p>Tambah Biodata Santri</p>
        <table width="327" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="130">Nomor ID</td>
            <td width="15">&nbsp;</td>
            <td width="182"><p>
              <input type="text" name="nomor_ID" id="nomor_ID" value="<?php echo $last; ?>" />
            </p></td>
            <td width="182">&nbsp;</td>
          </tr>
          <tr>
            <td>Nama Depan</td>
            <td>&nbsp;</td>
            <td><p>
              <input type="text" name="nama_depan" id="nama_depan" />
            </p></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Nama Belakang</td>
            <td>&nbsp;</td>
            <td><p>
              <input type="text" name="nama_belakang" id="nama_belakang" />
            </p></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>&nbsp;</td>
            <td><input type="radio" name="JK" value="Laki-Laki" id="JK_0" />
Laki-Laki
  <input type="radio" name="JK" value="Perempuan" id="JK_1" />
  Perempuan</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Tempat Lahir</td>
            <td>&nbsp;</td>
            <td><p>
              <input type="text" name="tempat_lahir" id="tempat_lahir" />
            </p></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td>&nbsp;</td>
            <td><p>
              <input type="text" name="tanggal_lahir" id="tanggal_lahir" />
            </p></td>
            <td>tttt/bb/hh</td>
          </tr>
          <tr>
            <td>Nama Ayah</td>
            <td>&nbsp;</td>
            <td><p>
              <input type="text" name="nama_ayah" id="nama_ayah" />
            </p></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Nama Ibu</td>
            <td>&nbsp;</td>
            <td><p>
              <input type="text" name="nama_ibu" id="nama_ibu" />
            </p></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>&nbsp;</td>
            <td><p>
              <input type="text" name="alamat" id="alamat" />
            </p></td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <table width="172" border="0" align="center">
          <tr>
            <td width="59"><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
            <td width="103" align="right" action="biodata_siswa"><button type="button" onclick="window.location='biodata_siswa.php'">Batal</button></td>
          </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>
    <label for="nomor_ID"></label>
  </p>
</form>
</body>
</html>
