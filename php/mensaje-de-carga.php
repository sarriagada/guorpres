<?php
	include("../html/header.html");
	include("../html/nav.html");
	include("conexion.php");
	conectar();
?>
<div class="content">
	<section>
		<article class="first">
			<?php	 
               if($_POST['contenidos']!="" && $_POST['titulo']!=""){
               	    //recojo datos formulario
                    $fecha=time();
                    $titulo="<h3>".$_POST['titulo']."</h3>";
                    $contenido=$_POST['contenidos'];
                    $categoria=$_POST['cate'];
                    //controlo por titulo o contenido si lo que se quiere ingresar no se encuentra ya en la base de datos
                    $yaesta=$GLOBALS['conexion']->query("SELECT*FROM noticias WHERE contenido LIKE '$contenido' OR '$titulo'");
                    //en caso de que no exista
                    if(!mysqli_data_seek($yaesta, 0)){
                         //agregar la noticia
                    	 $agregar="INSERT INTO noticias(fecha, titulo, contenido, categoria) VALUES(FROM_UNIXTIME('$fecha'), '$titulo', '$contenido', '$categoria')";
                    	 //si los datos se agregaron correctamente
                        if(mysqli_query($GLOBALS['conexion'], $agregar)){
                           echo '<b>El nuevo contenido se ha cargado correctamente a la base de datos.</b><br><a href="control.php">Volver</a>';
                        }else{
                            //si no se pudieron cargar los datos en la base de datos
                            echo '<b>Error: no se ha podido llevar a cabo la operación.El nuevo contenido no se ha podido cargar a la base de datos.</b><br><a href="control.php">Volver</a>';
                        }
                    }else{
                    	//si el contenido que se intenta ingresar ya esta en la base de datos
                    	echo'<b>El titulo o contenido ya existen en la base de datos</b><br><a href="control.php">Volver</a>';
                    }
               }else{
               	    if($_POST['titulo']=="")
               	        echo "<b>No se puede insertar noticia sin titulo.</b>";
               	    if($_POST['contenidos']=="")
               	        echo "<b>No se puede insertar noticia sin contenido.</b>";
               	    echo '<br><a href="control.php">Volver</a>';
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