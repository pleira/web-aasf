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
	<P align="center"><b>CALCULA EFEMÉRIDES ASTRÓNOMICA TÚ MISMO</b></p>
	</header>
	
	<p id="textoarticulos">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
 
<b>¿Para qué necesitamos de las efemérides?</b>
<br>Cualquier aficionado a la astronomía sabe de la importancia de contar con datos 
relativos a la salida, puesta, tránsito u otros fenómenos de los astros que le 
interesa observar. Estos datos los podemos obtener, habitualmente, de revistas, 
páginas web especializadas... o más raramente los podemos calcular nosotros mismos.
El cálculo de efemérides astronómicas es un campo bastante complejo. Cualquiera que 
haya echado un ojo a las "Efemérides Astronómicas" o al "Almanaque Naútico" editado 
por el Real Observatorio de la Armada u otras publicaciones análogas se habrá podido 
hacer una vaga idea. Si habeís tenido la suerte tener en vuestras manos el excelentísimo 
"Astronomical Algorithms" de Jean Meeus, os habréis dado cuenta de que, definitivamente, 
no es un hobby al alcance de cualquiera y los algoritmos, aún primorosamente explicados, 
no son fáciles de implementar.
Afortunadamente, alguien se ha tomado la molestia de hacerlo por nosotros, 
y ha puesto a nuestro alcance una herramienta que permite a alguien con modestos conocimientos 
de programación calcular efemérides con una precisión más que suficiente para el aficionado. 
Se trata del módulo pyephem <a href="http://rhodesmill.org/pyephem/index.html">http://rhodesmill.org/pyephem/index.html</a> para Python.
<br>Aunque tanto el módulo como el propio lenguage Python son multiplataforma, las indicaciones que 
os daré aquí están pensadas para ser aplicadas en entornos GNU/Linux, que tiene la ventaja 
(entre otros cientos de millones de ellas) de que el intérprete de Python viene instalado por 
defecto en la gran mayoría de distribuciones, por lo que no es necesario instalar prácticamente nada para funcionar.
<br><b>¿Por dónde empezar?</b><br>
Existen en la red multitud de tutoriales y libros de iniciación sobre Python que os pueden servir, como a mí, 
para iniciaros en la programación en este lenguaje. Os diré que mis inicios en Python fueron, precisamente, ante la 
necesidad que tenía de preparar las efemérides astronómicas para la antigua web de
la Agrupación Astronómica de San Fernando y os puedo asegurar que en una tarde tenía el script que permitía elaborar 
todas las efemérides planetarias para el mes y las de orto/ocaso solar y lunar, lo que os puede dar una idea de la sencillez del lenguaje, 
al menos para tareas simples.<br>
El propio <b>pyephe</b>, en su página web, dispone de unos sencillos tutoriales y una guía de referencia rápida que os servirá para iniciaros sin problemas.
<br><b>Pasos previos</b><br>
Lo primero que tendremos que hacer es instalar el paquete pyephem. Tenemos la suerte de que es posible hacerlo sin mayores complicaciones usando 
<b>easy_install</b> (disponible en el paquete <b>setuptools</b>), operación que haremos como superusuarios mediante la orden:<br>

<i>easy_install pyephem</i><br>

o bien, si preferimos pip:<br>

<i>pip install pyephem</i><br>

Una vez instalado el programa, podremos pasar a calcular efemérides desde el intérprete 
de python o desde un script que hayamos preparado.<br>
Como algunos sabréis, python es un lenguaje de programación orientado a objetos. 
Eso quiere decir que trabaja con elementos (clases de objetos) que comparten ciertas 
características (propiedades) y que disponen de ciertas funciones para manipularlos 
(normalmente se les llama métodos)<br>
<b>¡Manos a la obra!</b><br>
En nuestro caso, la librería <b>pyephem</b> pone a nuestra disposición dos clases de objetos, 
principalmente:
<p id="textoarticulos"><ul id="margenlistas">
<li>Los objetos de tipo <b>body</b>, o sea, cuerpos celestes. <b>Pyemhem</b> predefine unos cuantos: 
Los planetas, que tienen clase propia (Mercury(), Venus(), Mars()...) y un pequeño 
catálogo de estrellas, a las que nos referiremos como star('Antares'), por ejemplo.</li>
<li>Los objetos de tipo <b>observer</b>, es decir, un objeto que define un lugar y hora de 
observación.</li>
</ul><p id="textoarticulos">
La documentación es mucho más prolija que yo definiendo los métodos y propiedades de 
estos objetos, que pueden ser bastante complejos, de manera que yo me voy a limitar a 
describiros el proceso de generación de efemérides sencillo.<br>
Un advertencia previa: python distingue entre mayúsculas y minúsculas ¡¡Ojito!!<br>

Lo primero que tenemos que hacer, por supuesto, es abrir el intérprete de python, 
de una manera tan simple como abriendo un terminal y escribiendo

<br><i>python</i></br>
La consola nos dirá que python está preparado para recibir órdenes mediante el 
símbolo >>>.<br>
a continuación, lo primero que debemos hacer es importar el módulo mediante<br>

<i>>>>import ephem</i><br>

Si queremos evitarnos tener que usar el nombre del módulo cada vez que damos una 
orden, teclearemos:<br>

<i>>>>from ephem import *</i><br>
<b>Primeros cálculos</b>
<br>Supongamos que queremos calcular las efemerides de Saturno. Pues creamos un 
objeto para tal fin. A nuestro objeto le podemos poner el nombre que queramos, 
pero lo mejor es uno original como:
<br><i>>>>saturno=Saturn()</i>
Ahora, para poder consultar las propiedades de ese objeto, hemos de decirle a 
nuestro ordenador que las calcule mediante la orden compute. Si no pasamos una 
fecha a este método, toma la hora del sistema por defecto, lo cual no es de gran 
ayuda. Le tenemos que pasar una fecha o una fecha más una hora de la sigiente manera:
<br><i>>>>saturno.compute('2012/06/24 12:00:00')</i>
<br>Es preciso indicar las fechas en formato AAAA/MM/DD.
<br>Ahora dispondremos de un buen número de efemérides disponibles, entre las que cabría 
citar:<i>
<br>>>>print saturno.ra
<br>>>>print saturno.dec
<br>>>>print saturno.phase
<br>>>>print saturno.mag</i>
<br>Para obtener la ascensión recta, declinación, fase y magnitud de Saturno, respectivamente. 
Hay muchas otras propiedades disponibles, consulta la documentación del módulo.
<br><b>Avanzando: Cálculo de orto, ocaso y tránsito</b>
<br>De todos modos, esto tampoco nos es de gran ayuda para planificar nuestra observación. 
Para obtener ortos y ocasos tenemos que hacer uso de otro objeto: observer, esto es, 
el observador del fenómeno a calcular. Dispondremos entonces
de un grupo de funciones especializadas para el objeto de tipo observador que realizan 
este tipo de cálculos.
<br>Crear un objeto de tipo observador es muy sencillo. Por ejemplo, si consideramos 
San Fernando como un observador, sería:
<br><i>>>>sanFernando=Observer()</i>

<br>Ahora le indicamos, como mínimo, los parámetros de fecha, hora y latitud/longitud para 
definirlo correctamente. Es posible, no obstante, especificar detalles más profundos 
como época, temperatura ambiente o altitud.
<br><i>>>>sanFernando.lat='36:28:00'</i>
<br><i>>>>sanFernando.lon='-6:12:00'</i>
<br><i>>>>sanFernando.date='2012/06/28 23:23:00'</i>
<br>Habrás observado que es preciso indicar las coordenadas y ángulos con un formato un 
tanto peculiar. Esta es una característica del módulo pyephem un tanto incómoda, pero 
fácil de acostumbrarse a ella. El formato es grados:minutos:segundos, tanto para la 
latitud y la longitud como para otras medidas angulares (RA, Dec, etc.) y se lo debemos 
pasar como cadena, o sea, entre comillas.
<br>Si necesitas convertir una coordenada decimal en una sexagesimal, es preciso hacer lo 
siguiente: Se toma la parte entera de la coordenada, que serán los grados. La parte 
decimal (mantisa) la multiplicaremos por 60, con lo que tendremos otro número del que 
tomaremos su parte entera como los minutos y haremos la misma operación para obtener, 
finalmente los segundos, por ejemplo:
<br>36.46789º  = 36 grados
<br>0.46789x60 = 28.0734 minutos = 28 minutos
<br>0.0734x60  = 4.404 segundos.
<br>En nuestro caso, una vez convertido correctamente la coordenada sería '36:28:04'
Para calcular el tránsito, orto y ocaso de los objetos, procederemos de la siguiente 
manera, suponiendo que ya tenemos el observador creado y el objeto celeste también:
<br>Para el orto:
<br><b>observador.next_rising(cuerpo celeste)</b>
<br>Para el tránsito:
<br><b>observador.next_transit(cuerpo celeste)</b>
<br>Para el ocaso:
<br><b>observador.next_setting(cuerpo celeste)</b>
<br><b>Nuestro primer script con pyephem</b>
<br>Ahora, lo podemos poner todo junto y crear un pequeño script para calcular el orto, 
tránsito y ocaso de, por ejemplo, Saturno, el 2 de junio de 2012 en San Fernando(Cádiz).
 El script quedaría así:
</b><i>#!/usr/bin/env python

<br>import ephem #yo prefiero importar así el módulo por claridad

<br>Saturno=ephem.Saturn() #Creamos el objeto celeste

<br>sanFernando=ephem.Observer()    # Creamos el observador como objeto
<br>sanFernando.lat='36:20:00'      #Especificamos su latitud
<br>sanFernando.lon='-6:12:00'      #Especificamos su latitud (Ojo, latitudes oeste son negativas)
<br>sanFernando.date='2012/06/02'   #Especificamos la fecha de observación

<br>print 'Orto: ' , sanFernando.next_rising(Saturno)
<br>print 'Tránsito: ', sanFernando.next_transit(Saturno)
<br>print 'Ocaso: ', sanFernando.next_setting(Saturno)</i>
<br>Sólo nos queda guardar el script en un fichero con la extensión .py (por conveniencia, realmente no es necesario), por ejemplo efemerides.py y darle los permisos de ejecución necesarios:
<br><i>chmod +x efemerides.py</i>
<br>Ejecutamos el script y obtenemos (Todas las horas son UT):

<br>Orto:  2012/6/2 13:01:58
<br>Tránsito:  2012/6/2 20:23:51
<br>Ocaso:  2012/6/2 03:49:52

<br>Datos, que, si los comparáis con los que os proporciones un almanaque o alguna web de efemérides, comprobaréis que son bastante exactos. Es preciso señalar que puede haber diferencias, pues es posible especificar, para el observador, parámetros de altitud sobre el nivel del mar, presión atmosférica, etc., que pueden variar de un motor de cálculo a otro. Aparte de esto, habitualmente las efecmérides se presentan redondeadas al minuto, con lo cual puede existir pequeñas diferencias.
Pero, en definitiva, se trata de un método suficientemente preciso para las necesidades del aficionado.
<br>En futuros artículos intentaremos sacarle algo más de partido a <b>pyephem</b> y a lo que hemos aprendido hoy... ¡Hasta la próxima!
<br>
<br align="right">Autor: ElJorge


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
