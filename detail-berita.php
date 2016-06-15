<html>
<head>
	<title>Benvindu iha Website Tutorial</title>
	<link rel="stylesheet" type="text/css"  href="bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="prettify.css" />
	<link rel="stylesheet" type="text/css"  href="css.css" />
</head>
<body>
<div id="container">
	<?php 
		include "header.php";
	?>
	<div id="content">
		<?php 
			$utama = mysql_query("SELECT * FROM tbl_berita where id_berita='$_GET[id]'");
			mysql_query("UPDATE tbl_berita set view=view+1 where id_berita='$_GET[id]'");
			while ($u = mysql_fetch_array($utama)){
			$detail = nl2br($u[isi_berita]); 
				echo "<div class='artikel'>
						<h1>$u[judul_berita]</h1>";
						
				echo"<script type='text/javascript' src='//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53b80ba71bf81bc9'></script>


<div class='addthis_native_toolbox'></div>		";
				echo"		<b>Publika iha Data : $u[tanggal] OTL - Lee Dala $u[view] Ona</b>
						<img width='150px' src='foto_berita/$u[foto]'>
						
						<p>$detail
						</p>
					 </div>";
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