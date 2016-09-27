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
	<P align="center"><b><i>TALLERES</i></b></p>
	</header>
	
	<p id="texto">





&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La astronomía es una ciencia con un alto porcentaje de práctica. Por este motivo
la Agrupación ha programado en estos años la  realización de talleres con los que
adquirir conocimientos que permitieran a los asistentes llevarlos a pie de telescopio.
Estos talleres han tenido objetivos tan variados como:
<ul>
<li>Curso Básico de Astronomía.</li>
<li>Manejo de telescopios.</li>
<li>Puesta en estación de telescopios.</li>
<li>Curso de astrofotografía</li>
</ul>
<p id="texto">
La asistencia a estos talleres y cursos ha sido libre y gratuita para todos los 
socios y aficionados que han querido participar en los mismos.
Nuestra agrupación realiza también estudios en diversas ramas de la astronomía como 
son la Campaña de cielo oscuro, estrellas variables, heliofísica y 
astrofotografía. Además se han dado nociones de dibujo astronómico y cálculos de 
oscuridad del cielo “seeing” para ver el nivel de oscuridad del mismo.
<br><br>
<!--<img id="image1" src="">
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
