<?php
// Declarar variables para construir el string de connexion -------------------

$username = "root";
$password = "sicefd2012%!";
//$password = "";

$port = 1521;
$protocol = "TCP";
//$NAME = "evlinea";
$NAME = "personas_atencion";

$MYSQL_SERVER_ADDRESS = "localhost";


$link =mysql_connect( $MYSQL_SERVER_ADDRESS , $username , $password );
 mysql_select_db( $NAME,  $link  ) OR DIE ( "Error: No es posible establecer la conexión"); 




?>