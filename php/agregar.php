<?php
	include("../html/header.html");
	include("../html/nav.html");
?>
<div class="content">
	<section>
		<article class="first">
		<?php
			require("conexion.php");
			conectar();
			$nombre = $_REQUEST["nombre"];
			$categoria = $_REQUEST["categoria"];
			$video = $_REQUEST["video"];
			$nombre = strtolower($nombre);
			$result = "INSERT INTO paginas (nombre,categoria,video) VALUES ('$nombre','$categoria','$video')";
			if (mysqli_query($GLOBALS['conexion'],$result))
				echo "<p>Pagina añadida exitosamente</p>";
			else
				echo "<p>Error</p>";
		?>
			<a href="control.php">Volver</a>
		</article>
	</section>
	<?php
		include("../html/aside.html");
	?>
</div>
<?php
	include("../html/footer.html");
?>