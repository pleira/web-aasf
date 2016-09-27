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
<link rel="stylesheet" href="../sistemasolar/csssistemasolar.css">
</head>
<body>
<div id="agrupar">

<?php include('../menuprincipal.php'); ?>
<?php include('../cabecera.php'); ?>
<header id="seccionprincipal">
	<header id="menuizquierdo">
	
		
		
		<?php include('../menuizquierdo.php'); ?>
		
	</header>
	
	<header id="contenido">
	<header id="titulocontenido">
	<b>ECLIPSE PENUMBRAL DE LUNA</b>
	</header>
	
	<header id="texto">
<img id="imagen1" src="../imagenes/eclipselunar.png">
	<p><br></b>
	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; El próximo viernes 16 de septiembre se producirá un eclipse penumbral de luna
que será visible desde toda Europa, África, Australia y parte del Pacífico. 
Este tipo de eclipse se produce cuando la luna entra en el cono de penumbra de 
la tierra. Este es el meno vistoso de todos los posibles eclipse. Se observará
un leve oscurecimiento de disco lunar.<br>
El eclipse comenzará a las 18:53 y terminará a las 22:50. Su máximo será a las
20:52 horas. <br>
Este será el último eclipse de este año. El próximo año, el primer eclipse será 10/11 
febrero de 2017, de nuevo un eclipse penumbral de luna visible desde España.<br>
<br>
Más información en <a href="http://www.armada.mde.es/ArmadaPortal/page/Portal/ArmadaEspannola/ciencia_observatorio/prefLang_es/03_Efemerides--03_Eclipses" target="_blank">Real Observatorio de la Armada</a>
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
