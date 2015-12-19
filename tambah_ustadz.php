<?php
include "lock.php";
include "koneksi.php";
$no = mysql_fetch_array(mysql_query("SELECT MAX(user_id) AS max FROM ustadz"));
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
<form action="simpan_ustadz.php" method="POST" >
  <table width="816" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="621" height="539" bgcolor="#ffcc99"><p><strong><h1>Sistem Informasi Pendataan Hafalan <em>Al-Qur'an</em></p></h1>
        <p>Tambah Biodata Ustadz</p>
        <table width="429" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="153">User ID</td>
            <td width="38">&nbsp;</td>
            <td width="238"><p>
              <input type="text" name="user_id" id="user_id" value="<?php echo $last; ?>" />
            </p></td>
          </tr>
          <tr>
            <td>Nama Depan</td>
            <td>&nbsp;</td>
            <td><p>
              <input type="text" name="nama_depan" id="nama_depan" />
            </p></td>
          </tr>
          <tr>
            <td>Nama Belakang</td>
            <td>&nbsp;</td>
            <td><p>
              <input type="text" name="nama_belakang" id="nama_belakang" />
            </p></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>&nbsp;</td>
            <td><input type="radio" name="JK" value="Laki-Laki" id="JK_0" />
Laki-Laki
  <input type="radio" name="JK" value="Perempuan" id="JK_1" />
  Perempuan</td>
          </tr>
          <tr>
            <td>Tempat Lahir</td>
            <td>&nbsp;</td>
            <td><p>
              <input type="text" name="tempat_lahir" id="tempat_lahir" />
            tttt/bb/hh</p></td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td>&nbsp;</td>
            <td><p>
              <input type="text" name="tanggal_lahir" id="tanggal_lahir" />
            </p></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>&nbsp;</td>
            <td><p>
              <input type="text" name="alamat" id="alamat" />
            </p></td>
          </tr>
        </table>
        <table width="172" border="0" align="center">
          <tr>
            <td width="59"><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
            <td width="103" align="right" action="biodata_ustadz"><button type="button" onclick="window.location='biodata_siswa.php'">Batal</button></td>
          </tr>
      </table>
      <p>&nbsp;</p>
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
