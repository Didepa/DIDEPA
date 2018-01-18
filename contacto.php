<?php include('Include/encabezado.php'); ?>

<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">Usted esta aqu&iacute;</li>
      <li>&#187;</li>
      <li><a href="http://www.didepa.uaemex.mx">Inicio</a></li>
      <li>&#187;</li>
      <li class="current"><a href="#">Contacto</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
    <div id="content">
      <h1>Contactenos</h1>
      <p>Somos un espacio acad&eacute;mico universitario dedicado a la formaci&oacute;n docente   y su actualizaci&oacute;n disciplinar a trav&eacute;s de actividades diversas que den   por resultado la mejora de las pr&aacute;cticas educativas en el aula.</p>
      <p>Utilice este formulario para ponerse en contacto con nosotros por correo electr&oacute;nico. Usted recibir&aacute; una respuesta pronto.</p>
      <div id="contacto">
        <form action="#" method="post" id="formacontacto" name="formacontacto">
          <table width="700" border="0">
            <tbody>
              <tr>
                <td width="320"><div id="datos_personales">
                  <p>
                    <input type="text" name="txt_nombre" id="txt_nombre" value="" size="22" class="text" placeholder="Ingrese su nombre" onblur="this.value=trim(this.value).toUpperCase();" />
                    <label for="txt_nombre"><small>Nombre (*)</small></label>
                  </p>
                  <p>
                    <input name="txt_apellidos" type="text" class="text" id="txt_apellidos" placeholder="Ingrese sus Apellidos" value="" size="22" onblur="this.value=trim(this.value).toUpperCase();" />
                    <small>Apellidos</small>
                    <label for="txt_apellidos"><small> (*)</small></label>
                  </p>
                  <p>
                    <input name="txt_email" type="text" class="text" id="txt_email" placeholder="correo@ejemplo.com" value="" size="22" />
                    <small>Correo</small>
                    <label for="txt_email"><small> (*)</small></label>
                  </p>
                  <p>
                    <input name="txt_telefono" type="text" class="text" id="txt_telefono" placeholder="01 (722) 214 5601" value="" size="22" onblur="this.value=trim(this.value).toUpperCase();" />
                   
  <label for="txt_telefono"><small> (*)Tel&eacute;fono</small></label>
                </p>
                </div>
                
                  <input name="chk_soyUAEM" type="checkbox" id="chk_soyUAEM" class="checkbox" onclick="buscaOrganismos()"  />
Soy integrante de la UAEMex
 
 <div id="datos_empresa">
                    <p>
                      <input name="txt_rfc" type="text" class="text" id="txt_rfc" placeholder="NAPM001201T12" value="" size="22" onblur="this.value=trim(this.value).toUpperCase();" />
                      <small>RFC </small>
                      <label for="txt_rfc"><small> (*)</small></label>
                    </p>
                    <p>
                      <input name="txt_empresa" type="text" class="text" id="txt_empresa" placeholder="Ingrese nombre empresa" value="" size="22" />
                      <small>Empresa</small>
                      <label for="txt_empresa"><small>(*)</small></label>
                    </p>
                    <p>
                      <input name="txt_ubicacion" type="text" class="text" id="txt_ubicacion" placeholder="Estado o municipio" value="" size="22" />
                      <label for="txt_ubicacion"><small>Ubicaci&oacute;n(*)</small></label>
                    </p>
                    <p>&nbsp;</p>
                  </div>
                <p>&nbsp;</p></td>
                <td width="370" valign="top">
                <p>&iquest;Como se entero de nosotros?</p>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <td width="200" ><input type="checkbox" name="chk1" id="chk1" class="checkbox" />
                        <label for="chk1"> <small> Internet</small></label>
                      </td>
                      <td width="166"></td>
                     </tr>
                    <tr>
                      <td ><input type="checkbox" name="chk2" id="chk2" class="checkbox" />
                        <label for="chk2"> <small>Recomendado</small></label></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td ><label for="chk2">
                        <input type="checkbox" name="chk3" id="chk3" class="checkbox" />
                      </label>
                        <label for="chk3"><small> Por Correo </small></label></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td ><input type="checkbox" name="chk4" id="chk4" class="checkbox" />
                        <label for="chk4"><small> Otro Medio</small></label></td>
                      <td><input name="txt_otro" type="text" class="text" id="txt_otro" placeholder="Descripci&oacute;n del medio" /></td>
                    </tr>
                    </tbody>
                 </table>

               
                <p>Esta interesado en :</p>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <td width="191" ><input type="checkbox" name="chk_consultoria" id="chk_consultoria" />
                        <label for="checkbox2"><small>Consultoria</small></label></td>
                      <td width="175"><input name="txt_consultoria" type="text"  class="text" id="txt_consultoria"/></td>
                    </tr>
                    <tr>
                      <td scope="row"><input type="checkbox" name="chk_cursos" id="chk_cursos" />
                        <label for="chk_cursos"><small>Cursos</small></label></td>
                      <td><input name="txt_cursos" type="text"  class="text" id="txt_cursos" placeholder="Tema" /></td>
                    </tr>
                    <tr>
                      <td scope="row"><input type="checkbox" name="chk_otros" id="chk_otros" />
                        <label for="chk_otros"><small>Otros Servicios</small></label></td>
                      <td><input name="txt_otros_servicios" type="text"  class="text" id="txt_otros_servicios" placeholder="Descripci&oacute;n" /></td>
                    </tr>
                  </tbody>
                </table>
                </td>
              </tr>
            </tbody>
          </table>
          <p>
            <label for="destinatario">Para:&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <select name="destinatario" id="destinatario" class="select">
            <option value="0" selected="selected">DiDePA</option>
            <option value="1">Direcci&oacute;n</option>
            <option value="2">&Aacute;rea Administrativa</option>
            <option value="3">Unidad Acad&eacute;mica</option>
            <option value="4">Coordinaci&oacute;n - Organismos Acad&eacute;micos</option>
            <option value="5">Coordinac&oacute;n - CUs y UAPS </option>
            <option value="6">Control Escolar</option>
            </select>
          </p>
          <p>Asunto:
            <input type="text" name="txt_asunto" id="txt_asunto" value="" size="22" class="text" />
          </p>
          <p>
            <textarea name="txt_comment" id="txt_comment" cols="100%" rows="10"></textarea>
            <label for="txt_comment" style="display:none;"><small>Comment (required)</small></label>
          </p>
          <p>
            <input name="enviar" type="button" id="enviar" value="Enviar" class="boton" onclick="registraSolicitud()"/>
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Borrar todo" class="reset" />
          </p><div id="divMensaje"></div>
        </form>
      </div>
    </div>
    <div id="column">
      <div class="subnav">
        <h2>Tiene otra inquietud...</h2>
       <?php include('Include/menuContacto.html'); ?>
      </div>
      <div class="holder">
        <div id="datosTelefono">&nbsp; </div>
        <p>&nbsp;</p>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<script language="javascript">
document.getElementById("chk_soyUAEM").checked=false;
</script>
<!-- ####################################################################################################### -->
<?php include('Include/piePagina.php'); ?>