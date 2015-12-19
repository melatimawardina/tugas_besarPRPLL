<?php
include "lock.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script>
function cek(){
	id = $("#nomor_ID").val();
	$.ajax({
		url:"cek.php",
		data:"id="+id,
		cache:false,
		success:function(msg){		
			//masukan isi data ke masing - masing field
			$("#nama").val(msg);
			
			$("#tanggal_setor").focus();
		}
	});
}

</script>
</head>
<body>
<form id="form1" name="form1" method="post" action="simpan_hafalan.php">
  <table width="787" border="0" align="center">
    <tr>
      <td width="781" bgcolor="#ffff99"><p><h1>Sistem Informasi Pendataan Hafalan <em>Al-Qur'an </em></p></h1>
      <p>Tambah Hafalan Santri</p>
      <table width="609" border="0" align="center">
        <tr>
          <td width="84" height="40">nomor ID</td>
          <td width="194"><input type="text" name="nomor_ID" id="nomor_ID" /></td>
          <td width="57"><label for="nomor_id"></label><button type="button" onclick="cek()">Cek</button> &nbsp;</td>
          <td width="51">nama</td>
          <td width="153"><input type="text" name="nama" id="nama" /></td>
        </tr>
        <tr>
          <td height="34">Tanggal Setor</td>
          <td><input type="text" name="tanggal_setor" id="tanggal_setor" /></td>
          <td>tttt/bb/hh</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="38">Juz ke</td>
          <td><input type="text" name="juz_ke" id="juz_ke" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="39">Nama Surat</td>
          <td><input type="text" name="nama_surat" id="nama_surat" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="34">Dari ayat ke-</td>
          <td><input type="text" name="dari_ayat_ke" id="dari_ayat_ke" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="36">Sampai ayat ke-</td>
          <td><input type="text" name="sampai_ayat_ke" id="textfield" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="36">User ID</td>
          <td><input type="text" name="user_id" id="user_id" /></td>
         
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
        	<td>Keterangan</td>
          <td ><select name="keterangan" id="tamabah-text"><option value="0" selected>Pilih</option><option>baik</option>
          <option>cukup</option>
          <option>Kurang</option>
          </select></td>
          <td></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="39">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <table width="401" border="0" align="right">
        <tr>
          <td width="102"><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
           <td width="88" align="left" action="biodata_siswa"><button type="button" onclick="window.location='biodata_siswa.php'">Batal</button></td>
         
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
  </table>
  <p><br />
    <br />
  </p>
</form>
</body>
</html>
