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
	<div id="galery">
		<div class="art">
		<h1>Pagina Album Imagem Sira</h1>
		<?php 
			$col = 4;
			$album = mysql_query("SELECT * FROM tbl_album order by id_album DESC");
			echo "<table width=100%><tr>";
			$hitung = 0;
			while($a = mysql_fetch_array($album)){
				$jumlah = mysql_query("SELECT * FROM tbl_gallery 
											where id_album='$a[id_album]'");
				$totaljumlah = mysql_num_rows($jumlah);
				
				if ($hitung >= $col) {
					 echo "</tr><tr>";
					$hitung = 0;
				}
				$hitung++;
				
		echo "<td><center>
			<div><a href='semua-gallery.php?id=$a[id_album]'>$a[nama_album]</a></div>
			<a href='semua-gallery.php?id=$a[id_album]'>
				<img width=120px style='background:#fff; padding:7px;' src='album/$a[cover]'>
			</a>
				<i style='color:red'>Iha Imagem $totaljumlah</i><br><br>
				 </center></td>";
			}
			echo "</tr></table>";
		?>
		
		</div>
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