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
<link rel="stylesheet" href="stylecomun.css">
<link rel="stylesheet" href="index.css">
<script type="text/javascript" src="jquery.js"></script>
</head>

<body>
<div id="agrupar">

<nav id="menu">
<ul id="menuprincipal">
	<li><a href="index.php">Inicio</a></li>
	<li><a href="actividades/actividades.php">Actividades</a></li>
	<li><a href="agrupacion/agrupacion.php">Agrupación</a></li>
	<li><a href="articulos/articulos.php">Artículos</a> </li>
	<li><a href="historia/historia.php">Historia</a></li>
	<li><a href="sistemasolar/jupiter.php">Sistema Solar</a></li>
	<li><a href="constelaciones/constelaciones.php">Constelaciones</a></li>
	<li><a href="agrupacion/contacto.php">Contacto</a></li>
</ul>
</nav>
<header id="cabeceramenu">
</header>
<!--<header id="cartelaniversario">
<a href="actividades/actividades.php"><img src="imagenes/cartelaniversario.jpg" width="100%" height="100%"></a>
</header> -->
<header id="seccionprincipalindex">
<header class="noticias">

<a href="actividades/actividades.php"><div class="slider">
	<header id="logoindex">
	</header>
	
	<div id="slider">
	<div><img src="imagenes/aniversario1.png" width="100%" height="100%"></div>
	<div><img src="imagenes/aniversario2.png" width="100%" height="100%"></div>
	<div><img src="imagenes/aniversario3.png" width="100%" height="100%"></div>
	</div></a>
	

</div>
<script type="text/javascript">
	$(function(){
	$('#slider div:gt(0)').hide();
	setInterval(function(){
	$('#slider div:first-child').fadeOut(2000)
	.next('div').fadeIn(2000)
	.end().appendTo('#slider');
	},4000)
	})
</script>
</header>
<a href="articulos/calculoefemerides.php"><section id="articuloindex1">
	
<br><img id="imgcalculoefemeridesindex" src="imagenes/efemerides.png">CÁLCULO DE EFEMÉRIDES<br>
	<br><br>¿Para qué necesitamos de las efemérides?</b><br>
<br>Cualquier aficionado a la astronomía sabe de la importancia de contar con datos 
relativos a la salida, puesta, tránsito u otros fenómenos de los astros que le 
interesa observar.... 
</section></a>
<a href="agrupacion/agrupacion.php"><section id="conocenos">
<br>¿Quiénes somos?<br>
<br>Entra y descubre un poco de nuestra historia.
<header id="imgconocenos">
</header>

</section></a>
<a href="actividades/planeatusalida.php"><section id="planeatusalida">


PREVISIÓN METEOROLÓGICA<br><br>
<img src="imagenes/previsionmeteorologica.png" width="80px" height="80px">
<br><br>Encuentra todas las previsiones de viento, humedad, nubosidad, temperatura y seeing, para
programar tu salida.

</section></a>
<section id="galeriaindex">
</section>
<header id="separacionindex">
AGRUPACIÓN ASTRONÓMICA DE SAN FERNANDO (CÁDIZ)
</header>
<header id="sccsecundaria1">
	<a href="efemerides/eclipselunarpenumbral.php">
	<header id="scc1primera">
		<header id="imgscc1primera">
		</header></a>
		<header id="titulonoticias">
		Próximo viernes 16 septiembre 2016.<br> Eclipse lunar penumbral visible desde Europa.</header>
	</header>
	<header id="scc1segunda">
		<a href="http://www.armada.mde.es/ArmadaPortal/page/Portal/ArmadaEspannola/ciencia_observatorio/prefLang_es/" target="_blank"><header id="imgscc1segunda">
		</header></a>
		<header id="titulonoticias">
		Real Instituto y Observatorio de la Armada
		</header>
	</header>
	<header id="scc1tercera">
		<a href="http://www.heliofisicafjc.blogspot.com.es" target="_blank"><header id="imgscc1tercera">
		</header></a>
		<header id="titulonoticias">
		Observación solar de nuestro Socio Fco. Jiménez
		</header>
	</header>
<?php
include('cooke.php');
?>
</header>
</header>
<!--<header id="sccsecundaria2">
	<header id="scc2primera">
	</header>
	<header id="scc2segunda">
	</header>
	<header id="scc2tercera">
		<header id="scc2tercera1">
		</header>
		<header id="scc2tercera2">
		</header>
		<header id="scc2tercera3">
		</header>
	</header>

</header>-->
<!--
<header id="menuinferior">
<nav id="menu">
<ul id="menuprincipal">
	<li><a href="../index2.html">Inicio</a></li>
	<li><a href="">Agrupaci�n</a> </li>
	<li><a href="">Art�culos</a> </li>
	<li><a href="">Historia</a></li>
	<li><a href="">Systema Solar</a></li>
	<li><a href="">Constelaciones</a></li>
	<li><a href="">Contacto</a></li>
</ul>
</nav>

</header>-->
<?php
include('cooke.php');
?>

<footer id="piedepagina">
	<p>Copyright &#169 1996-2016 - Agrupación astronómica de San Fernando
	<p>Desarrollo y mantenimiento por Manuel Álvarez
</footer>
</div>
</body>
</html>
