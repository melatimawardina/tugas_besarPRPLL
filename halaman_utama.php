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
<table  width="900" height="665" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="687" bgcolor="#00CCCC"><p><strong><h1>Sistem Informasi Pendataan Hafalan <em>Al-Qur'an</em></p></h1>
      <table width="536" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="200"><img src="al-qur'an.jpg" width="200" height="200" alt="Al-Qur'an" /></td>
          <td colspan="2" align="right" valign="top">
            <input type="submit" name="ubah_password" id="ubah_password" value="Ganti Password" />
            <button type="button" onclick="window.location='logout.php'">Keluar</button>
          </td>
        </tr>
        <?php
		if($akses == 'admin'){
		?>
        <tr>
          <td rowspan="2">&nbsp;</td>
          <td width="137" height="44"><form id="form2" name="form2" method="post" action="biodata_siswa.php">
            <input type="submit" name="biodata_santri" id="biodata_santri" value="Biodata Santri" />
          </form></td>
          <td width="199"><form id="form3" name="form3" method="post" action="biodata_ustadz.php" >
            <input type="submit" name="biodata_ustadz" id="biodata_ustadz" value="Biodata Ustadz" />
          </form></td>
           <td><form id="form5" name="form5" method="post" action="laporan.php">
            <input type="submit" name="laporan" id="laporan" value="Laporan" />
          </form></td>
        </tr>
        
        <?php
		}
		?>
        <tr>
          <td height="64"><form id="form4" name="form4" method="post" action="hafalan.php">
            <input type="submit" name="hafalan_santri" id="hafalan_santri" value="Hafalan Santri" />
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
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
