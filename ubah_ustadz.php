<?php
include "koneksi.php";
include "lock.php";
$id = $_GET['id'];
$a = mysql_fetch_array(mysql_query("SELECT*FROM ustadz WHERE user_id = '$id'"));

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$JK = $_POST['JK'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];

	$update = mysql_query("UPDATE ustadz SET nama_depan = '$nama_depan', nama_belakang = '$nama_belakang', JK = '$JK', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', alamat = '$alamat' WHERE user_id = '$id'");

	if($update){
		echo "<script>
		alert('Data Berhasil di Ubah');
		window.location = 'biodata_ustadz.php';
		</script>";
	}else{
		echo "<script>
		alert('Data GAGAL di UBAH');
		</script>";
	}
}
?>

<form action = "" method = "POST">
	<table width="710" border="0" align="center">
	  <tr>
	    <td width="704" bgcolor="#ffcc99"><p><h1>Sistem Informasi Pendataan Hafalan <em>Al-Qur'an
	      </p>
	    </em></h1>
        <p>Ubah Biodata Ustadz</p>
        <table width="375" border="0" align="center">
          <tr>
            <td width="80"><p>User ID</p>
            <p>&nbsp;</p></td>
            <td width="19">&nbsp;</td>
            <td width="166"><p>
              <input type = "text" name = "user_id" value = "<? echo $id; ?>" readonly />
            </p>
            <p>&nbsp; </p></td>
            <td width="59">&nbsp;</td>
          </tr>
          <tr>
            <td><p>Nama Depan</p>
            <p>&nbsp;</p></td>
            <td>&nbsp;</td>
            <td><p>
              <input type = "text" name = "nama_depan" value = "<? echo $a[nama_depan]; ?>" />
            </p>
            <p>&nbsp; </p></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><p>Nama Belakang</p>
            <p>&nbsp;</p></td>
            <td>&nbsp;</td>
            <td><p>
              <input type = "text" name = "nama_belakang" value = "<? echo $a[nama_belakang]; ?>" />
            </p>
            <p>&nbsp; </p></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><p>Jenis Kelamin</p>
            <p>&nbsp;</p></td>
            <td>&nbsp;</td>
            <td><p>
              <input type = "text" name = "JK" value = "<? echo $a[JK]; ?>"readonly />
            </p>
            <p>&nbsp; </p></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><p>Tempat Lahir</p>
            <p>&nbsp;</p></td>
            <td>&nbsp;</td>
            <td><p>
              <input type = "text" name = "tempat_lahir" value = "<? echo $a[tempat_lahir]; ?>" />
            </p>
            <p>&nbsp; </p></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><p>Tanggal Lahir
            </p>
            <p>&nbsp;</p></td>
            <td>&nbsp;</td>
            <td><p>
              <input type = "text" name = "tanggal_lahir" value = "<? echo $a[tanggal_lahir]; ?>" />
            </p>
            <p>&nbsp;</p></td>
            <td><p>tttt/bb/hh</p>
            <p>&nbsp;</p></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>&nbsp;</td>
            <td><input type = "text" name = "alamat" value = "<? echo $a[alamat]; ?>" /></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td align="right"><input type = "submit" name = "simpan" value = "Ubah" /></td>
            <td align="right">&nbsp;</td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p></td>
      </tr>
  </table>
	<br>
</form>