<?php
	include("../html/header.html");
	include("../html/nav.html");
?>
<div class="content">
	<section>
		<article class="first">
			<h3>Galeria de fotos</h3>
	<form>
	<img src="../img/img1.jpg" name="album" class="album">
	<input type="button" name="_foto" value="" onClick="cambiar(-1,16)" class="adjust left">
	<input type="button" name="_foto" value="" onClick="cambiar(1,16)" class="adjust right">
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
