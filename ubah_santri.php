<?php
include "koneksi.php";
include "lock.php";
$id = $_GET['id'];
$a = mysql_fetch_array(mysql_query("SELECT*FROM santri WHERE nomor_ID = '$id'"));

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$JK = $_POST['JK'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$nama_ayah = $_POST['nama_ayah'];
	$nama_ibu = $_POST['nama_ibu'];
	$alamat = $_POST['alamat'];

	$update = mysql_query("UPDATE santri SET nama_depan = '$nama_depan', nama_belakang = '$nama_belakang', JK = '$JK', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', nama_ayah = '$nama_ayah', nama_ibu = '$nama_ibu', alamat = '$alamat' WHERE nomor_ID = '$id'");

	if($update){
		echo "<script>
		alert('Data Berhasil di Ubah');
		window.location = 'biodata_siswa.php';
		</script>";
	}else{
		echo "<script>
		alert('Data GAGAL di UBAH');
		</script>";
	}
}
?>

<form action = "" method = "POST">
  <table width="754" border="0" bgcolor="#ffcc99" align="center">
    <tr>
      <td width="748"><p><h1>Sistem Infromasi Pendataan Hafalan<em> Al-Qur'an</em>
        </p></h1>
      <p>Ubah Biodata Santri</p>
      <table width="354" border="0" align="center">
        <tr>
          <td width="102"><p>Nomor ID</p>
            <p>&nbsp;</p></td>
          <td width="16">&nbsp;</td>
          <td width="149"><p>
            <input type = "text" name = "nomor_ID" value = "<? echo $id; ?>" readonly />
          </p>
            <p>&nbsp; </p></td>
          <td width="69">&nbsp;</td>
        </tr>
        <tr>
          <td>Nama Depan</td>
          <td>&nbsp;</td>
          <td><p>
            <input type = "text" name = "nama_depan" value = "<? echo $a[nama_depan]; ?>" />
          </p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p>&nbsp;</p>
            <p>Nama Belakang</p></td>
          <td>&nbsp;</td>
          <td><p>&nbsp;
            </p>
            <p>
              <input type = "text" name = "nama_belakang" value = "<? echo $a[nama_belakang]; ?>" />
            </p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p>&nbsp;</p>
            <p>Jenis Kelamin</p></td>
          <td>&nbsp;</td>
          <td><p>&nbsp;
            </p>
            <p>
              <input type = "text" name = "JK" value = "<? echo $a[JK]; ?>"readonly />
            </p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p>&nbsp;</p>
            <p>Tempat Lahir</p></td>
          <td>&nbsp;</td>
          <td><p>&nbsp;
            </p>
            <p>
              <input type = "text" name = "tempat_lahir" value = "<? echo $a[tempat_lahir]; ?>" />
            </p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p>&nbsp;</p>
            <p>Tanggal Lahir</p></td>
          <td>&nbsp;</td>
          <td><p>&nbsp;
            </p>
            <p>
              <input type = "text" name = "tanggal_lahir" value = "<? echo $a[tanggal_lahir]; ?>" />
            </p></td>
          <td><p>&nbsp;</p>
            <p>tttt/bb/hh</p></td>
        </tr>
        <tr>
          <td><p>&nbsp;</p>
            <p>Nama Ayah</p></td>
          <td>&nbsp;</td>
          <td><p>&nbsp;
            </p>
            <p>
              <input type = "text" name = "nama_ayah" value = "<? echo $a[nama_ayah]; ?>" />
            </p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p>&nbsp;</p>
            <p>Nama Ibu</p></td>
          <td>&nbsp;</td>
          <td><p>&nbsp;
            </p>
            <p>
              <input type = "text" name = "nama_ibu" value = "<? echo $a[nama_ibu]; ?>" />
            </p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p>&nbsp;</p>
            <p>Alamat</p></td>
          <td>&nbsp;</td>
          <td><p>&nbsp;
            </p>
            <p>
              <input type = "text" name = "alamat" value = "<? echo $a[alamat]; ?>" />
            </p></td>
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
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
  </table>
  <p><br>
  </p>
</form>