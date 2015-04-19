<?php
	include("../html/header.html");
	include("../html/nav.html");
?>
<div class="content">
	<section>
		<article class="first">
			<h2>Lugares</h2>
			<ul>
				<h3>Paises</h3>
			<?php
				require("conexion.php");
				conectar();
				$result= "SELECT * FROM paginas WHERE `categoria`='paises'";
				$consulta= mysqli_query($GLOBALS['conexion'],$result);
					while ($row = mysqli_fetch_array($consulta))
					{
						echo "<li><center><h4>".ucfirst(strtolower($row["nombre"]))."</h4>";
						echo "<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/".$row["video"]."\" frameborder=\"0\" allowfullscreen></iframe></center></li>";
					}
			?>
			</ul>
		</article>
		<article>
			<ul>
				<h3>Provincias</h3>
			<?php
				$result= "SELECT * FROM paginas WHERE `categoria`='provincias'";
				$consulta= mysqli_query($GLOBALS['conexion'],$result);
					while ($row = mysqli_fetch_array($consulta))
					{
						echo "<li><center><h4>".ucfirst(strtolower($row["nombre"]))."</h4>";
						echo "<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/".$row["video"]."\" frameborder=\"0\" allowfullscreen></iframe></center></li>";
					}
			?>
			</ul>
		</article>
		<article>
			<ul>
				<h3>Ciudades</h3>
			<?php
				$result= "SELECT * FROM paginas WHERE `categoria`='ciudades'";
				$consulta= mysqli_query($GLOBALS['conexion'],$result);
					while ($row = mysqli_fetch_array($consulta))
					{
						echo "<li><center><h4>".ucfirst(strtolower($row["nombre"]))."</h4>";
						echo "<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/".$row["video"]."\" frameborder=\"0\" allowfullscreen></iframe></center></li>";
					}
				desconectar();
			?>
			</ul>
		</article>
	<a href="../php/lenguaje.php">Volver a Categorías</a>
	</section>
	<?php
		include("../html/aside.html");
	?>
</div>
<?php
	include("../html/footer.html");
?>