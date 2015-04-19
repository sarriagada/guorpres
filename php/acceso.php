<?php
	include("../html/header.html");
	include("../html/nav.html");
?>
<div class="content">
	<section>
		<article class="first">
			<form method="post" action="control.php">
				<label for="usuario">Usuario</label>
				<input type="text" id="usuario" name="usuario">
				<label for="pass">Contraseña</label>
				<input type="password" id="pass" name="pass">
				<input type="submit" value="Enviar" class="grande">
			</form>
		</article>
	</section>
	<aside>
		<article class="first">
			<p>Nota: Esta sección es exclusivamente para usuarios
			habilitados como administradores de este sitio</p>
		</article>
	</aside>
</div>
<?php
	include("../html/footer.html")
?>