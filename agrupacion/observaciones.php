<!DOCTYPE html>
<?php
header('content-Type: text/html; charset=iso-8859-1');
?>
<html lang="es">
<head>
<meta charset="iso-8859-1">
<meta name="author" content="Manuel Álvarez Acosta">
<meta name="description" content="pagina web de la agrupacion astronomica de san fernando">
<meta name="keywords" content="astronomia, astronomy, ciencia, aasf.es">
<title>AGRUPACIÓN ASTRONOMICA DE SAN FERNANDO</title>
<link rel="stylesheet" href="../stylecomun.css">
<link rel="stylesheet" href="cssagrupacion.css">

</head>
<body>
<div id="agrupar">
<?php include('../menuprincipal.php'); ?>
<?php include('../cabecera.php'); ?>
<header id="seccionprincipal">
	<header id="menuizquierdo">
		<?php include('menuindiceagrupacion.php'); ?>
		<?php include('../menuizquierdo.php'); ?>
	</header>
	
	<header id="contenido">
	<header id="titulocontenido">
	<P align="center"><b><i>OBSERVACIONES</i></b></p>
	</header>
	
	<p id="texto">


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A través de los telescopios de la Agrupación los socios y aficionados han podido
contemplar la gran variedad de objetos visibles en el cielo. El exceso de iluminación
que afecta a nuestras ciudades nos ha obligado a desplazarnos a lugares de observación
alejados de los centros de contaminación lumínica.
<img id="image1" src="img_agrupacion/cometa.jpg">
Podremos comenzar nuestro recorrido con la observación del cometa Hyakutake, primer
objeto visto antes de constituirnos. Otros cometas observados son el Hale-Bopp
(C/1995 O1), los cometas Linear (C/1999 S4 y C/2001 A2).
Los socios y aficionados han podido contemplar no solo el Sol y la Luna, sino que
nuestros telescopios han mostrado todos los planetas del sistema Solar, galaxias y
cúmulos estelares.
En estas observaciones además se han realizado otras operaciones como la 
astrofotografía, la medición de estrellas variables y el estudio de manchas solares.
No podemos cerrar este apartado sin recordar los kilómetros que debemos recorrer 
los aficionados a la astronomía para alejarnos de los núcleos de población generalmente
mal iluminados en busca de cielos oscuros. Han sido varios los lugares elegidos 
por los miembros de la Agrupación para realizar observaciones.  Naveros, el Pantano 
del Celemín en Benalup-Casas Viejas,el Picacho y Pegueraen Alcalá de los Gazules 
en pleno P.N. de los Alcornocales, Benamahoma… Lugares todos estos con un cielo 
prácticamente limpio de contaminación lumínica.
<br><br>
<!--
<img id="image2" src="">-->
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
