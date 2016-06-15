<?php 
session_start();
?>
<html>
<head>
<title>Login Admin - Portal</title>
<style>
	body {
		background:#e3e3e3; 
	}
	#login {
		position:absolute;
		left:50%;
		top:35%;
		margin-left:-150px; 
		margin-top:-120px;  
	}
	
	.button {
	  color: #ffffff;
	  background-color: #006dcc;
	  background-repeat: repeat-x;
	  border-color: #002a80;
	  padding:5px 40px 5px 40px;
	  margin-bottom:8px;
	}
	
	.input {
		font-size:15px;
		padding:4px;
	}
	
	form {
		background:#fff;
		width: 280px;
		padding:40px;
		border-radius:5px;
		box-shadow: 4px 4px 4px #cecece;
	}
	
	h2 {
		text-align:center;
		border-bottom:1px solid #cecece;
	}
</style>
</head>

<body>
	<div id='login'>
		<form action='' method='POST'>
		<h2>Admin Login</h2>
			<table>
				<tr>
					<td>Naran</td>
					<td><input type='text' name='username' class='input'></td>
				</tr>
				<tr>
					<td>Lian Xave</td>
					<td><input type='password' name='password' class='input'></td>
				</tr>
				<tr>
					<td colspan='2'>
						<center><br>
						<input type='submit' name='login' value='Login' class='button'>
						</center>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>

<?php 
	if (isset($_POST[login])){
		$userlogin = $_POST[username];
		$passlgoin = md5($_POST[password]);
		include "koneksi.php";
		$login = mysql_query("SELECT * FROM tbl_users 
					where username='$userlogin' AND password='$passlgoin'");
		$cek = mysql_num_rows($login);
		$r = mysql_fetch_assoc($login);
		if ($cek >= 1){
			$_SESSION[id] = $r[id_user];
			$_SESSION[nama] = $r[nama_lengkap];
			
				if ($r[level] == 'admin'){
					echo "<script>window.alert('Ita Login ho Susesu.');
					window.location='admin'</script>";
				}else{
					echo "<script>window.alert('Ita Login ho Susesu.');
					window.location='members'</script>";
				}
		}else{
			echo "<script>window.alert('Deskulpa, Ita nia Login Falya !!!.');
				window.location='admin.php'</script>";
		}
	}
?>