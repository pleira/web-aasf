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
	
	<header id="contenidomemoriagrafica">
	<header id="titulocontenidomemoriagrafica">
	<P align="center"><b><i>MEMORIA GRÁFICA</i></b></p>
	</header>
	
	
	
<div id="galeria">
<div id="galeria_imagen">
<img id="imgGaleria" src="memoriagrafica/1.jpg" /></div>
<div id="galeria_miniaturas">
<img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src='memoriagrafica/1.jpg';" src="memoriagrafica/1.jpg" />
<img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src='memoriagrafica/2.jpg';" src="memoriagrafica/2.jpg" />
<img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src='memoriagrafica/3.jpg';" src="memoriagrafica/3.jpg" />
<img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src='memoriagrafica/4.jpg';" src="memoriagrafica/4.jpg" />
<img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src='memoriagrafica/5.jpg';" src="memoriagrafica/5.jpg" />
<img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src='memoriagrafica/6.jpg';" src="memoriagrafica/6.jpg" />
<img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src='memoriagrafica/7.jpg';" src="memoriagrafica/7.jpg" />
<img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src='memoriagrafica/8.jpg';" src="memoriagrafica/8.jpg" />
<img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src='memoriagrafica/9.jpg';" src="memoriagrafica/9.jpg" />
<img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src='memoriagrafica/10.jpg';" src="memoriagrafica/10.jpg" />
<img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src='memoriagrafica/13.jpg';" src="memoriagrafica/13.jpg" />
<img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src='memoriagrafica/14.jpg';" src="memoriagrafica/14.jpg" />
<img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src='memoriagrafica/16.jpg';" src="memoriagrafica/16.jpg" />



</div>
</div>

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
