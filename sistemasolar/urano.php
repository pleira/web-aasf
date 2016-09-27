<!DOCTYPE html>
<?php
header('content-Type: text/html; charset=utf-8');
?>
<html lang="es">
<head>
<meta charset="iso-8859-1">
<meta name="description" content="Ejemplo de HTML5">
<meta name="keywords" content="HTML5, CSS3, JavaScript">
<title>AGRUPACIÓN ASTRONÓMICA DE SAN FERNANDO</title>
<link rel="stylesheet" href="../stylecomun.css">
<link rel="stylesheet" href="csssistemasolar.css">
</head>
<body>
<div id="agrupar">

<?php include('../menuprincipal.php'); ?>
<?php include('../cabecera.php'); ?>
<header id="seccionprincipal">
	<header id="menuizquierdo">
		<?php include('menuindicesistemasolar.php'); ?>
		
		
		<?php include('../menuizquierdo.php'); ?>
		
	</header>
	
	<header id="contenido">
	<header id="titulocontenido">
	<b>URANO</b>
	</header>
	
	<header id="texto">
<img id="imagen1" src="img_sistemasolar/urano.jpg">
	
<p><br></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Urano fue descubierto por Willian Herschel 
en 1781. Tiene un movimiento rotatorio inverso. Posee un 11 anillos formado por polvos
 y fragmentos solidos. Su atmósfera esta compuesta por hidrógeno, helio y metano, este 
 último le da su característico color azulado.
Los satélites más importantes son 5: Miranda, Ariel, Umbriel, Titania y Oberón.
<header id="datos">
<header id="cuadrodatos">
<p><b>Datos</b><p>
</header>
<ul><img src="img_sistemasolar/simburano.png" align="right" width="5%" height="5%" hspace="10%">
<li><b>Mágnitud aparente:</b> 5,6</li>
<li><b>Diámetro ecuatorial:</b> 51.118 km</li>
<li><b>Gravedad:</b> 7,77 m/s2</li>
<li><b>Temperatura Media:</b> - 214,2 ºC</li>
<li><b>Composición atmosférica:</b> Hidrógeno 83%, Helio 15%, Metano 1,99%</li>
<li><b>Periodo rotación:</b> - 17h 14m (Retrogrado)</li>
<li><b>Periodo traslación:</b> 684,1 años</li>
<li><b>Distancia media al Sol:</b> 2.871  millones de km</li>
</ul>
</header>

<p><b>Observación con prismáticos:</b><br> 

<p><b>Observación con Telescopio:</b><br> 
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
