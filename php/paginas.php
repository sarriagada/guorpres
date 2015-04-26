<script src="../ckeditor/ckeditor.js"></script>
<script src="../ckfinder/ckfinder.js"></script>
<table border="1">
	<tr>
		<td>ID</td>
		<td>Nombre</td>
		<td>Categoria</td>
		<td>Video</td>
		<td>Eliminar</td>
	</tr>
<?php
	$result= "SELECT * FROM paginas";
	$consulta= mysqli_query($GLOBALS['conexion'],$result);
	while ($row = mysqli_fetch_array($consulta))
	{
		echo "<tr><td>".$row["id"]."</td>";
		echo "<td>".$row["nombre"]."</td>";
		echo "<td>".$row["categoria"]."</td>";
		echo "<td><a href=\"https:www.youtube.com/watch?v=".$row["video"]."\" TARGET=\"_BLANK\">Enlace</a></td>";
		echo "<td><a href=\"eliminar.php?ide=".$row["id"]."\">Eliminar</a>";
		echo "</tr>";
	}
	echo "</table>";
?>
<h3>Añadir una pagina</h3>
<img src="../img/tutorial.png">
<p>Para añadir un video, debe copiar el texto remarcado del video deseado en youtube</p>
<form method="post" action="agregar.php">
	<label for="nombre">Nombre: </label>
	<input type="text" id="nombre" name="nombre" required>
	<label for="categoria">Categoria: </label>
	<select id="categoria" name="categoria">
		<option disabled>General</option>
		<option value="sustantivo">Sustantivos</option>
		<option value="consonante">Consonantes</option>
		<option value="caracter">Caracter</option>
		<option value="animales">Animales</option>
		<option value="colores">Colores</option>
		<option value="sentimientos">Sentimientos</option>
		<option value="naturaleza">Naturaleza</option>
		<option value="cuerpo">Cuerpo</option>
		<option value="verbos">Verbos</option>
		<option value="vocales">vocales</option>
		<option value="gestos">gestos</option>
		<option disabled>Lugares</option>
		<option value="paises">Países</option>
		<option value="provincias">Provincias</option>
		<option value="ciudades">Ciudades</option>
		<option disabled>Alimentos</option>
		<option value="verduras">Verduras</option>
		<option value="frutas">Frutas</option>
		<option value="otros">Otros comestibles</option>
	</select>
	<label for="video">ID del video: </label>
	<input type="text" name="video" id="video" required>
	<input type="submit" value="Agregar">
</form>
<br><h3>Añadir una noticia</h3>
    <form name="carga" id="carga" action="mensaje-de-carga.php" method="post" enctype="multipart/form-data">
       <label for="titulo">Titulo:</label><input type="text" id="titulo" name="titulo">
       <label for="cate">Categoría:</label>
            <select id="cate" name="cate">
       	       <option>Sobre Comunidad LSA</option>
       	       <option>Interés General</option>
            </select>
       <textarea name="contenidos" id="contenidos" cols="30" rows="10"></textarea>
       <script>
           CKEDITOR.replace('contenidos');
       </script>
       <br><input type="reset" value="Borrar todo" >
       <input type="button" value="Agregar" onClick="if(confirm('¿Está seguro de que quiere eliminar el usuario?')){ document.carga.submit()}">
     </form>