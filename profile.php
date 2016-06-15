<html>
<head>
	<title>Benvindu iha Website Tutorial</title>
	<link rel="stylesheet" type="text/css"  href="bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="prettify.css" />
	<link rel="stylesheet" type="text/css"  href="css.css" />
	<link rel="stylesheet" type="text/css"  href="base.css" />
	<link rel="stylesheet" type="text/css"  href="font-awesome.css" />
	<link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleleapis.com/css?family+Source+Sans+Pro:200,300,400,900,600italic" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
	<?php 
		include "header.php";
	?>
	<div id="content">
		<?php 
			$utama = mysql_query("SELECT * FROM tbl_halaman where id_halaman='1'");
			
			while ($u = mysql_fetch_array($utama)){
			$halaman = nl2br($u[isi_halaman]);
				echo "<div class='artikel'>
						<h1>$u[judul_halaman]</h1>";
							echo"<script type='text/javascript' src='//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53b80ba71bf81bc9'></script>


<div class='addthis_native_toolbox'></div>		";
						echo"<p>$halaman</p>
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