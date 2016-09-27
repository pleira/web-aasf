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
	<b>SATURNO</b>
	</header>
	
	<header id="texto">
<img id="imagen1" src="img_sistemasolar/saturno.jpg">
	
<p><br></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Segundo planeta más grande del 
sistema solar. Debe su nombre al dios romano del tiempo, padre de júpiter, 
en la mitología griega cronos y conocido como "El Señor de los Anillos". 
Con un pequeño telescopio de aficionado se puede distinguir claramente los 
característicos anillos. Fue observado por primera vez por Galileo en 1610.
En Saturno se forman los vientos más fuertes del Sistema Solar.
Tanto Júpiter como Saturno son muy parecido tanto en composición como en estructura 
interna.
<p><b>SATELITES</b></p>
Los más grandes son Minas, Encelado, Tetis, Dione, Rea, Titan, Hiperrion, Japeto y Febe.
Todo ellos están compuestos básicamente por hielo y silicatos y sin prácticamente 
atmósfera, a excepción de Titan, el más grande, compuesto de rocas e hielo y tiene 
una atmósfera más densa que la tierra.
<p><b>ANILLOS</b></p>
Los anillos principales son los llamados A y B, ambos separados por la división de 
Cassini. También existen varios anillos más tenues como son C, D, E y F.
<br></br>
<header id="datos">
<header id="cuadrodatos">
<p><b>Datos</b><p>
</header>
<ul><img src="img_sistemasolar/simbsaturno.png" align="right" width="5%" height="5%" hspace="10%">
<li><b>Mágnitud aparente:</b> -0,3</li>
<li><b>Diámetro ecuatorial:</b> 120.660 km</li>
<li><b>Gravedad:</b> 9,05 m/s2</li>
<li><b>Temperatura:</b> - 139 ºc / 190 ºC</li>
<li><b>Composición atmosférica:</b> hidrógeno 96%,helio 3%.</li>
<li><b>Periodo rotación:</b> 10 h 39 min</li>
<li><b>Periodo traslación:</b> 29 años 167 días</li>
<li><b>Distancia media al sol:</b> 1.427 millones de km(9,54 UA)</li>
</ul>
</header>
<p><b>Observación con prismáticos:</b><br> Solo se podrá observar un objeto
 alargado sin llegar a distinguir los anillos.<br></br> 
<b>Observación con Telescopio:</b><br> Incluso con pequeños telescopio se 
pueden distinguir perfectamente sus característicos anillos. También es muy 
interesante cuando el planeta se encuentra perpendicular  ya que parece desaparecer 
sus anillos. Tampoco hay que dejar de observar, noche tras noche su principal 
satélite "Titan" como va cambiando de posición. 
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
