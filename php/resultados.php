<?php
	include("../html/header.html");
	include("../html/nav.html");
?>
<div class="content">
	<section>
		<article class="first">
			<h3>Resultado</h3>
			<?php
				require("conexion.php");
				conectar();
				$palabra = $_REQUEST['palabra'];
				$palabra = strtolower($palabra);
				$result = "SELECT * FROM paginas WHERE nombre='$palabra'";
				$consulta= mysqli_query($GLOBALS['conexion'],$result);
				if ($row = mysqli_fetch_array($consulta))
				{
					echo "<li><center><h4>".ucfirst(strtolower($row["nombre"]))."</h4>";
					echo "<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/".$row["video"]."\" frameborder=\"0\" allowfullscreen></iframe></center></li>";
				}
				else
				{
					echo "<p>No se encontró la palabra buscada</p>";
				}
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