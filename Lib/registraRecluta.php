<?php

 include ("_dbsini_Contacto.php");
  include('funciones.php');
//require($_SERVER["DOCUMENT_ROOT"]."/cursos/lib/_dbsini.php");
 
$sNombre=""; $sApellidos="";$sCorreo="";$sTelefono="";$sRFC="";

$iChk1=0;$iChk2=0;$iChk3=0;$iChk4=0;$iChk5=0;$iChk6=0;$iChk7=0;$iChk8=0;$iChk9=0;$iChk10=0;$iChk11=0;$iChk12=0;$iChk13=0;

$sNombre=utf8_decode($_POST['txt_nombre']);
$sApellidos=utf8_decode($_POST['txt_apellidos']);
$sCorreo=utf8_decode($_POST['txt_email']);
$sTelefono=$_POST['txt_telefono'];
$sRFC=$_POST['txt_rfc'];

$iValor=$_POST['radioEspecialidad'];// $_REQUEST['iValor'];

$iChk=$_POST["chk"];

$iChecks=count($iChk);

for($i=0;$i<$iChecks;$i++){
	echo $iChk[$i];
	switch($iChk[$i]){
		case 0: $iChk1=1; 
		break;
		case 1: $iChk2=1;
		break;
		case 2: $iChk3=1;
		break;
		case 3: $iChk4=1;
		break;
		case 4: $iChk5=1;
		break;
		case 5: $iChk6=1;
		break;
		case 6: $iChk7=1;
		break; 
		case 7: $iChk8=1;
		break;
		case 8: $iChk9=1;
		break;
		case 9: $iChk10=1;
		break;
		case 10: $iChk11=1;
		break;
		case 11: $iChk12=1;
		break;
		case 12:  $iChk13=1;
		break;
		
		} 
	}


$file = $_FILES['archivo']['name'];

/***Se verifica si ya existe ***/

 $sSql = " SELECT *
FROM persona_registro a
WHERE a.nombre like '".$sNombre."' 
and a.apellidos like '".$sApellidos."'
and a.Correo like '".$sCorreo."'
and a.telefono='".$sTelefono."'
and a.rfc='".$sRFC."'
";
	//echo $sSql;

   $consulta=mysql_query($sSql) or die(mysql_error());
  
   $reg=mysql_num_rows($consulta); // verficar si se recupero informacion
 
   $sResultado='';
   
   if ($reg>0){
	   //Existe, no se inserta y solo se notifica que ya se encuentra registrado
	   
	    $sId="";
		   if($rcInf=mysql_fetch_array($consulta)) {
			$sId= $rcInf["id"];
		    }
		$sResultado= $sId."|"."Ya se tiene una peticion con estos datos";
	
	 }
	 else {
		 // No existe, se inserta
		 
		

	//SE INSERTA EN Curso_espacio POR Escuela y curso
	
	$sInserta=" INSERT INTO persona_registro( id, nombre, apellidos, correo, telefono,  rfc,participa_por, especialidad_01, especialidad_02, especialidad_03, especialidad_04, especialidad_05, especialidad_06, especialidad_07, especialidad_08, especialidad_09, especialidad_10, especialidad_11, especialidad_12, especialidad_13, curriculo, fecha) 
	            values(null,'".$sNombre."','".$sApellidos."','".$sCorreo."','".$sTelefono."','".$sRFC."',".$iValor.",".$iChk1.",".$iChk2.",".$iChk3.",".$iChk4.",".$iChk5.",".$iChk6.",".$iChk7.",".$iChk8.",".$iChk9.",".$iChk10.",".$iChk11.",".$iChk12.",".$iChk13.",'sin dato ',CURDATE())";
	//echo "insertando". $sInserta."<br />";
	$respuesta01=mysql_query($sInserta) or die (mysql_error());

     
	 ///buscamos de nuevo el id para ligar el curriculum
	 $sSql=""; 
	 $sSql = " SELECT *
			FROM persona_registro a
			WHERE a.nombre like '".$sNombre."' 
			and a.apellidos like '".$sApellidos."'
			and a.Correo like '".$sCorreo."'
			and a.telefono='".$sTelefono."'
			and a.rfc='".$sRFC."'	";
	 
	  $consultaRegistrado=mysql_query($sSql) or die(mysql_error());
	  $nRegistro=mysql_num_rows($consultaRegistrado); // verficar si se recupero informacion
	   if ($nRegistro>0){
		   $sId="";
		   if($rcInf=mysql_fetch_array($consultaRegistrado)) {
			$sId= $rcInf["id"];
		    }
		   
		   $sResultado= $sId."|"."Se registro la solicitud, en breve nos pondremos en comunicación con usted. Gracias por su preferencia.";
	   }else{
		   $sResultado= "0"."|"."No se pudo registrar la  solicitud le pedimos que nos envie un correo a didepa@uaemex.mx.";
		   
		   }
		   
		   
		  //comprobamos si existe un directorio para subir el archivo
			//si no es así, lo creamos
			if(!is_dir("cvs/")) 
				mkdir("cvs/", 0777);
			 
			//comprobamos si el archivo ha subido
		//	copy($_FILES['file']['tmp_name'], $destino.'/'.$_FILES['file']['name']) 
		  $bndArchivo=0;
			if ($file && move_uploaded_file($_FILES['archivo']['tmp_name'],"cvs/".$file))
			{
			   sleep(2);//retrasamos la petición 2 segundos
			   //echo $file;//devolvemos el nombre del archivo para pintar la imagen
	 		  $bndArchivo=1;  
			}else {
				//echo "no subio";
			  $bndArchivo=0;
				}
		   
		   
		   
		   
		
     }

 echo $sResultado."|";

