<?php
	include("../html/header.html");
	include("../html/nav.html");
?>
<div class="content">
	<section>
		<article class="first">
		<?php
			session_start();
			if (!isset($_SESSION['usuario']))
				$_SESSION['usuario'] = $_REQUEST['usuario'];
			$usuario = strtolower($_SESSION['usuario']);
			if (!isset($_SESSION["pass"]))
				$_SESSION["pass"] = $_REQUEST["pass"];
			$pass = $_SESSION['pass'];
			require("conexion.php");
			require("browser.php");
			conectar();
			$i=0;
			$navegador = new browser();
			if( $navegador->getBrowser() == Browser::BROWSER_CHROME)
				$result = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$pass'";
			else if( $navegador->getBrowser() == Browser::BROWSER_FIREFOX)
				$result = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$pass'";
			else if( $navegador->getBrowser() == Browser::BROWSER_OPERA)
				$result = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$pass'";
			else
				$result = "SELECT * FROM usuarios WHERE `usuario`='$usuario' AND `contrasena`='$pass'";
			$consulta = mysqli_query($GLOBALS['conexion'],$result);
			$buscar = mysqli_data_seek($consulta,0);
			if(!$buscar)
				echo("El usuario o la contraseña introducidos no son validos");
			else
				include("paginas.php");
			desconectar();
		?>
		</article>
	</section>
	<?php
		include("../html/aside.html");
	?>
</div>
<?php
	include("../html/footer.html");
?>