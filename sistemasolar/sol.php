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
	<b>EL SOL</b>
	</header>
	
	<header id="texto">
<img id="imagen1" src="img_sistemasolar/sol.jpg">
	
<p><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;El sol es una estrella de tamaño mediano. 
Es una gran esfera de gas, en su núcleo se producen reacciones nucleares. 
Esta compuesta de un 75% de hidrógeno (el elemento más común  y más ligero del Universo)
, un 25 % de helio y un 1% de elementos más pesados como oxígeno, carbono, nitrógeno, 
 silicio etc.. El Sol tiene una vida de unos 4500 millones de años y vivirá 
 unos 5000 millones de años más. Cuando toque a su fin se convertirá en una gigante roja. 
 Crecerá hasta tal punto que engullirá a Mercurio, Venus y la Tierra, expulsará sus 
 capas exteriores creando una nebulosa, pero su núcleo se volverá caliente y denso, 
 conviertiendose en una enana blanca, entonces irá apagándose lentamente.<br>
<header id="datos">
<header id="cuadrodatos">
<b>Datos</b>
</header>
<ul><img src="img_sistemasolar/simbsol.png" align="right" width="5%" height="5%" hspace="10%">
<li><b>Mágnitud aparente:</b> -26</li>
<li><b>Diámetro:</b> 1390000 Km</li>
<li><b>Distancia a la Tierra:</b> 149600000 Km (1 UA)</li>
<li><b>Edad:</b> 45000 millones de años</li>
</ul>
</header>
<p><b>Como observar el Sol:</b><br> El sol nunca se de observar directamente ya 
que provocaría la ceguera inmediata.
Existen varias formas de observarlo si riesgo: Observación por proyección y 
observación directa con filtro. 
<p><b>Observación por proyección:</b><br> Consiste en proyectar sobre una plantilla 
blanca situada a una distancia del ocular y 
observarlo mediante dicha pantalla.
<p><b>Observación con filtro solar:</b><br>Se coloca un filtro solar en el objetivo 
del telescopio. Existen dos tipos de filtros:
Los de abertura total  y los de banda estrecha. El primero son láminas de plástico o 
cristal recubierta de metal. se coloca en su objetivo. Con esto se puede observar el 
Sol directamente a través del telescopio. Los de banda estrecha, citaremos el H-alfa. 
Este filtro capta la luz emitida por el hidrógeno.
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
