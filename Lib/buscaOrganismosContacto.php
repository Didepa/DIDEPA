<?php


require("funciones.php");
 
//$tipoCurso="";
$iValor=$_POST['iValor'];
///$tipoCurso=2;
$sLista="";


if ($iValor==1){

	$sLista='

		<p>
		  <input name="txt_rfc" type="text" class="text" id="txt_rfc" placeholder="NAPM001201T12" value="" size="22" onblur="this.value=trim(this.value).toUpperCase();" />
		  <small>RFC</small>
		  <label for="txt_rfc"><small> (*)</small></label>
		</p>
		<p>
		  '.comboEspacios().'
		</p>
		<p>  &nbsp;	</p>
		<p>&nbsp;</p>

	';
	
}else{
		
		$sLista='

		<p>
		  <input name="txt_rfc" type="text" class="text" id="txt_rfc" placeholder="NAPM001201T12" value="" size="22" onblur="this.value=trim(this.value).toUpperCase();" />
		  <label for="txt_rfc"><small> RFC(*)</small></label>
		</p>
		<p>
		  <input name="txt_empresa" type="text" class="text" id="txt_empresa" placeholder="Ingrese nombre empresa" value="" size="22" />
		  <label for="txt_empresa"><small>Empresa(*)</small></label>
		</p>
		<p>
		  <input name="txt_ubicacion" type="text" class="text" id="txt_ubicacion" placeholder="Estado o municipio" value="" size="22" />
		  <label for="txt_ubicacion"><small>Ubicaci&oacute;n(*)</small></label>
		</p>
		<p>&nbsp;</p>

	';
}


  
	

 echo $sLista."<br />" ;


?>