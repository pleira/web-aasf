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
	<b>MARTE</b>
	</header>
	
	<header id="texto">
<img id="imagen1" src="img_sistemasolar/marte.jpg">
	<p><br></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cuarto planeta del Sistema Solar. 
	Su nombre proviene de el dios de la guerra de la mitología romana. Conocido 
	por el planeta rojo por la composición de su superficie de oxido de hierro.
Su atmósfera esta compuesta de dióxido de carbono.
Tiene dos satélites, que en realidad su densidad y morfología hace pensar que son 
asteroides procedente del Cinturón de Asteroide y capturados por Marte. Fobos  
(terror en griego) es el más cercano y grande, y Deimos (pánico en griego) el más lejano
 y pequeño. Fueron descubierto por Asaph en 1877. 
En Marte se encuentra la montaña más grande del Sistema Solar, el monte Olimpo con 
27.000 km, tres ves más alto que el Everest.
Su eje de rotación es muy parecido al de la tierra por eso sus estaciones son muy 
parecida a las terrestres.
 Galileo fue el primero en observarlo.
La superficie de Marte posee cráteres de impactos, campos de lava, volcanes, dunas 
de arenas, etc..
Su composición fundamental es de basalto volcánico con un alto contenido en óxido 
de hierro.
Su atmósfera es muy tenue, compuesta de 95% de dióxido de carbono, 2,7 % nitrógeno, 
1,6% argón y trazas de oxígeno molecular.
Marte posee asteroides troyanos. Los tres reconocido por UAI  son: 5261 ''Eureka'', 
101429 VF31 y 121514VJ7.
<br></br>
<header id="datos">
<header id="cuadrodatos">
<p><b>Datos</b><p>
</header>
<ul><img src="img_sistemasolar/simbmarte.png" align="right" width="5%" height="5%" hspace="10%">
<li><b>Mágnitud aparente:</b> -2,8</li>
<li><b>Diámetro ecuatorial:</b> 6.794 km</li>
<li><b>Gravedad:</b> 3,8 m/s2</li>
<li><b>Temperatura:</b> - 87 ºc / 20 ºC</li>
<li><b>Composición atmosférica:</b> dióxido de carbono 95,3% nitrógeno 2,7%, argón 1,6%, oxígeno 0,1%.</li>
<li><b>Periodo rotación:</b> 24 h 37 min 23 s</li>
<li><b>Periodo traslación:</b> 687 días</li>
<li><b>Distancia media al sol:</b> 227,94 millones de km(1,52 UA)</li>
</ul>
</header>
<br></br>
<p><b>Observación con prismáticos:</b></p> Su diametro no permite apreciar detalles de la superficie.<br></br> 
<p><b>Observación con Telescopio:</b></p> Con telescopios medios se pueden distinguir los casquetes polares y detalles de las grandes zonas de la franja ecuatorial. 

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
