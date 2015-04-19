<?php
	include("../html/header.html");
	include("../html/nav.html");
?>
<div class="content">
	<section>
		<article class="first">
			<?php
			session_start();
			require("conexion.php");
			conectar();
				$id=$_REQUEST["ide"];
				$result= "DELETE FROM paginas WHERE id=$id";
				if (mysqli_query($GLOBALS['conexion'],$result))
					echo "<p>Pagina eliminada exitosamente</p>";
				else
					echo "<p>Error</p>";
			desconectar();
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