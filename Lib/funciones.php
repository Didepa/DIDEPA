<?php
function faltan_dias($fechatermino, $evento){
  require('_dbsini.php');
  $sSql = "select curdate(), DATEDIFF('".$fechatermino."',curdate()) faltan ;";
		//echo $sSql;
  $consulta=mysql_query($sSql) or die(mysql_error());
  
  $reg=mysql_num_rows($consulta); // verficar si se recupero informacion
	   
	$sLista='';
	if ($reg>0){
		if ($rcInf=mysql_fetch_array($consulta)) {
			$sLista.='<h3 class="fuenteColorNegro">Finaliza en  <b class="fuenteColorVerde">'.$rcInf["faltan"].'</b> d&iacute;as '.$evento.'</h3>';			
		}
		
	}else{
		$sLista.= ' ';
		}
 return $sLista;
}


function enviar_mail_pdf($correo,$asunto,$mensaje,$pdf,$nombre_pdf){
		$asunto = utf8_decode($asunto);
		$mensaje = utf8_decode($mensaje);
		$UN_SALTO="\r\n";
		$DOS_SALTOS="\r\n\r\n";   
		$responder="didepa@uaemex.mx ";
		$remite="didepa@uaemex.mx ";
		$remitente="DIRECCION DE DESARROLLO DEL PERSONAL ACAD&Eacute;MICO";
		$separador = "_separador_de_trozos_".md5 (uniqid (rand()));   
		$cabecera = "Date: ".date("l j F Y, G:i").$UN_SALTO; 
		$cabecera .= "MIME-Version: 1.0".$UN_SALTO; 
		$cabecera .= "From: ".$remitente."<".$remite.">".$UN_SALTO;
		$cabecera .= "Return-path: ". $remite.$UN_SALTO;
		$cabecera .= "Reply-To: ".$remite.$UN_SALTO;
		$cabecera .="X-Mailer: PHP/". phpversion().$UN_SALTO;
		$cabecera .= "Content-Type: multipart/mixed;".$UN_SALTO; 
		$cabecera .= " boundary=$separador".$DOS_SALTOS; 
		// Parte primera -Mensaje en formato HTML  
		$texto ="--$separador".$UN_SALTO; 
		# Encabezado parcial
		$texto .="Content-Type: text/html; charset=\"ISO-8859-1\"".$UN_SALTO; 
		$texto .="Content-Transfer-Encoding: 7bit".$DOS_SALTOS; 
		# Contenido de esta parte del mensaje
		$texto .= $mensaje;
		//Adjuntar un archivo
		$adj1='';
		if($pdf!=''){
			$adj1 = $UN_SALTO."--$separador".$UN_SALTO; 
			$adj1 .="Content-Type: application/pdf; name= \"".$nombre_pdf."\"".$UN_SALTO;  
			$adj1 .="Content-Disposition: inline; filename=\"".$nombre_pdf."\"".$UN_SALTO;
			$adj1 .="Content-Transfer-Encoding: base64".$DOS_SALTOS; 
			$adj1 .=chunk_split(base64_encode($pdf)); 

			$adj1 .=$UN_SALTO."--$separador".$UN_SALTO; 
		}
	
		// Union del mensaje con el archivo adjunto
		$mensaje=$texto.$adj1; 
		if(@mail($correo,$asunto, $mensaje,$cabecera)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

function comboEspacios(){
	
require($_SERVER["DOCUMENT_ROOT"]."/cursos/lib/_dbsini.php");


$sEspacio="";


	  $sSql = "Select distinct id id_organismo, nombre 
	           from espacio 
	           where categoria_espacio='U'
			   order by nombre ";
		//echo $sSql;
	  $consulta=mysql_query($sSql) or die(mysql_error());
  
       $reg=mysql_num_rows($consulta); // verficar si se recupero informacion
	$sLista='<div class="styled-select">  <select name="Espacio" id="Espacio"  >';
	if ($reg>0){
		
		$sLista.='<option value="0">Seleccione un Espacio Universitario</option>';			
			while ($rcInf=mysql_fetch_array($consulta)) {
			$sLista.= '<option value="'.$rcInf["id_organismo"].'">'.utf8_encode($rcInf["nombre"]).'</option>';
		}
		
	}else{
		
		$sLista.= '<option value="0">No se encontraron cursos con esta categor&iacute;a</option>';
		}
	
 $sLista.='</select></div> ';
 return $sLista;
	
	}
	
?>