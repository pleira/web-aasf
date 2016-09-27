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
	<b>MERCURIO</b>
	</header>
	
	<header id="texto">
<img id="imagen1" src="img_sistemasolar/mercurio.jpg">
	<p><br></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Es el planeta más cercano al sol 
	y el más pequeño del Sistema Solar. Conocido desde la antigüedad, su nombre 
	proviene del dios romano del comercio, hijo de júpiter.
Su superficie es muy parecida a la de la Luna, con muchos cráteres. Se cree que 
su núcleo esta formado por hierro. Su periodo de rotación es mayor que el de traslación.
 Solo se puede observar al atardecer o al amanecer muy cerca del horizonte, como la 
 Luna y Venus presenta fases. 
<br></br>
<header id="datos">
<header id="cuadrodatos">
<p><b>Datos</b><p>
</header>
<ul><img src="img_sistemasolar/simbmercurio.png" align="right" width="5%" height="5%" hspace="10%">
<li><b>Mágnitud aparente:</b> -1.9</li>
<li><b>Diámetro:</b> 4879,4 km</li>
<li><b>Gravedad:</b> 2.78 m/s2</li>
<li><b>Temperatura:</b> - 183 ºc - 427 ºC</li>
<li><b>Composición atmosférica:</b> dióxido de carbono 96% nitrógeno 3,5%.</li>
<li><b>Composición:</b> potasio 31% sodio 25% oxigeno 9,5%, otros..</li>
<li><b>Periodo orbital sideral:</b>87 días 23,23 horas</li>
<li><b>Periodo orbital sinodico:</b> 115,88 días</li>
<li><b>distancia media al sol:</b> 57.910.000 km</li>
</ul>
</header>
<p><b>Observación con prismáticos:</b><br> Su observación con prismaticos sea muy provechosa.<br></br> 
<b>Observación con Telescopio:</b><br> Para su observación será necesario al menos un refractor de 100 mm o un newtoniano de al menos 20 mm.

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
