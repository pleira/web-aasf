<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="iso-8859-1">
<meta name="description" content="Ejemplo de HTML5">
<meta name="keywords" content="HTML5, CSS3, JavaScript">
<title>AGRUPACIÓN ASTRONÓMICA DE SAN FERNANDO</title>
<link rel="stylesheet" href="../stylecomun.css">
<link rel="stylesheet" href="cssaniversario.css">
</head>
<?php
header('content-Type: text/html; charset=ISO-8859-1');
?>
<body>
<div id="agrupar">
<?php include('../menuprincipal.php'); ?>
<?php include('../cabecera.php'); ?>
<header id="seccionprincipal">
	<header id="menuizquierdo">
		<?php include('menuindiceagrupacion.php'); ?>
		
		
		
		<?php include('../menuizquierdo.php'); ?>
		
	</header>
<header id="contenidoaniversario">
	<header id="titulocontenidoaniversario">
	<P align="center"><b>ACTIVIDADES</b></p>
	</header>
	<header id="marcoprincipal1">
		<header id="imagen1aniversario">
		</header>
		<header id="texto1aniversario">
		</header>
	</header>
	<header id="marcoprincipal2">
		<header id="imagen2aniversario">
		</header>
		<header id="texto2aniversario">
		</header>
	</header>
	
</header>

<?php include('../menuderecho.php'); ?>
</header>
<footer id="piedepagina">
<header id="menuinferior">
<?php include('../menuprincipal.php'); ?>
</header>

	<p>Copyright &#169 1996-2016 - Agrupación Astronómica de San Fernando
	<p>Desarrollo y mantenimiento por Manuel Álvarez
</footer>
</div>
</body>
</html>
