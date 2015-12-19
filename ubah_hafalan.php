<?php
include "koneksi.php";
include "lock.php";
$id = $_GET['id'];
$a = mysql_fetch_array(mysql_query("SELECT*FROM hafalan WHERE nomor_ID = '$id'"));

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$tanggal_setor = $_POST['tanggal_setor'];
	$juz_ke = $_POST['juz_ke'];
	$nama_surat = $_POST['nama_surat'];
	$dari_ayat_ke = $_POST['sampai_ayat_ke'];
	$sampai_ayat_ke = $_POST['sampai_ayat_ke'];
	$user_id = $_POST['user_id'];
	$keterangan = $_POST['keterangan'];

	$update = mysql_query("UPDATE hafalan SET tanggal_setor = '$tanggal_setor', juz_ke = '$juz_ke', nama_surat = '$nama_surat', dari_ayat_ke = '$dari_ayat_ke', sampai_ayat_ke = '$sampai_ayat_ke', user_id = '$user_id', keterangan = '$keterangan' WHERE nomor_ID = '$id'");

	if($update){
		echo "<script>
		alert('Data Berhasil di Ubah');
		window.location = 'hafalan.php';
		</script>";
	}else{
		echo "<script>
		alert('Data GAGAL di UBAH');
		</script>";
	}
}
?>

<form action = "" method = "POST">
  <table width="754" border="0" bgcolor="#ffff99" align="center">
    <tr>
      <td width="748"><p><h1>Sistem Infromasi Pendataan Hafalan<em> Al-Qur'an</em>
        </p></h1>
      <p>Ubah Hafalan Santri</p>
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
          <td>Tanggal Setor</td>
          <td>&nbsp;</td>
          <td><p>
            <input type = "text" name = "tanggal_setor" value = "<? echo $a[tanggal_setor]; ?>" />
          </p></td>
          <td><p>tttt/bb/hh</p></td>
          </tr>
        <tr>
          <td><p>&nbsp;</p>
            <p>Juz Ke-</p></td>
          <td>&nbsp;</td>
          <td><p>&nbsp;
            </p>
            <p>
              <input type = "text" name = "juz_ke" value = "<? echo $a[juz_ke]; ?>" />
            </p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p>&nbsp;</p>
            <p>Nama Surat</p></td>
          <td>&nbsp;</td>
          <td><p>&nbsp;
            </p>
            <p>
              <input type = "text" name = "nama_surat" value = "<? echo $a[nama_surat]; ?>" />
            </p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p>&nbsp;</p>
            <p>Dari Ayat Ke-</p></td>
          <td>&nbsp;</td>
          <td><p>&nbsp;
            </p>
            <p>
              <input type = "text" name = "dari_ayat_ke" value = "<? echo $a[dari_ayat_ke]; ?>" />
            </p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p>&nbsp;</p>
            <p>Sampai Ayat Ke</p></td>
          <td>&nbsp;</td>
          <td><p>&nbsp;
            </p>
            <p>
              <input type = "text" name = "sampai_ayat_ke" value = "<? echo $a[sampai_ayat_ke]; ?>" />
            </p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p>&nbsp;</p>
            <p>User ID</p></td>
          <td>&nbsp;</td>
          <td><p>&nbsp;
            </p>
            <p>
              <input type = "text" name = "user_id" value = "<? echo $a[user_id]; ?>" />
            </p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p>&nbsp;</p>
            <p>Keterangan</p></td>
          <td>&nbsp;</td>
          <td><p>&nbsp;
            </p>
            <p>
              <input type = "text" name = "keterangan" value = "<? echo $a[keterangan]; ?>" />
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