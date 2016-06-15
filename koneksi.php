<?php 
$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'dbweb';

mysql_connect($server, $username, $password) or die ('koneksaun Falya!!!');
mysql_select_db($database) or die ('Base de Dadus Laiha!!!');
?>