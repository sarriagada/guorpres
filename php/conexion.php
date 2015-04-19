<?php
	function conectar()
	{
		$base="guorpres";
		$host = "localhost";
		$user = "root";
		$pass = "";
		$GLOBALS['conexion'] = mysqli_connect($host, $user, $pass, $base)
		or die("Error al conectarse a la base de datos");
	}
	function desconectar()
	{
		mysqli_close($GLOBALS['conexion']);
	}
?>