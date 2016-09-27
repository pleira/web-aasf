<!DOCTYPE html>
<?php
header('content-Type: text/html; charset=utf-8');
?>
<html lang="es">
<head>
<meta charset="iso-8859-1">
<meta name="description" content="Astronómia">
<meta name="keywords" content="HTML5, CSS3, JavaScript">
<title>AGRUPACIÓN ASTRONÓMICA DE SAN FERNANDO</title>
<link rel="stylesheet" href="../stylecomun.css">
<link rel="stylesheet" href="menuactividades.css">
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
	<b>PLANEA TU SALIDA</b>
	</header>
	
<header id="">
<br>
<p>
Para planificar una observación tenemos que tener en cuenta varios factores meteorológico:
<ul>
<li><b>Nubosidad.</b> Es el peor enemigo de los astrónomo, con cielo cubierto de nubes no podremos observar, necesitariamos
por lo menos grandes claros. </li>
<li><b>Humedad. </b>La humedad provoca la distorción de la imagen, además de empañar la óptica de los telescopios.</li>
<li><b>Viento. </b>Provoca vibraciones en los telescopios y los vientos en capas altas producen imágenes poco nítidas.</li>
<li><b>Temperatura. </b>La temperatura también es un factor muy importante. A baja temperatura la atmósfera estará más estable.
Pero no solo hay que tener encuenta la temperatura en la superficie, sino tambien en las capas altas de la atmósfera.</li>
<li><b>Seeing.</b></li></b>
</ul>
<p>
Para comprobar los factores anteriormente expuesto podremos consultar
diferentes páginas en internet. Para nuestro parecer las más fiable y completa es METEOBLUE.

<br><a href="https://www.meteoblue.com/es/tiempo/pronostico/seeing/alcal%c3%a1-de-los-gazules_espa%c3%b1a_2522162?utm_source=weather_widget&utm_medium=linkus&utm_content=seeing&utm_campaign=Weather%2BWidget" target="_blank">Meteoblue</a>. 
Podremos consultar el seeing, la humedad relativa, etc... Aquí mostramos los datos de Alcalá de los Gazules por
ser este lugar donde nuestra Agrupación suele realizar las salidas. Si hacéis click
en el enlace podréis elegir vuestro lugar de observación.<br><br>
<iframe id="meteoblue" src="https://www.meteoblue.com/es/tiempo/widget/seeing/alcal%c3%a1-de-los-gazules_espa%c3%b1a_2522162?geoloc=fixed">
</iframe>
<br>Otra página donde podemos consultar el tiempo, aunque bastante más básica para 
observaciones astronómica es en eltiempo.es.
<header id="eltiempo">
<div id="c_a10fb45de4f2fd962777123892f46da9" class="normal"></div><script type="text/javascript" src="https://www.eltiempo.es/widget/widget_loader/a10fb45de4f2fd962777123892f46da9"></script>
</header>
<header id="fasesluna">
<p>Otro de los factores importantes para la planificación de una salida es la fase en que se encuentra la luna.
Con luna llena será prácticamente imposible realizar unas observaciones desentes, ya que la luz que refleja del solo
la luna hacia la tierra, iluminará en exceso. Lo recomendado es programa la salida con luna nueva o una fase próxima a ella.
En cuarto creciente también se podrá observar, pero habrá que tener en cuenta que sobre las 6 de la tarde la luna se encuentra
en el zenit, así que hasta medianoche no se podrá observar.<br><br>
<center><script type="text/javascript" src="http://www.albinoblacksheep.com/earth-moon/embed.js"></script><noscript><a href="http://www.albinoblacksheep.com/earth-moon/">Earth and Moon Phase embed</a></noscript></center>
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
