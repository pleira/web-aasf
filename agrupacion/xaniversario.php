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
	<P align="center"><b><i>X ANIVERSARIO</i></b></p>
	</header>
	
	<p id="texto">
<img id="image1" src="img_agrupacion/xaniversario1.jpg">
Prácticamente sin darnos cuenta se produjo otro de los hechos más importantes de
 nuestra historia. Al llegar el año 2006 se cumplían 10 años de existencia. 
 Para celebrarlo se planificaron una serie de actos con los que compartimos 
 nuestra afición con el resto de ciudadanos.
<br>
La actividad de salida fue una multitudinaria observación astronómica en plena 
Plaza Iglesia con la imagen de los campanarios de la Iglesia Mayor de fondo, 
celebrada el 6 de Mayo.<br>
El 10 de Mayo se inauguraron dos exposiciones:
<br>- <b>“El Calendario”</b> de nuestro socio Antonio Carmona, en el Museo Histórico Municipal, 
en la que se hacía un recorrido por la historia y uso de los distintos calendarios 
utilizados por el hombre.
<br>-<b>“Destino: Marte”</b> de Oscar Augusto Rodríguez Baquero, promotor del Museo Español del 
Espacio, una visión gráfica de  Marte ante su inminente exploración y posible llegada 
del hombre.
<br>- <b>“10 Años acercándote las estrellas”</b> fue la tercera de las exposiciones. A través de 
una serie de paneles instalados en la Casa de la Cultura, se reflejaba los 10 años 
de existencia de la Agrupación Astronómica de San Fernando.
<br>Aparte de las exposiciones se celebraron 3 conferencias en el salón de actos de la 
Casa de la Cultura. Estas son:
<br>- El 12 de Mayo David Galadí Enríquez, astrofísico del Instituto de Astrofísica de 
Andalucía nos disertó sobre la contaminación lumínica y la búsqueda de planetas 
extrasolares.<img id="image2" src="img_agrupacion/xaniversario2.jpg">
<br>- El día 20 Juan Carlos Coma Sanmartín, director del Real Observatorio de la Armada 
nos explicó la influencia de los astros en las mareas oceánicas.

<br>- Nuestro Socio Antonio Carmona, licenciado en Química por la Universidad de Granada, 
expuso su conferencia bajo el título<b> “Eclipse de Sol; oscuridad y maravilla”</b>.

<br>Tras un mes de actividades, el 3 de junio se clausuran  todos los actos de este 
aniversario con la celebración de otra observación pública en el Parque Almirante 
Laulhé.
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
