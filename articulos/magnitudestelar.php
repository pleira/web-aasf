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
<link rel="stylesheet" href="articulosindividual.css">
</head>
<body>
<div id="agrupar">

<?php include('../menuprincipal.php'); ?>
<?php include('../cabecera.php'); ?>
<header id="seccionprincipal">
	<header id="menuizquierdo">
		<?php include('menuarticulos.php'); ?>
		
		
		<?php include('../menuizquierdo.php'); ?>
		
	</header>
	
	<header id="contenidoarticulos">
	<header id="titulocontenido">
	<P align="center"><b>EL BRILLO DE LAS ESTRELLAS. MAGNITUD ESTELAR</b></p>
	</header>
	
	<p id="textoarticulos">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
<ul id="margenlistas">
<li><b>Tipo O.-</b> Estrellas muy luminosas y jóvenes. Color azulado. 
Tienen las mayores temperaturas superficiales.</li>
<li><b>Tipo B.- </b>Estrellas muy luminosas y jóvenes. Color blancoazulado. 
Temperatura superficial algo menor que las de tipo O.</li>
<li><b>Tipo A.- </b>Estrellas luminosas y gigantes. Color blanco.</li>
<li><b>Tipo F.- </b>Estrellas de color amarillo claro.</li>
<li><b>Tipo G.- </b>Estrellas semejantes al Sol (clasificado como dG2). Color amarillo-verdoso.</li>
<li><b>Tipo K.- </b>Estrellas evolucionadas. Color naranja.</li>
<li><b>Tipo M.- </b>Estrellas de color rojo, siendo las estrellas de menor temperatura 
superficial. Son supergigantes, gigantes y enanas rojas.</li>
</ul><p id="textoarticulos">  Afinando un poco más, cada una de estas clases está subdividida por índices 
numerados del 0 al 9, así Sirio es de la clase espectral A1 y el Sol de la clase G2.
   Como se introdujo al principio del artículo, otra de las características de las 
estrellas es que no todas tienen la misma intensidad, o dicho de otro modo, no tienen 
la misma luminosidad. Esta característica no se les escapó a los científicos de la 
antigüedad, que aparte de tener una enorme dedicación tenían un cielo excelente sin 
contaminación lumínica. Con ésto, el registro más antiguo sobre magnitudes estelares 
fue elaborado por el griego Hiparco, allá por el siglo II a. de C. Contenía las 
posiciones de aproximadamente 1000 estrellas y las clasificó en 6 categorías o 
clases según tuvieran mayor o menor brillo. A las más brillantes les otorgó la 1ª 
magnitud, a las siguientes la 2ª y así sucesivamente hasta la 6ª magnitud, que engloba 
las estrellas más débiles perceptibles a simple vista. Conviene hacer hincapié aquí en 
el tema de la contaminación lumínica: hoy día es difícil encontrar un sitio en el que 
una estrella de 6ª magnitud sea visible sin ayuda de instrumento óptico alguno. 
Los árabes por supuesto también lo estudiaron y crearon otro catálogo, llamado 
Almagesto de Claudio Ptolomeo, del cual hemos heredado la costumbre de agrupar las 
estrellas en clases de brillo o magnitudes.
   Ya a mediados del siglo XIX Norman Pogson estableció la escala que lleva su 
nombre, en el que apunta que una estrella de 1ª magnitud tiene un brillo aparente 
2,512 veces superior que una de 2ª magnitud y así sucesivamente. Apreció por tanto 
que una estrella de 6ª magnitud era 100 veces menos brillante que una de la 1º magnitud.
 Pogson incluyó las estrellas Aldebarán y Altair, que hacía las veces de base de la 
 escala. A los astros que tienen un brillo superior a la 1ª magnitud (como el Sol, la 
 Luna y algunos planetas y  estrellas) se les asigna números negativos. Por tanto, a 
 menor número en esta escala, mayor brillo.
   Ahora bien, cuando hablamos que una estrella tiene tal o cual "magnitud" nos 
estamos refiriendo al brillo que presenta en el cielo, es decir, a la medida de su 
brillo "aparente". Esta luminosidad no refleja, en la mayoría de los casos, la 
auténtica luminosidad de una estrella; por tanto se creó el término de Magnitud 
absoluta, que se define como el brillo que tendría la estrella si estuviese situada 
a 32,6 años-luz (10 parsecs). Con esto, la estrella más brillante de nuestro cielo, 
Sirio, de magnitud aparente -1,46, pasaría a verse con una magnitud discreta de +1,4 
y nuestro Sol pasaría a tener una magnitud casi imperceptible de +4,8...Como 
curiosidad decir que entonces la estrella más brillante sería Rígel 
(en la constelación de Orión), que tendría una magnitud de -7,1, mucho más 
brillante que Venus.
  Con la llegada de los equipos modernos, somos capaces de llegar a ver, sin 
realizar un desembolso considerable, hasta la magnitud 14 siempre con cielos
muy oscuros. Por supuesto, si se hace un esfuerzo económico importante se puede 
ver aumentado considerablemente nuestro límite de percepción. Ahora tan solo 
necesitamos la misma dedicación a la hora de observar el firmamento que tenían 
en la antigüedad, pero esa es otra historia.
<p align="right">Autor: Oscar SF


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
