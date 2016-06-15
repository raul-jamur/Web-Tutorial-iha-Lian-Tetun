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
		<div class='artikel'>
			<form action='' method='POST'>
			<h1>Haruka Ita nia Mensajem liu husi Form iha okos ne'e</h1>
			
			<iframe src="https://www.google.com/maps/embed?pb=" 
			width="100%" height="300" frameborder="0" style="border:0"></iframe><br>
			<br><br>
			
				<table width="100%">
					<tr>
						<td width='120px'>Naran Kompletu</td>
						<td><input type='text' name='nama'></td>
					</tr>
					<tr>
						<td>Ita nia Email</td>
						<td><input type='text' name='email'></td>
					</tr>
					<tr>
						<td>Mensajem</td>
						<td><textarea style='width:100%; height:90px;' name='pesan'></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input type='submit' name='submit' value='Haruka'></td>
					</tr>
				</table>
			</form>
		</div>
	</div>	
	
	<?php 
		if (isset($_POST[submit])){
			mysql_query("INSERT INTO tbl_contact (nm_lengkap, almat_email, isi_pesan)
										  VALUES ('$_POST[nama]','$_POST[email]','$_POST[pesan]')");
			
			echo "<script>window.alert('Ita Haruka Mensajem ho Susesu.');
				window.location='kontaktu.php'</script>";
		}
	?>
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