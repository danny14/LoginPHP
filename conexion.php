<?php
include("configuracion.php");
$conexion = new mysqli($server,$user,$password,$bd);
if(mysqli_connect_errno()){
	echo "No conectado <br>", mysqli_connect_error();
	exit();
}
?>