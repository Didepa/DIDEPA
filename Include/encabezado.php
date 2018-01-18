<?php
///////////////////////////////////////////////////////////////////////////////////////
function current_dir(){
	$path = dirname($_SERVER["PHP_SELF"]);
	$position = strrpos($path,'/') + 1;
	return substr($path,$position);
}


// Obtener el nombre del archivo actual ---
$archivo_actual=basename($_SERVER["PHP_SELF"]);
////////////////////////////////////////////////////////////////////////////////////////

// Definir el nombre del directorio -------
$directorioWeb="/DIDEPA/";

// Definir el directorio raiz -------------
$raizHtml="http://".$_SERVER['HTTP_HOST'].$directorioWeb;
$raiz=$_SERVER["DOCUMENT_ROOT"].$directorioWeb;
require_once($raiz.'/Lib/funciones.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DIDEPA</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php include($raiz.'/Include/rutaLibrerias.html'); ?>

<!--<script src="layout/scripts/jquery.snow.min.1.0.js"></script>-->

</head>
<body id="top" onLoad="if ('Navigator' == navigator.appName) document.forms[0].reset();">
 
 <!--<script>
     $(document).ready(function () {
            $.fn.snow({ newOn: 100 });
        });
    </script>-->

<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1>
      <table align="left" border="0" cellpadding="0" cellspacing="0" bordercolor="#FBFBFB">
      <tr valign="middle">
      <td width="31%" align="center">
      <img src="images/didepa/escudouaemcolor.fw.png" width="80" height="80" alt=""/></td>
      <td width="69%" align="center"><div style="align-content:center; vertical-align:middle; margin-top:19px;"><font font-family="Impact, Haettenschweiler, Franklin Gothic Bold, Arial Black, sans-serif" size="+8">UAEM</font></div></td>
      <td width="31%" align="center">
      <img src="images/didepa/escudo_didepa.png" width="80" height="80" alt=""/></td>
      </tr>
       
      </table>
     
      </h1>
      <p>Secretar&iacute;a de Docencia <br />Direcci&oacute;n de Desarrollo del Personal Acad&eacute;mico </p>
    </div>
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.php">Inicio</a></li>
        
   
        <li><a href="#">Qui&eacute;nes somos?</a>
        <ul>
            <li><a href="pagina.php">Misi&oacute;n - Visi&oacute;n</a></li>
            <li><a href="#">Organigrama</a></li>
          </ul>
        </li>
        <li><a href="#">Formaci&oacute;n docente</a>
          <ul>
            <li><a href="http://didepa.uaemex.mx/cursos/cosultaCurso.php">Programas de Formaci&oacute;n</a></li>
            <li><a href="https://sicefd.uaemex.mx/inscripciones/index">Inscripci&oacute;n</a></li>
            <li><a href="#">Diplomados</a></li>
          </ul>
        </li>
        <li class="last"><a href="#">Enlaces</a>
          <ul>
          	<li ><a href="../sicedidepa">SICEFD V2</a></li>
            <li class="last"><a href="https://sicefd.uaemex.mx/login">SICEFD V3</a></li>
          </ul>
        </li>
      </ul>
    </div>
     <div id="topnav">
      <ul>
        <li><a href="contacto.php">Contactanos</a></li>
        
<!--        <li><a href="#">Reclutamiento</a>-->
       
        <!--</li>-->
        
      </ul>
    </div>
    <br class="clear" />
  </div>
 
</div>

