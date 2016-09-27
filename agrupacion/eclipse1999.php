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
	<P align="center"><b><i>ECLIPSE DE SOL 1999</i></b></p>
	</header>
	
	<p id="texto">
<img id="image1" src="img_agrupacion/eclipsesolar.jpg">
El fin del milenio se aproximaba y con él un hecho que con la proyección en los medios 
de comunicación alcanzó una repercusión inédita.  El 11 de agosto de 1999 se produciría 
el último eclipse de Sol del milenio. Esto desató teorías apocalípticas y  gran interés 
por el evento. 
Nuestra Agrupación comenzó a preparar este eclipse con la realización de conferencias, 
participación en programas de radio y televisión (Andalucía Directo), artículos y 
entrevistas en prensa donde debido a la peligrosidad de este fenómeno, explicamos 
cómo observarlo.
Llegó el día del eclipse y con ella la famosa observación en la playa de Camposoto. 
Jamás imaginamos lo que nos íbamos a encontrar allí. Al llegar a la playa una 
interminable fila de curiosos esperaba el montaje de los medios de observación y 
el reparto de las escasas, al ver la expectación presente, 1000 gafas de protección 
que teníamos que repartir. Al final todo fue un éxito y al día siguiente nuestra 
actividad eclipsaba los titulares de la prensa: “10.000 personas acudieron a 
Camposoto para ver el Eclipse.
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
