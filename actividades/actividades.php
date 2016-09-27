<!DOCTYPE html>
<?php
header('content-Type: text/html; charset=utf-8');
?>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="Ejemplo de HTML5">
<meta name="keywords" content="HTML5, CSS3, JavaScript">
<title>AGRUPACIÓN ASTRONOMICA DE SAN FERNANDO</title>
<link rel="stylesheet" href="../stylecomun.css">
<link rel="stylesheet" href="menuactividades.css">
</head>

<body>
<div id="agrupar">
<?php include('../menuprincipal.php'); ?>
<?php include('../cabecera.php'); ?>
<header id="seccionprincipal">
	<header id="menuizquierdo">
		<?php include('menuactividades.php'); ?>
		<?php include('../menuizquierdo.php'); ?>
		
	</header>
<header id="contenidoactividades">
	<header id="titulocontenidoactividades">
	<P align="center"><b><i>ACTIVIDADES</i></b></p>
	</header>
	<header id="marcoprincipal1">
		<header id="imagen1actividades">
		</header>
		<header id="texto1actividades"><b><i>Jueves 8 de septiembre</i></b><br><br>
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbspPrimera actividad con la que celebramos nuestro 
Aniversario. </b><br>
<br> 
- 20:00 horas. Conferencia "Paseemos por el Sistema solar" por<br>&nbsp;&nbsp&nbsp;&nbspD. Francisco Fernández Díaz.
<br>&nbsp;&nbsp&nbsp;&nbspLugar: Centro de Congreso de San Fernando (Cádiz). <br>
&nbsp;&nbsp&nbsp;&nbspEntrada: Libre hasta completar aforo.<br>
<br>- 21:30 horas. Observación Astronómica en la Plaza de la Iglesia. 
<br><br><b>¡Te esperamos!</b>
		
		
		

		</header>
	</header>
	
	<header id="marcoprincipal2">
		<header id="imagen2actividades">
		</header>
		<header id="texto2actividades">&nbsp;&nbsp;&nbsp;&nbsp;&nbspEl próximo <b>viernes 9 de septiembre</b> celebramos 
la última velada astronómica de 
este verano en el Centro de Visitante Bahía de Cádiz. Más de 300 personas han disfrutado ya en 2016 de esta actividad en 
el Centro de Visitantes. Nuestra Agrupación es la responsable de llevar a cabo 
la actividad.<br></br>
Más información y reservas: <a href="http://cvbahiacadiz.com/actividades/velada-astronomica-9-septiembre">Centro Visitante Bahía de Cádiz</a>
		</header>
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
