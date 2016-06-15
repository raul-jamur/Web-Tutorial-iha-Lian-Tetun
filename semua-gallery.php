<html>
<head>
	<title>Benvindu iha Website Tutorial</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
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
		<h1>Foto Sira iha Album <?php echo "$_GET[id]"; ?></h1>
		<?php 
			$col = 3;
			$album = mysql_query("SELECT * FROM tbl_gallery where id_album='$_GET[id]'");
			echo "<table width=100%><tr>";
			$hitung = 0;
			while($a = mysql_fetch_array($album)){
				
				if ($hitung >= $col) {
					 echo "</tr><tr>";
					$hitung = 0;
				}
				$hitung++;
				
		echo "<td><center>
			<div><a href='detail-gallery.php?id=$a[id_gallery]'>$a[judul_foto]</a></div>
			<a href='detail-gallery.php?id=$a[id_gallery]'>
				<img class='foto' width=170px style='background:#fff; padding:7px;' src='gallery/$a[foto]'>
			</a>
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