<?php

	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$telph= $_POST['phone'];

	require("Lib/conect_bd_ingl.php");
	
				//require("connect_db.php");
				mysql_query("INSERT INTO login VALUES('','$realname','$mail','$telph')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Asistente registrado");</script> ';
				mysql_close($link);
?>