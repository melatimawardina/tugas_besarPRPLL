
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="900" height="665" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
     <td width="959" bgcolor="#FFCC99"><strong><h1>Sistem Informasi Pendataan Hafalan <em>Al-Qur'an </em></h1>
    <p>LAPORAN</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="406" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="88"><form id="form2" name="form2" method="post" action="laporan/cetak_santri.php">
          <input type="submit" name="biodata_santri" id="biodata_santri" value="Biodata Santri" />
        </form></td>
        <td width="182" align="center"><form id="form3" name="form3" a limethod="post" action="laporan/cetak.php">
          <input type="submit" name="biodata_ustadz" id="biodata_ustadz" value="Biodata Ustadz" />
        </form></td>
        <td width="136"><form id="form1" name="form1" method="post" action="halaman_utama.php">
          <p>
            <input type="submit" name="halaman_utama" id="halaman_utama" value="Halaman Utama" />
          </p>
        </form></td>
      </tr>
      <tr>
        <td height="65">Nomor ID          </td>
        <td align="right"><form method="post" action="laporan.php"><input type="text" id="search-text" name="search"><input type="submit" value="Hafalan Santri" name="submit" id="cari-submit"></form>
          <?php
	include'koneksi.php';
	$search = $_POST['search'];
	if($_POST['submit']) {
	if($search==""){
	echo"Masukan kata kunci terlebih dahulu";
	}
	}
	if((isset($_POST['submit'])) AND ($_POST['search'] <> "")){
	$sql = mysql_query("SELECT * FROM hafalan where nomor_ID LIKE '%$search%'")or die(mysql_error());
	$jumlah = mysql_num_rows($sql);
	if($jumlah > 0){
	echo'<br>Ada'.$jumlah.' Nomor yang sesuai :<br><br>';
	while($res=mysql_fetch_row($sql)) {
	$nomor++; echo $nomor.'.';
	echo "(
	
	
	<table>
	<td width='1000'>Nomor ID : </td><td>Tanggal Setor : </td><td>Juz Ke : </td><td>Nama Surat : </td><td>Dari Ayat Ke : </td>
	<tr>
	<td>$res[0]</td>
	<td>$res[1]</td>
	<td>$res[2]</td>
	<td>$res[3]</td>
	<td>$res[4]</td>
	
	</table>) <a href='laporan.php'>Pilih</a><br>";
	}
	}
	else {
	echo"Maaf, hasil pencarian tidak ditemukan, mohon tulis kata kuncinya dengan benar!";
	}
	}
	?>
        
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p>
    
    </form>
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
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
