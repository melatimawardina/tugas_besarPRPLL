
<?php
echo"<script>print();</script>";
?>
<html>
<head>
<title>Laporan</title>
<link type="text/css" href="style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicond..png">

</head>

<body><center><table width=" 694" border="0" align="center">
<tr><td height="65" align="center" valign="top">&nbsp;</td>
</tr>
  <tr>
    <td height="107" align="center" valign="top"><div id="fontjudul">
      <p>TPA BAITUL HAMIM</p>
      <p>Jl. Cimencrang No.10 Bandung</p><br>
        <?php
	include 'koneksi.php';
	$nomor_ID=$_GET[nomor_ID];
	$view=mysql_query("select * from hafalan where nomor_ID='$_GET[nomor_ID]'");
	$r=mysql_fetch_array($view);
	if ($_GET[tampil]=="pencarian" and empty($nomor_ID)){
	echo"";
	}
	else{
		echo"Dari Santri : $r[nama_depan]";
	}
	?>
        
        <br>
      </p>
    </div>
    
      <p>Nomor ID :        </p>
      <p>Nama	 : </p>
      <table width="663" border="1" cellpadding="1" cellspacing="1" bgcolor="#013E46">
        <tr class="fontfieldlihat">
          <td width="91" height="30" align="center">Tanggal Setor</td>
          <td width="93" align="center">Juz Ke</td>
          <td width="97" align="center">Nama Surat</td>
          <td width="78" align="center">Dari ayat ke</td>
		  <td width="98" align="center">Samapai ayat ke</td>
          <td width="73" align="center">Nama Ustadz</td>
          <td width="95" align="center">Keterangan</td>
        </tr>
        <?php
	  	include "koneksi.php";
		$nomor_ID=$_GET[nomor_ID];
		if ($_GET[tampil]=="pencarian" && $kode_supp){
      	$cari = mysql_query("SELECT * FROM ustadz where user_id='$user_id' ORDER BY user_id");
		while ($hasil = mysql_fetch_array($cari))
		{
			echo 	"<tr class=fontlihat height='20'>
						<td align=center>$hasil[tanggal_setor]</td>
						<td align=center>$hasil[juz_ke]</td>
						<td align=center>$hasil[nama_surat]</td>
						<td align=center>$hasil[dari_ayat_ke]</td>
						<td align=center>$hasil[sampai_ayat_ke]</td>
						<td align=center>$hasil[nama_depan]
						</td>
						<td align=center>$hasil[keterangan]
						
						</td>
					</tr>";
					
		}
		}
		else{
		$tampil = mysql_query("SELECT * FROM hafalan ORDER BY nomor_id ASC ");
		while ($databrg = mysql_fetch_array($tampil))
		{
			echo 	"<tr class=fontlihat height='20'>
						<td align=center>$databrg[tanggal_setor]</td>
						<td align=center>$databrg[juz_ke]</td>
						<td align=center>$databrg[nama_surat]</td>
						<td align=center>$databrg[dari_ayat_ke]</td>
						<td align=center>$databrg[sampai_ayat_ke]</td>
						<td align=center>$databrg[nama_depan]
						</td>
						<td align=center>$hasil[keterangan]
						
						</td>
					</tr>";
					
		}
		}
			echo"<script>history.back(1)</script>";

		?>
      </table></td>
  </tr>
 
   <tr>
     <td height="39" align="right" class="font-transaksi">&nbsp;</td>
   </tr>
   <tr>
   <td>
   <table width="688">
	  
   
 
</table>
</body>
</html>
<?php
echo"<script>history.back(1)</script>";
?>