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
	<P align="center"><b><i>CONTACTO</i></b></p>
	</header>
	
	<p id="texto">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspNuestra Agrupación astronómica tiene su Sede en la Calle Mazarredo 
Nº 28 de la ciudad de San Fernando en la provincia de Cádiz 
(lat: 36 27 42 N - long 6 12 49 W).
Se encuentra registrada en el Mº. del Interior con el Nº 161.053 de 
Asociaciones y Entidades.
Si quieres conocer algo más acerca de nuestra agrupación, no dudes 
en ponerte en contacto con nosotros, a traves de nuestro correo electronico <a href="mailto:aasfweb@yahoo.es">aasfweb@yahoo.es</a> 
o acercate a nuestro local.
<br>El horario de apertura de nuestro local es: 
<b>Martes y viernes, de 20 a 21.30 horas<br><br>

<p><iframe id="ubicacion" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d401.06284171739964!2d-6.196945488547132!3d36.46957186225711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0dcd203b7e05fb%3A0xd24f208f1644ef41!2sCalle+Mazarredo%2C+28%2C+11100+San+Fernando%2C+C%C3%A1diz!5e0!3m2!1ses!2ses!4v1471711002885"  allowfullscreen></iframe>
</header>
<!--width="100%" height="100%" frameborder="0" style="border:0"-->
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
