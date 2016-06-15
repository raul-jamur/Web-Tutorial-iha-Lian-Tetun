<html>
<head>
	<title>Selamat datang di website utama saya</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="container">
	<?php 
		include "header.php";
	?>
	<div id="content">
		<div class='artikel'>
			<form action='' method='POST'>
			<h1>Kirimkan Pesan Melalui Form di bawah ini</h1>
			
			<iframe src="https://www.google.com/maps/embed?pb=" 
			width="100%" height="300" frameborder="0" style="border:0"></iframe><br>
			<br><br>
			
				<table width="100%">
					<tr>
						<td width='120px'>Nama Lengkap</td>
						<td><input type='text' name='nama'></td>
					</tr>
					<tr>
						<td>Alamat Email</td>
						<td><input type='text' name='email'></td>
					</tr>
					<tr>
						<td>Isi Pesan</td>
						<td><textarea style='width:100%; height:90px;' name='pesan'></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input type='submit' name='submit' value='Kirim Pesan'></td>
					</tr>
				</table>
			</form>
		</div>
	</div>	
	
	<?php 
		if (isset($_POST[submit])){
			mysql_query("INSERT INTO tbl_contact (nm_lengkap, almat_email, isi_pesan)
										  VALUES ('$_POST[nama]','$_POST[email]','$_POST[pesan]')");
			
			echo "<script>window.alert('Sukses mengirimkan Pesan.');
				window.location='contact.php'</script>";
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