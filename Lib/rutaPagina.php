<?Php
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



?>
