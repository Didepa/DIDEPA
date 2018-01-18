<?php
$iValor=$_REQUEST["iValor"];

if ($iValor==1){
	
	echo '     <p>&iquest;&Aacute;rea de especialidad?</p>
                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td width="200" ><input type="checkbox" name="chk[]" id="chk1" class="checkbox" value="1" />
                          Biolog&iacute;a  y Qu&iacute;mica</td>
                        <td width="200" ><input name="chk[]" type="checkbox" class="checkbox" id="chk8" value="8" />
                          Did&aacute;ctico  - Pedag&oacute;gico</td>
                      </tr>
                      <tr>
                        <td ><input name="chk[]" type="checkbox" class="checkbox" id="chk2" value="2" />
                          Biotecnolog&iacute;a  y Ciencias Agropecuarias</td>
                        <td ><input name="chk[]" type="checkbox" class="checkbox" id="chk9" value="9" />
                          Desarrollo  Humano</td>
                      </tr>
                      <tr>
                        <td ><label for="chk5">
                          <input name="chk[]" type="checkbox" class="checkbox" id="chk3" value="3" />
                          </label>
                          Ciencias  Sociales</td>
                        <td ><label for="chk5">
                          <input name="chk[]" type="checkbox" class="checkbox" id="chk10" value="10" />
                          </label>
                          Igualdad  de laboral y no discriminaci&oacute;n</td>
                      </tr>
                      <tr>
                        <td ><input name="chk[]" type="checkbox" class="checkbox" id="chk4" value="4" />
                          F&iacute;sico  &ndash;Matem&aacute;ticas y Ciencias de la Tierra</td>
                        <td ><input name="chk[]" type="checkbox" class="checkbox" id="chk11" value="11" />
                          TIC</td>
                      </tr>
                      <tr>
                        <td ><input name="chk[]" type="checkbox" class="checkbox" id="chk5" value="5" />
                          Humanidades  y Ciencias de la Conducta</td>
                        <td ><input name="chk[]" type="checkbox" class="checkbox" id="chk12" value="12" />
                          Investigaci&oacute;n </td>
                      </tr>
                      <tr>
                        <td ><label for="chk5">
                          <input name="chk[]" type="checkbox" class="checkbox" id="chk6" value="6" />
                          </label>
                          Ingenier&iacute;as</td>
                        <td ><label for="chk5">
                          <input name="chk[]" type="checkbox" class="checkbox" id="chk13" value="13" />
                          </label>
                          Valores</td>
                      </tr>
                      <tr>
                        <td ><input name="chk[]" type="checkbox" class="checkbox" id="chk7" value="7" />
                          Medicina  y Ciencias de la Salud</td>
                        <td >&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
';
	
	}
	else{
		echo '  <p>&iquest;&Aacute;rea de especialidad?</p>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td width="200" ><input type="checkbox" name="chk[]" id="chk1" class="checkbox" value="1" />
                        Sistema  de Justicia Penal: Medios Alternos de Soluci&oacute;n de Conflictos</td>
                      </tr>
                      <tr>
                        <td ><input name="chk[]" type="checkbox" class="checkbox" id="chk2" value="2" />
                        Sistema de Justicia Penal: Asesores</td>
                      </tr>
                      <tr>
                        <td ><label for="chk5">
                          <input name="chk[]" type="checkbox" class="checkbox" id="chk3" value="3" />
                          </label>
                          Sistema  de Justicia Penal: Fiscales</td>
                      </tr>
                      <tr>
                        <td ><input name="chk[]" type="checkbox" class="checkbox" id="chk4" value="4" />
                        Sistema  de Justicia Penal: Defensores</td>
                      </tr>
                    </tbody>
                  </table>';
		
		}


?>
  