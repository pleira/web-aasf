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
	<P align="center"><b><i>CONFERENCIAS Y CHARLAS</i></b></p>
	</header>
	
	<p id="texto">


    <img id="image1" src="img_agrupacion/conferencias.png">Una de las  formas de difundir nuestra afición es a través de la realización de 
Conferencias y Charlas coloquio impartidas por socios o personas especializadas en
algún tema en concreto.

Temas tan diversos como la astronáutica, la basura espacial, los eclipses, los 
viajes de Colón y la astronomía, la exploración de Marte han sido desarrollados en 
nuestros ciclos de conferencias que han permitido a los aficionados conocer un poco 
más esta apasionante ciencia.
Entre las conferencias realizadas por nuestra agrupación podemos destacar dos de ellas:<br>
- El día 7 de Mayo de 2004 primer Ciclo de Conferencias organizado por 
nuestra Agrupación, bajo el título <b>"LA TREPIDANTE AVENTURA DEL ESPACIO"</b>. 
Las conferencias fueron desarrolladas por D. Oscar A. Rodríguez, promotor del 
proyecto del Museo Español del Espacio.
- El ciclo de conferencias ofrecido en 1999 como preparación 
del famoso eclipse de sol que iba a ocurrir en agosto de ese mismo año y que tuvo 
tanta repercusión mediática. 
<br><br>Si necesitas organizar alguna conferencia no dudes en <a href="contacto.php">contactar</a> con nosotros.
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
