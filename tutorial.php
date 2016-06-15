<html>
<head>
	<title>Benvindu iha Website Tutorial</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="prettify.css" />
	<link rel="stylesheet" type="text/css"  href="bootstrap.css" />
	<link rel="stylesheet" type="text/css"  href="css.css" />
</head>
<body>
<div id="container">
	<?php 
		include "header.php";
	?>
	<div id="content">
		<?php 
		
			$BatasAwal = 3;
			if (!empty($_GET['page'])) {
				$hal = $_GET['page'] - 1;
				$MulaiAwal = $BatasAwal * $hal;
			} else if (!empty($_GET['page']) and $_GET['page'] == 1) {
				$MulaiAwal = 0;
			} else if (empty($_GET['page'])) {
				$MulaiAwal = 0;
			}
			
			$utama = mysql_query("SELECT * FROM tbl_berita 
							ORDER BY id_berita DESC LIMIT $MulaiAwal, $BatasAwal");
			while ($u = mysql_fetch_array($utama)){
				$hitung = mysql_query("SELECT * FROM tbl_comment where id_berita='$u[id_berita]'");
				//$jumlah = mysql_num_rows($hitung);
				$isi_berita  = substr($u['isi_berita'],0,590);
				$isi_beritas = strip_tags($isi_berita);
				echo "<div class='artikel'>
						<h1>$u[judul_berita]</h1>
						<b>Publika iha Data : $u[tanggal] OTL - Lee Dala $u[view] Ona</b>
						<img width='150px' src='foto_berita/$u[foto]'>
						<p>$isi_beritas
							<a style='text-decoration:none;' href='detail-berita.php?id=$u[id_berita]'><b>Lee Kompletu...</b></a>
							
							
						</p>
					 </div><div style='clear:both;'></div>";
			}
			
			$cekQuery = mysql_query("SELECT * FROM tbl_berita");
			$jumlahData = mysql_num_rows($cekQuery);
			if ($jumlahData >= $BatasAwal) {
				echo "<tr><td colspan='4'>&nbsp;&nbsp;Page : ";
				$a = explode(".", $jumlahData / $BatasAwal);
				$b = $a[0];
				$b2 = $a[1];
					if ($b2 == ''){
					  $c = $b;
					}else{
					  $c = $b + 1;
					}
				for ($i = 1; $i <= $c; $i++) {
					echo "<a style='text-decoration:none;' href='?page=$i'> $i </a>";
				}
				echo "</td></tr>";
				echo"<br><br>";
			}
		?>
	</div>
	<?php
		include "sidebar.php";
	?>
	<div style='clear:both;'></div>
	<?php 
		include "footer.php";
	?>
</div>
</body>
</html>