<!DOCTYPE html>
<html lang="es">
<head>
	<!--  metodo de codificacion -->
	<meta charset="utf-8">
	<!-- Inline (Pueden ir en linea) y 
	block  (Son cajas) en vez de float y vertical iline  -->	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name = "description" content="<?php  page_description(); ?>" />	
    <title><?php page_title(' - ', '[WEBSITE_TITLE][SPACER][PAGE_TITLE]'); ?></title> 
	<script src="js/modernizr.custom.40951.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,800italic,400,700' rel='stylesheet' type='text/css'>		
	<link rel="stylesheet" href="<?php  echo TEMPLATE_DIR; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php  echo TEMPLATE_DIR; ?>/css/estilos.css" />

</head>
<body>
<!--  ============ -->	
	<header>
		<figure id="logo">
			<img src="media/logo.png" alt="MetanoiaRadio.com" />
			
		</figure>
<!--  =google solo recomienda un h1 para poder ranquear =========== -->			
		<h1>Transformando tu Vida</h1>
		<figure id="avatar">
			<img src="media/img02.png" alt="Transformando tu Vida" />
		</figure>
	</header>
	<nav>
		<ul>
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Noticias</a></li>
			<li><a href="#">Radio Online</a></li>
			<li><a href="#">Contacto</a></li>
			<li id="publicar_nav">
				<a href="#" class="icon-audifono">Lo que suena ahora</a>
			</li>			
		</ul>
	</nav>



<section id="contenido">
	<article class="item">
		<figure class="imagen_item">
			<img src="media/img01.png" />
			
		</figure>
		<h2 class="titulo_item">
			<a href="#">Nuevas noticias</a>
		</h2>
		<div class="autor_item">
			Por: <a href="#">@orlandoreynoso</a>	
		</div>
		<div class="datos_item">
			<a href="#" class="tag_item">Musica</a>
			<span class="fecha_item">
				Hace <strong>5</strong> Minutos
			</span>
					
		</div>
		<div class="votacion">
		<a href="#" class="up icon-microfono"></a>
		882
		<a href="#" class="down icon-musica"></a>				
		<a href="#" class="comentario_item icon-audifono">3</a>
		<a href="#" class="guardar_item icon-compartir"></a>	
		</div>
	</article>
</section>

<!--  
====== 
Para dividir secciones 	(secciones de contenido) 
Etiquetas semánticas
=== -->	

	<section>
		<article>


			<video id="orsistemas" width="640" height="320" controls>

<!--   h264  === -->		
  <source src="video.mp4" type='video/mp4; codecs="avc1.42E01E,mp4a.40.2"'>
  <source src="video.webm" type='video/webm; codecs="vp8,vorbis"'>

			</video>
			(Video HTML5)
		</article>
<!--  aside no está hecho para ponerlo a lado (=Derecho o izquierda,,, puede ir abajo, abrriba etc.=========== -->			
		<aside>(Botones sociales)</aside>
		<article>(CHAT)</article>		
	</section>

	<footer>
		<p>
		<strong>
			Desarrollado por @orlandoreynoso
		</strong>
		</p>
		<p>MetanoiaRadio.com 2014</p>
	</footer>	
</body>
</html>