<?php
	include("../html/header.html");
	include("../html/nav.html");
	include("conexion.php");
	conectar();
?>
<div class="content">
	<section>
		<article class="first">
			</ul>
			<h3>Novedades</h3>
			<ul>
			<a href="noticias.php?quemostrar=todas&num=1">Todas</a><br>
			<a href="noticias.php?quemostrar=lsa&num=1">Sobre Comunidad LSA</a><br>
			<a href="noticias.php?quemostrar=gen&num=1">Interés General</a><br>
			</ul>	
		<?php
		     //cuantos resultados voy a mostrar
		    $registros=2;
		    //controlo el inicio de los resultado
            $quemostrar=$_GET['quemostrar'];
            //mostrar todas las categorias
			if($quemostrar=="todas"){
				//pagina en la que estoy
				$pagina=$_GET['num'];
				//en donde inicio
				$inicio=($pagina-1)*$registros;
				//cuantos registros tenemos
				$num_registros=mysqli_num_rows($GLOBALS['conexion']->query("SELECT id FROM noticias"));
				//seleccionar las noticias de la base de  datos
				$mostrar=$GLOBALS['conexion']->query("SELECT fecha,titulo,contenido,categoria FROM noticias ORDER BY fecha DESC LIMIT $inicio,$registros");
				//numero de paginas para el indice
				$num_paginas=ceil($num_registros/$registros);
			    while($filas=$mostrar->fetch_array()){
				    if($filas['categoria']=="Sobre Comunidad LSA"){
                        echo '<br>'.$filas['titulo'].'<pre><i>'.$filas['fecha'].'  -  <a href="">'.$filas['categoria'].'</a></i></pre><br>'.$filas['contenido'];
                    }else if($filas['categoria']=="Interés General"){
                        echo '<br>'.$filas['titulo'].'<pre><i>'.$filas['fecha'].'  -  <a href="">'.$filas['categoria'].'</a></i></pre><br>'.$filas['contenido'];
                    }
			    }
			    //dibujo los enlaces a mas resultados
                echo '<br><br><br>Mostrando resultados página : <br>';
                if($pagina>1){
                	echo ' <a href="noticias.php?quemostrar=todas&num='.($pagina-1).'"> <<< Anterior - </a> ';
                }
			    for($i=1;$i<=$num_paginas;$i++){
			    	//no creo el enlace a la pagina en la que ya estoy
			    	if($i==$pagina){
			    		echo $i.' - ';
			    	}else{
			    	   	echo '<a href="noticias.php?quemostrar=todas&num='.$i.'">'.$i.' - </a> ';
			    	}
			    }
			    if($pagina<$num_paginas){
			    	echo ' <a href="noticias.php?quemostrar=todas&num='.($pagina+1).'"> Siguiente >>></a> ';
			    }
			 //mostrar noticias sobre comunidad lsa
			}else if($quemostrar=="lsa"){
				//pagina en la que estoy
				$pagina=$_GET['num'];
				//en donde inicio
				$inicio=($pagina-1)*$registros;
				//numero total de registros
				$num_registros=mysqli_num_rows($GLOBALS['conexion']->query("SELECT id FROM noticias WHERE categoria LIKE 'Sobre Comunidad LSA'"));
				//seleccionar las noticias de la base de  datos sobre comunidad lsa
				$mostrar=$GLOBALS['conexion']->query("SELECT fecha,titulo,contenido,categoria FROM noticias WHERE categoria LIKE 'Sobre Comunidad LSA' ORDER BY fecha DESC LIMIT $inicio,$registros");
				//numero de paginas para el indice
				$num_paginas=ceil($num_registros/$registros);
				while($filas=$mostrar->fetch_array()){
					if($filas['categoria']=="Sobre Comunidad LSA"){
                        echo '<br>'.$filas['titulo'].'<pre><i>'.$filas['fecha'].'  -  <a href="">'.$filas['categoria'].'</a></i></pre><br>'.$filas['contenido'];
                    }
				}
				//dibujo los enlaces a mas resultados
                echo '<br><br><br>Mostrando resultados página : <br>';
                if($pagina>1){
                	echo ' <a href="noticias.php?quemostrar=lsa&num='.($pagina-1).'"> <<< Anterior - </a> ';
                }
			    for($i=1;$i<=$num_paginas;$i++){
			    	//no creo el enlace a la pagina en la que ya estoy
			    	if($i==$pagina){
			    		echo $i.' - ';
			    	}else{
			    	   	echo '<a href="noticias.php?quemostrar=lsa&num='.$i.'">'.$i.' - </a> ';
			    	}
			    }
			    if($pagina<$num_paginas){
			    	echo ' <a href="noticias.php?quemostrar=lsa&num='.($pagina+1).'"> Siguiente >>></a> ';
			    }
			//mostrar noticias de interes general
			}else if($quemostrar=="gen"){
				//pagina en la que estoy
				$pagina=$_GET['num'];
				//en donde inicio
				$inicio=($pagina-1)*$registros;
				//numero total de registros
				$num_registros=mysqli_num_rows($GLOBALS['conexion']->query("SELECT id FROM noticias WHERE categoria LIKE 'Interés General'"));
				//seleccionar las noticias de la base de  datos sobre comunidad lsa
				$mostrar=$GLOBALS['conexion']->query("SELECT fecha,titulo,contenido,categoria FROM noticias WHERE categoria LIKE 'Interés General' ORDER BY fecha DESC LIMIT $inicio,$registros");
				//numero de paginas para el indice
				$num_paginas=ceil($num_registros/$registros);
				while($filas=$mostrar->fetch_array()){
					if($filas['categoria']=="Interés General"){
                        echo '<br>'.$filas['titulo'].'<pre><i>'.$filas['fecha'].'  -  <a href="">'.$filas['categoria'].'</a></i></pre><br>'.$filas['contenido'];
                    }
				}
				//dibujo los enlaces a mas resultados
                echo '<br><br><br>Mostrando resultados página : <br>';
                if($pagina>1){
                	echo ' <a href="noticias.php?quemostrar=gen&num='.($pagina-1).'"> <<< Anterior - </a> ';
                }
			    for($i=1;$i<=$num_paginas;$i++){
			    	//no creo el enlace a la pagina en la que ya estoy
			    	if($i==$pagina){
			    		echo $i.' - ';
			    	}else{
			    	   	echo '<a href="noticias.php?quemostrar=gen&num='.$i.'">'.$i.' - </a> ';
			    	}
			    }
			    if($pagina<$num_paginas){
			    	echo ' <a href="noticias.php?quemostrar=gen&num='.($pagina+1).'"> Siguiente >>></a> ';
			    }
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