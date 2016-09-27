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
	<b>VENUS</b>
	</header>
	
	<header id="texto">
<img id="imagen1" src="img_sistemasolar/venus.jpg">
	
<p><br></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Conocido por la mayoría de las antiguas 
civilizaciones, existen documentos de la biblioteca babilónica de ashurbanipal (1600 ac)
 en la que se constata la observación de este planeta. Su nombre actual procede de la 
 diosa romana del amor. Es el segundo planeta más cercano al Sol y el más parecido en 
 tamaño, masa y composición a la Tierra. Conocido como lucero del alba o lucero vespertino,
 se puede observar tanto al alba o en el ocaso y en su punto de mayor brillo se puede 
 observar en pleno día a simple vista. Como la Luna y Mercurio posee fases. Esta fases 
 fueron observadas por primera vez por Galileo en 1610.
Venus tiene una estructura muy parecida a la de la Tierra con un núcleo, manto y corteza.
 Venus tiene un atmósfera muy densa, compuesta por dióxido de carbono(CO2) y nitrógeno, 
 creando un efecto invernadero. Las tres capas de nubes compuesta por dióxido de azufre 
 y ácido sulfúrico cubren todo el planeta, imposibilitando la observación de detalles 
 de su superficie.
Posee el día más largo del Sistema solar con 243 días terrestres, girando en sentido 
de las agujas del reloj al contrario que el resto de los Planetas. 
<header id="datos">
<header id="cuadrodatos">
<p><b>Datos</b><p>
</header>
<ul><img src="img_sistemasolar/simbvenus.png" align="right" width="5%" height="5%" hspace="10%">
<li><b>Mágnitud aparente:</b> -4.4</li>
<li><b>Diámetro ecuatorial:</b> 12.104 km</li>
<li><b>Gravedad:</b> 8,87 m/s2</li>
<li><b>Temperatura:</b> - 45 ºc / 500 ºC</li>
<li><b>Composición atmosférica:</b> dióxido de carbono 96% nitrógeno 3,5 %.</li>
<li><b>Periodo orbital sideral:</b> 224.701 días</li>
<li><b>Periodo orbital sinódico:</b> 583,92 días</li>
<li><b>Distancia media al Sol:</b> 108,2 millones de km(0,72 UA)</li>
</ul>
</header>
<br>
<b>Observación con prismáticos:</b><br> Se puede observar las fases con al menos unos 
prismáticos de 20x80.<br></br> 
<b>Observación con Telescopio:</b><br> Las fases se observan al completo con un 
refractor 60 mm y reflectores de 100 mm. 
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
