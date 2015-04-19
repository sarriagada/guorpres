<?php
	include("../html/header.html");
	include("../html/nav.html");
?>
<div class="content">
	<section>
		<article class="first">
			<h2>Animales</h2>
			<ul>
			<?php
				require("conexion.php");
				conectar();
				$result= "SELECT * FROM paginas WHERE `categoria`='animales'";
				$consulta= mysqli_query($GLOBALS['conexion'],$result);
					while ($row = mysqli_fetch_array($consulta))
					{
						echo "<li><center><h3>".ucfirst(strtolower($row["nombre"]))."</h3>";
						echo "<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/".$row["video"]."\" frameborder=\"0\" allowfullscreen></iframe></center></li>";
					}
				desconectar();
			?>
				<li>
					Mascotas
				</li>
				<li>
					No domésticos
				</li>
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