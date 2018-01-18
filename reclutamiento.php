<?php include('Include/encabezado.php'); ?>


<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">Usted esta aqu&iacute;</li>
      <li>&#187;</li>
      <li><a href="#">Inicio</a></li>
      <li>&#187;</li>
      <li class="current"><a href="#">Contacto</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
    <div id="content">
      <h2><strong>PORQUE QUEREMOS QUE SEAS PARTE  DE LA EXCELENCIA ACAD&Eacute;MICA</strong>.</h2>
      <p>La UAEM a trav&eacute;s de la Secretar&iacute;a de Docencia y la Direcci&oacute;n de  Desarrollo del Personal Acad&eacute;mico (DiDePA), como espacio de formaci&oacute;n y  actualizaci&oacute;n docente, cuenta con un selecto claustro de&nbsp; instructores, quienes de manera din&aacute;mica,  innovadora y eficiente orientan la definici&oacute;n de nuevos paradigmas en las  diferentes &aacute;reas de especializaci&oacute;n del &aacute;mbito educativo universitario. </p>
      <p>Fundamentados &nbsp;en los conocimientos, competencias y  experiencias de instructores para enriquecer nuestro equipo de trabajo.</p>
      <p>Reg&iacute;strate llenando la siguiente ficha  de inscripci&oacute;n</p>
      <div id="contacto">
        <form  method="post" enctype="multipart/form-data" name="formacontacto" id="formacontacto" class="formulario">

          <table width="616" border="0">
            <tbody>
              <tr>
                <td width="464"><div id="datos_personales">
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
                  <p>
                    <input name="txt_rfc" type="text" class="text" id="txt_rfc" placeholder="NAPM001201T12" value="" size="22" onblur="this.value=trim(this.value).toUpperCase();" />
                    <small>RFC </small>
                    <label for="txt_rfc"><small> (*)</small></label>
                  </p>
                    <br />
                  </div>
                  
                  <p><h6><small>Me interesa participar como ...         </small></h6></p>
                  <p>
                    <input name="radioEspecialidad" type="radio" id="radioEspecialidad" value="1" checked="checked" onclick="buscaEspecialidad()" /> Talento  en situaci&oacute;n  de discapacidad motriz&nbsp; o auditiva </p>
                  <p>
                    <input type="radio" name="radioEspecialidad" id="radioEspecialidad" value="2" onclick="buscaEspecialidad()" /> Docencia  jur&iacute;dica 
                </p>
                <p>&nbsp;</p></td>
              </tr>
              <tr>
                <td><div id="div_especialidad">
                  <p>&iquest;&Aacute;rea de especialidad?</p>
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
                </div></td>
              </tr>
            </tbody>
          </table>
        <h4>&nbsp;</h4>
          <p>Le pedimos que tenga a la mano su curriculum, ya que al registrar sus datos se pedira este documento electr&oacute;nico.<br>El formato electronico deber&aacute; estar en pdf y con un peso no mayor a 1.5 MB</p>
          <p>
            <label for="archivo">Curriculum:</label>
            <input type="file" name="archivo" id="archivo" accept="application/pdf" onchange="datosArchivo()" />
          </p>
          <p>&nbsp;</p>
            <div id="divMensajeArchivo"></div>
          <p>
            <input name="enviar" type="button" id="enviar" value="Enviar" class="boton" onclick="registraInteresadoRecluta(); "/>
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Borrar todo" class="reset" />
        </p>
        
        <div id="divMensaje"></div>
          
          
          
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

</script>
<!-- ####################################################################################################### -->
<?php include('Include/piePagina.php'); ?>