<html>
<head>
	<title>Selamat datang di website utama saya</title>
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
		<div class="artikel">
		<?php 
			$album = mysql_query("SELECT * FROM tbl_gallery where id_gallery='$_GET[id]'");
			$album2 = mysql_query("SELECT * FROM tbl_gallery where id_gallery='$_GET[id]'");
			$e = mysql_fetch_array($album2);
			echo "<br><a href='semua-gallery.php?id=$e[id_album]' style='float:right;'> 
				  Fila ba Pagina Album</a>";
			echo "<table width=100%><tr>";
			while($a = mysql_fetch_array($album)){
				
		echo "<td><center>
			<h1>$a[judul_foto]</h1>
				<img class='foto' width=580px style='background:#fff; padding:7px;' src='gallery/$a[foto]'>
			$a[deskripsi]	 
				 
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