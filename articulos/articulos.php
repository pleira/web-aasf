<!DOCTYPE html>
<?php
header('content-Type: text/html; charset=utf-8');
?>
<html lang="es">
<head>
<meta charset="iso-8859-1">
<meta name="description" content="Ejemplo de HTML5">
<meta name="keywords" content="HTML5, CSS3, JavaScript">
<title>AGRUPACIÓN ASTRONOMICA DE SAN FERNANDO</title>
<link rel="stylesheet" href="../stylecomun.css">
<link rel="stylesheet" href="cssarticulos.css">
</head>
<body>
<div id="agrupar">

<?php include('../menuprincipal.php'); ?>
<?php include('../cabecera.php'); ?>

<header id="seccionprincipal">
	<header id="menuizquierdo">
		<?php include('menuarticulos.php'); ?>
		
		
		<?php include('../menuizquierdo.php'); ?>
		
	</header>
	
	<header id="contenido">
	<header id="titulocontenido">
	<P align="center"><b>ARTÍCULOS</b></p>
	</header>
	
	
	<!--<p id="texto">-->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
<header id="articulos1">
	<header id="tituloarticulos1">
	<a href="calculoefemerides.php">Calcula efemérides astronómicas tú mismo.</a>
	</header>
	<header id="contenidoarticulos1">
	&nbsp;&nbsp;&nbsp;&nbspCualquier aficionado a la astronomía sabe de la importancia de contar con datos 
	relativos a la salida, puesta, tránsito u otros fenómenos de los astros
	que le interesa observar. Estos datos los podemos obtener, habitualmente de revistas,
	páginas web especializadas... o más raramente los podemos calcular nosotros mismos.
	
	</header>
	<header id="autorarticulos1">
	Autor: ElJorge
	</header>
</header>

<header id="articulos1">
	<header id="tituloarticulos1">
	<a href="magnitudestelar.php">El brillo de las estrellas. Magnitud estelar.</a>
	</header>
	<header id="contenidoarticulos1">
	&nbsp;&nbsp;&nbsp;&nbspCuando las suaves tonalidades del crepúsculo vespertino dan paso a un azul intenso, 
	el cielo comienza a llenarse de puntos luminosos que poco van produciendo cierta
	sensación de sobrecogimiento. Rápidamente nos percatamos de que no todos tienen la misma 
	intensidad, ni tampoco el mismo color.
	
	</header>
	<header id="autorarticulos1">
	Autor: Oscar S F
	</header>
</header>
<header id="articulos1">
	<header id="tituloarticulos1">
	<a href="ocularestelevue.php">Oculares Televue Ethos y Nagler Zoom.</a>
	</header>
	<header id="contenidoarticulos1">
	&nbsp;&nbsp;&nbsp;&nbspComo algunos sabréis, hace algún tiempo decidí renovar
	mi serie de osculares con los famosos Ethos de la firma norteamericana TeleVue.
	
	
	</header>
	<header id="autorarticulos1">
	Autor: Víctor Martínez
	</header>
</header>


</header>

<?php include('../menuderecho.php'); ?>
</header>
<footer id="piedepagina">
<header id="menuinferior">
<?php include('../menuprincipal.php'); ?>
<?php
include('../cooke.php');
?>
</header>

	<p>Copyright &#169 1996-2016 - Agrupación Astronómica de San Fernando
	<p>Desarrollo y mantenimiento por Manuel Álvarez
</footer>
</div>
</body>
</html>
