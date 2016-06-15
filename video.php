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
		<div class="artikel">
		<h1>Koleksaun Video</h1>
		<?php 
			$col = 2;
			$video = mysql_query("SELECT * FROM tbl_video");
			echo "<table width=100%><tr>";
			$hitung = 0;
			while($a = mysql_fetch_array($video)){	
				if ($hitung >= $col) {
					 echo "</tr><tr>";
					$hitung = 0;
				}
				$hitung++;	
		echo "<td><center>
			<div><a href='#'>$a[judul_video]</a></div>
				<video width='300px' controls>
					<source src='video/$a[video]' type='video/mp4'>
				</video>
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