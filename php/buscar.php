<?php
	include("../html/header.html");
	include("../html/nav.html");
?>
<div class="content">
	<section>
		<article class="first">
			<h3>Buscar una palabra</h3>
			<form method="post" action="resultados.php">
				<input type="text" name="palabra" placeholder="Palabra a buscar">
				<input type="submit" value="Buscar">
			</form>
		</article>
	</section>
	<?php
		include("../html/aside.html");
	?>
</div>
<?php
	include("../html/footer.html");
?>