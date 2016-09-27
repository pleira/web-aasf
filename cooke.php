    <div id="barracookies">
    Usamos cookies propias y de terceros que entre otras cosas recogen datos sobre 
	sus hábitos de navegación para mostrarle publicidad personalizada y realizar 
	análisis de uso de nuestro sitio.
    Si continúa navegando consideramos que acepta su uso. <a href="javascript:void(0);" onclick="var expiration = new Date(); expiration.setTime(expiration.getTime() + (60000*60*24*365)); setCookie('avisocookies','1',expiration,'/');document.getElementById('barracookies').style.display='none';"><b>OK</b></a> <a href="informacioncookes.php/" target="_blank">Más información</a>
    </div>
	 
    	    <!-- Gestión de cookies-->
    <script type='text/javascript'>function setCookie(name,value,expires,path,domain,secure){document.cookie=name+"="+escape(value)+((expires==null)?"":"; expires="+expires.toGMTString())+((path==null)?"":"; path="+path)+((domain==null)?"":"; domain="+domain)+((secure==null)?"":"; secure")}function getCookie(name){var cname=name+"=";var dc=document.cookie;if(dc.length>0){begin=dc.indexOf(cname);if(begin!=-1){begin+=cname.length;end=dc.indexOf(";",begin);if(end==-1)end=dc.length;return unescape(dc.substring(begin,end))}}return null}function delCookie(name,path,domain){if(getCookie(name)){document.cookie=name+"="+((path==null)?"":"; path="+path)+((domain==null)?"":"; domain="+domain)+"; expires=Thu, 01-Jan-70 00:00:01 GMT"}}</script>
     
     
    <!-- Gestión barra aviso cookies -->
    <script type='text/javascript'>
    var comprobar = getCookie("avisocookies");
    if (comprobar == 1) {/*Si se ha pulsado OK..que no se muestre el aviso*/
    var expiration = new Date();
    expiration.setTime(expiration.getTime() + (60000*60*24*365));
    setCookie("avisocookies","1",expiration);
    document.getElementById("barracookies").style.display="none";
     
    }else {/*Si todavia no se ha pulsado OK..que Si se muestre el aviso*/
    document.getElementById("barracookies").style.display="block";
    }
    </script>