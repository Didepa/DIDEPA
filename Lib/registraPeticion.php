<?php

 include ("_dbsini_Contacto.php");
  include('funciones.php');
//require($_SERVER["DOCUMENT_ROOT"]."/cursos/lib/_dbsini.php");
 
$sNombre=""; $sApellidos="";$sCorreo="";$sTelefono="";$iSoyUAEM=0;$sRFC="";
$sEmpresa="";$sUbicacion="";
$iInternet=0;$iRecomendado=0;$iViaCorreo=0;$iViaOtro=0;$sViaOtro="";
$iConsultoria=0;$iCurso=0;$iOtrosServicios=0;
$sConsultoria="";$sCursos="";$sOtrosServicios="";
$sAsunto="";$sDescripcion="";$sDestinatario="";

$sNombre=utf8_decode($_REQUEST['Nombre']);
$sApellidos=utf8_decode($_REQUEST['Apellidos']);
$sCorreo=utf8_decode($_REQUEST['Correo']);
$sTelefono=$_REQUEST['Telefono'];
$iSoyUAEM=$_REQUEST['SoyUAEM'];
$sRFC=$_REQUEST['RFC'];
$sEmpresa=utf8_decode($_REQUEST['Empresa']);
$sUbicacion=utf8_decode($_REQUEST['Ubicacion']);
$iInternet=$_REQUEST['Internet'];
$iRecomendado=$_REQUEST['Recomendado'];
$iViaCorreo=$_REQUEST['PorCorreo'];
$iViaOtro=$_REQUEST['Otro'];
$sViaOtro=utf8_decode($_REQUEST['Otro_texto']);
$iConsultoria=$_REQUEST['Consultoria'];
$sConsultoria=utf8_decode($_REQUEST['Consultoria_txt']);
$iCurso=$_REQUEST['Curso'];
$sCursos=utf8_decode($_REQUEST['Curso_txt']);
$iOtrosServicios=$_REQUEST['Otros_servicios'];
$sOtrosServicios=utf8_decode($_REQUEST['Otros_servicios_txt']);
$sAsunto=utf8_decode($_REQUEST['Asunto']);
$sDescripcion=utf8_decode($_REQUEST['Descripcion']);
$sDestinatario=$_REQUEST['Destinatario'];

/***Se verifica si ya existe ***/

 $sSql = " SELECT *
FROM persona_contacto_sol a
WHERE a.nombre like '".$sNombre."' 
and a.apellidos like '".$sApellidos."'
and a.Correo like '".$sCorreo."'
and a.telefono='".$sTelefono."'
and a.asunto='".$sAsunto."'
";
	//echo $sSql;

   $consulta=mysql_query($sSql) or die(mysql_error());
  
   $reg=mysql_num_rows($consulta); // verficar si se recupero informacion
 
   $sResultado='';
   
   if ($reg>0){
	   //Existe, no se inserta y solo se notifica que ya se encuentra registrado
		$sResultado= "0"."|"."Ya se tiene una peticion con estos datos";
	
	 }
	 else {
		 // No existe, se inserta
		 
		 if($iInternet==true) $iInternet=1; else  $iInternet=0;
 		 if($iRecomendado==true) $iRecomendado=1; else  $iRecomendado=0;
		 if($iViaCorreo==true) $iViaCorreo=1; else  $iViaCorreo=0;
//		 if($iInternet==true) $iInternet=1; else  $iInternet=0;		 		 
				 

	//SE INSERTA EN Curso_espacio POR Escuela y curso
	
	$sInserta=" INSERT INTO persona_contacto_sol( id, nombre, apellidos, correo, telefono, soyuaem, rfc, empresa, municipio, internet, recomendado, opc_correo, otro, consultoria, curso, otros, asunto, descripcion, destinatario, fecha) 
	            values(null,'".$sNombre."','".$sApellidos."','".$sCorreo."','".$sTelefono."',".$iSoyUAEM.",'".$sRFC."','".$sEmpresa."','".$sUbicacion."',".$iInternet.",".$iRecomendado.",".$iViaCorreo.",'".$sViaOtro."','".$sConsultoria."','".$sCursos."','".$sOtrosServicios."','".$sAsunto."','".$sDescripcion."','".$sDestinatario."',CURDATE())";
	//echo "insertando". $sInserta."<br />";
	$respuesta01=mysql_query($sInserta) or die (mysql_error());

      $sResultado= "1"."|"."Se registro la solicitud, en breve nos pondremos en comunicación con usted. Gracias por su preferencia.";
		
     }

 echo $sResultado."|";

