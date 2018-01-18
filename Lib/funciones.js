// JavaScript Document

function muestraOculta(id) {
   var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}


function trim(a,b){
	 try{a=a.replace(/^[\s\u3000]+|[\s\u3000]+$/g,"");if(b){a=_euc(a);}
	 }catch(b){
		 }return a||"";
 }

function validaCorreo(correo){

	if(validarEmail(correo)===false){
		alert('El correo ingresado esta incorrecto o no es un correo valido.');
		return false;
		}


	}

function validarEmail(valor) {
	var valido=true;
  if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)){

    valido=true;
  } else {

    valido=false;
  }
  return valido;
}



function buscaOrganismos(){

	var soyUAEM=document.getElementById("chk_soyUAEM").checked;
	var iValor=0;
	if (soyUAEM===false){
		iValor=0;
		}else{
		iValor=1;
			}


        var parametros = {
                "iValor" : iValor
				   };
        $.ajax({
                data:  parametros,
                url:   'Lib/buscaOrganismosContacto.php',
                type:  'post',
                beforeSend: function () {
                       // $("#divOrganismo").html("Buscando, espere por favor...");
						document.getElementById("datos_empresa").innerHTML=" ";


                },
                success:  function (response) {
                      //  $("#divOrganismo").html(response);
						document.getElementById("datos_empresa").innerHTML=response;
                }
        })
		.fail(function( jqXHR, textStatus, errorThrown ) {
    		 if ( console && console.log ) {
		         console.log( "La solicitud a fallado: " +  textStatus);
			     }
		});

	}

function registraSolicitud(){

	var nombre=(document.getElementById("txt_nombre").value);
	var apellidos=(document.getElementById("txt_apellidos").value);
	var correo=(document.getElementById("txt_email").value);
	var telefono=(document.getElementById("txt_telefono").value);
	var soyUAEM=(document.getElementById("chk_soyUAEM").checked);


	var rfc=(document.getElementById("txt_rfc").value);

	var internet=(document.getElementById("chk1").checked);
	var recomendado=(document.getElementById("chk2").checked);
	var via_correo=(document.getElementById("chk3").checked);
	var via_otro=(document.getElementById("chk4").checked);

	var via_otro_txt="";
	if (via_otro===true){
		via_otro_txt=document.getElementById("txt_otro").value;
	} else {
		via_otro_txt="";
	  }

	var consultoria=(document.getElementById("chk_consultoria").checked);
	var consultoria_txt=(document.getElementById("txt_consultoria").value);

	var cursos=(document.getElementById("chk_cursos").checked);
	var cursos_txt=(document.getElementById("txt_cursos").value);

	var otros=(document.getElementById("chk_otros").checked);
	var otros_txt=(document.getElementById("txt_otros_servicios").value);

	var asunto=(document.getElementById("txt_asunto").value);
	var descripcion=(document.getElementById("txt_comment").value);
	var destinatario=(document.getElementById("destinatario").value);

	if ((nombre=="" )| (nombre==null)){
		alert('Debe de ingresar su nombre por favor.');
		document.getElementById("txt_nombre").focus();
		return false;

		}

	if ((apellidos=="" )| (apellidos==null)){
		alert('Debe de ingresar sus apellidos por favor.');
		document.getElementById("txt_apellidos").focus();
		return false;
		}

	if ((correo=="" )| (correo==null) ){
		alert('Debe de ingresar su correo electr\u00F3nico por favor.');
		document.getElementById("txt_email").focus();
		return false;
		}else{
    	if(validarEmail(correo)==false){
			alert("Correo invalido, por favor verifique.");
			document.getElementById("txt_email").focus();
			return false;
		}
     }

	if ((telefono=="" )| (telefono==null)){
		alert('Debe de ingresar su telefono por favor.');
		document.getElementById("txt_telefono").focus();
		return false;
	}



if ((rfc=="" )| (rfc==null)){
		alert('Debe de ingresar su rfc con homoclave por favor.');
		document.getElementById("txt_rfc").focus();
		return false;
	}
	else{
		/// se valida que sea un rfc

		 var rfcCorrecto = rfcValido(rfc);
		  if (rfcCorrecto) {
			  valido = "RFC V\u00E1lido";
		  } else {
				valido = "El RFC parece no estar completo o no es v\u00E1lido";
				alert(valido);
		      return false;
			}

		}

 var empresa="";
 var ubicacion="";

 if(soyUAEM===true)	{
	   empresa=(document.getElementById("Espacio").value);
	   ubicacion="";
 }else{
		empresa=(document.getElementById("txt_empresa").value);
		ubicacion=(document.getElementById("txt_ubicacion").value);

		if ((empresa=="" )| (empresa==null)){
		alert('Debe de ingresar el nombre de la institucion o empresa a la que pertenece por favor.');
		document.getElementById("txt_empresa").focus();
		return false;

		}

		if ((ubicacion=="" )| (ubicacion==null)){
		alert('Debe de ingresar la ubicacion de la institucion o empresa a la que pertenece por favor.');
		document.getElementById("txt_ubicacion").focus();
		return false;

		}

	 }


	if ((via_otro==true )){
		if ( (via_otro_txt=="" )| (via_otro_txt==null)){
			alert('Debe de ingresar el medio por el cual nos conoce por favor.');
			document.getElementById("txt_otro").focus();
			return false;
		}
	  }


	if ((consultoria===true )){
		if((consultoria_txt=="" )| (consultoria_txt==null)){
		 alert('Debe de ingresar el tema de consultoria a tratar por favor.');
		 document.getElementById("txt_consultoria").focus();
		 return false;
		}
	}

  if ((cursos===true )){
		if((cursos_txt=="" )| (cursos_txt==null)){
		 alert('Debe de ingresar el tema del curso a tratar por favor.');
		 document.getElementById("txt_cursos").focus();
		 return false;
		}
	}

 if ((otros===true )){
		if((otros_txt=="" )| (otros_txt==null)){
		 alert('Debe de ingresar el tema de la opcion otros a tratar por favor.');
		 document.getElementById("txt_otros_servicios").focus();
		 return false;
		}
	}



	if ((asunto=="" )| (asunto==null)){
		alert('Debe de ingresar el asunto del contacto por favor.');
		 document.getElementById("txt_asunto").focus();
		return false;
		}

	if ((descripcion=="" )| (descripcion==null) ){
		alert('Debe de ingresar el contenido detallado por favor.');
		 document.getElementById("txt_comment").focus();
		return false;
		}




        var parametros = {
                "Nombre" : nombre,
				"Apellidos" : apellidos,
				"Correo" : correo,
				"Telefono" : telefono,
				"SoyUAEM": soyUAEM,
				"RFC" : rfc,
				"Empresa": empresa,
				"Ubicacion": ubicacion,
				"Internet": internet,
				"Recomendado": recomendado,
				"PorCorreo": via_correo,
				"Otro":via_otro,
				"Otro_texto": via_otro_txt,
				"Consultoria" : consultoria,
				"Consultoria_txt" : consultoria_txt,
				"Curso" : cursos,
				"Curso_txt" : cursos_txt,
				"Otros_servicios": otros,
				"Otros_servicios_txt": otros_txt,
				"Asunto" : asunto,
				"Descripcion" : descripcion,
				"Destinatario" : destinatario
				   };
        $.ajax({
                data:  parametros,
                url:   'Lib/registraPeticion.php',
                type:  'post',
                beforeSend: function () {
                       // $("#divOrganismo").html("Buscando, espere por favor...");
						document.getElementById("divMensaje").innerHTML="Enviando peticion, espere por favor...";


                },
                success:  function (response) {
                      //  $("#divOrganismo").html(response);
					   var respuesta=response.split("|");
					   if(respuesta[0]=="1") {
						   alert(respuesta[1]);
						   resetFormulario();
						   }
					   else{
  						   alert(respuesta[1]);
						//  resetFormulario();

					   }
				     document.getElementById("divMensaje").innerHTML="";
						//document.getElementById("divMensaje").innerHTML=respuesta[0];
                }
        })
		.fail(function( jqXHR, textStatus, errorThrown ) {
    		 if ( console && console.log ) {
		         console.log( "La solicitud a fallado: " +  textStatus);
			     }
		});

	}


	function resetFormulario(){
//	document.getElementById("formacontacto").reset();

     document.getElementById("txt_nombre").value="";
	 document.getElementById("txt_apellidos").value="";
     document.getElementById("txt_email").value="";
     document.getElementById("txt_telefono").value="";
     document.getElementById("chk_soyUAEM").checked=false;
     document.getElementById("txt_rfc").value="";
	 document.getElementById("chk1").checked=false;
	 document.getElementById("chk2").checked=false;
	 document.getElementById("chk3").checked=false;
	 document.getElementById("chk4").checked=false;
     document.getElementById("txt_otro").value="";
	  buscaOrganismos();
	 document.getElementById("chk_consultoria").checked=false;
     document.getElementById("txt_consultoria").value="";

     document.getElementById("chk_cursos").checked=false;
	 document.getElementById("txt_cursos").value="";
	 document.getElementById("chk_otros").checked=false;
	 document.getElementById("txt_otros_servicios").value="";

	 document.getElementById("txt_asunto").value="";
	 document.getElementById("txt_comment").value="";
	 document.getElementById("destinatario").value="";

	}
	
		function resetFormularioRegistra(){
//	document.getElementById("formacontacto").reset();

     document.getElementById("txt_nombre").value="";
	 document.getElementById("txt_apellidos").value="";
     document.getElementById("txt_email").value="";
     document.getElementById("txt_telefono").value="";
     document.formacontacto.radioEspecialidad[0].checked=true;
	 buscaEspecialidad();
	 
     document.getElementById("txt_rfc").value="";
     document.getElementById("archivo").value="";
	 document.getElementById("divMensaje").innerHTML="";
	

	}
	
	function buscaEspecialidad(){
	
	var radioEspecialidad=document.getElementById("radioEspecialidad");
	var iValor=0;
	

	for(i=0;i<2;i++){
		if(document.formacontacto.radioEspecialidad[i].checked){
			iValor=document.formacontacto.radioEspecialidad[i].value;
			}
	 
	}
	
        var parametros = {
                "iValor" : iValor
				   };
        $.ajax({
                data:  parametros,
                url:   'Lib/especialidadDespliega.php',
                type:  'post',
                beforeSend: function () {
                       // $("#divOrganismo").html("Buscando, espere por favor...");
						document.getElementById("div_especialidad").innerHTML=" ";
						
						
                },
                success:  function (response) {
                      //  $("#divOrganismo").html(response);
						document.getElementById("div_especialidad").innerHTML=response;
                }
        })
		.fail(function( jqXHR, textStatus, errorThrown ) {
    		 if ( console && console.log ) {
		         console.log( "La solicitud a fallado: " +  textStatus);
			     }
		});
	
	}
	
	
	
function registraInteresadoRecluta(){
	
	var nombre=(document.getElementById("txt_nombre").value);
	var apellidos=(document.getElementById("txt_apellidos").value);
	var correo=(document.getElementById("txt_email").value);
	var telefono=(document.getElementById("txt_telefono").value);		
	var rfc=(document.getElementById("txt_rfc").value);
	
	
	
	if ((nombre=="" )| (nombre==null)){
		alert('Debe de ingresar su nombre por favor.');
		document.getElementById("txt_nombre").focus();
		return false;
		
		}	
		
	if ((apellidos=="" )| (apellidos==null)){
		alert('Debe de ingresar sus apellidos por favor.');
		document.getElementById("txt_apellidos").focus();
		return false;
		}	
	
	if ((correo=="" )| (correo==null) ){
		alert('Debe de ingresar su correo electr\u00F3nico por favor.');
		document.getElementById("txt_email").focus();
		return false;
		}else{
    	if(validarEmail(correo)==false){
			alert("Correo invalido, por favor verifique.");
			document.getElementById("txt_email").focus();
			return false;
		}
     }			
	
	if ((telefono=="" )| (telefono==null)){
		alert('Debe de ingresar su telefono por favor.');
		document.getElementById("txt_telefono").focus();
		return false;
	}	
		
		
		
if ((rfc=="" )| (rfc==null)){
		alert('Debe de ingresar su rfc con homoclave por favor.');
		document.getElementById("txt_rfc").focus();
		return false;
	}
	else{
		/// se valida que sea un rfc
		
		 var rfcCorrecto = rfcValido(rfc);
		  if (rfcCorrecto) {
			  valido = "RFC V\u00E1lido";
		  } else {
				valido = "El RFC parece no estar completo o no es v\u00E1lido"; 
				alert(valido);
		      return false;
			}
		
		}	
	
	var bnd=false;	
	var iValor=0;
 	for(i=0;i<2;i++){
		if(document.formacontacto.radioEspecialidad[i].checked){
			iValor=document.formacontacto.radioEspecialidad[i].value;
			bnd=true;
			}
	}

  if (bnd==false){
	  alert('Debe de seleccionar un tipo de especialidad para ser evaluado');

   }else{
	   switch (iValor){
		   case "1":
		      var chk1=(document.getElementById("chk1").checked);
 		      var chk2=(document.getElementById("chk2").checked);
		      var chk3=(document.getElementById("chk3").checked);						  
		      var chk4=(document.getElementById("chk4").checked);
		      var chk5=(document.getElementById("chk5").checked);
		      var chk6=(document.getElementById("chk6").checked);
		      var chk7=(document.getElementById("chk7").checked);
		      var chk8=(document.getElementById("chk8").checked);
		      var chk9=(document.getElementById("chk9").checked);			  			  			  			  			  		   
		      var chk10=(document.getElementById("chk10").checked);
		      var chk11=(document.getElementById("chk11").checked);
		      var chk12=(document.getElementById("chk12").checked);
		      var chk13=(document.getElementById("chk13").checked);			
			  
			  //verificamos que por lo menos 1 haya sido seleccionada


			  if(chk1==false & chk2==false & chk3==false & chk4==false & chk5==false & chk6==false & chk7==false & chk8==false & chk9==false & chk10==false & chk11==false & chk12==false & chk12==false ) {
				  alert('Debe de seleccionar por lo menos una especialidad.');
				  return false;
				  }
			    			  			  
			  		   
		   break;
		   case "2":
		      var chk1=(document.getElementById("chk1").checked);
 		      var chk2=(document.getElementById("chk2").checked);
		      var chk3=(document.getElementById("chk3").checked);						  
		      var chk4=(document.getElementById("chk4").checked);
		      
				  if(chk1==false & chk2==false & chk3==false & chk4==false ) {
				  alert('Debe de seleccionar por lo menos una especialidad.');
				  return false;
				  }


			  var chk5=false;
		      var chk6=false;
		      var chk7=false;
		      var chk8=false;
		      var chk9=false;			  			  			  			  			  		   
		      var chk10=false;
		      var chk11=false;
		      var chk12=false;
		      var chk13=false;		

		   
		   }
	   
	   
	   
	   }

    // alert($("#archivo")[0].files[0]);
	 if(document.getElementById("archivo").value==""){
		 alert('Se requiere el ingreso del documento CV para poder continuar con el envio de la informacion.')
		 return false;
		 }
	 
//        var file = $("#archivo")[0].files[0];
        //obtenemos el nombre del archivo
  //      var fileName = file.name;
        //obtenemos la extensión del archivo
    //    fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
        //obtenemos el tamaño del archivo
      //  var fileSize = (file.size/1024);
        //obtenemos el tipo de archivo image/png ejemplo
        //var fileType = file.type;

		
	
        /*var parametros = {
                "Nombre" : nombre,
				"Apellidos" : apellidos,
				"Correo" : correo,
				"Telefono" : telefono,
				"RFC" : rfc,
				"iValor": iValor,
				"chk1": chk1,
				"chk2": chk2,
				"chk3": chk3,
				"chk4": chk4,
				"chk5": chk5,
				"chk6": chk6,
				"chk7": chk7,
				"chk8" : chk8,
				"chk9" : chk9,
				"chk10" : chk10,				
				"chk11" : chk11,								
				"chk12": chk12,
				"chk13": chk13
				
				   };*/
				   
		  var formData = new FormData($(".formulario")[0]);	   
				   
        $.ajax({
                data:  formData,
                url:   'Lib/registraRecluta.php',
                type:  'post',
				cache: false,
            contentType: false,
            processData: false,
                beforeSend: function () {
                       // $("#divOrganismo").html("Buscando, espere por favor...");
						document.getElementById("divMensaje").innerHTML="Enviando peticion, espere por favor...";
						
						
                },
                success:  function (response) {
                      //  $("#divOrganismo").html(response);
					   var respuesta=response.split("|");
					   if(respuesta[0]!="0") {
						   alert(respuesta[1]);
//						   document.getElementById('id01').style.display='block';
                          // document.getElementById("divMensaje").innerHTML=respuesta[1];
						 resetFormularioRegistra();   
						   }
					   else{
  						   alert(respuesta[1]);
						 resetFormularioRegistra();

					   }
				   //  document.getElementById("divMensaje").innerHTML="";	   
						document.getElementById("divMensaje").innerHTML=respuesta[1];
                }
        })
		.fail(function( jqXHR, textStatus, errorThrown ) {
    		 if ( console && console.log ) {
		         console.log( "La solicitud a fallado: " +  textStatus);
			     }
		});
	
	}
	
	
	function datosArchivo(){
		 //obtenemos un array con los datos del archivo
        var file = $("#archivo")[0].files[0];
        //obtenemos el nombre del archivo
        var fileName = file.name;
        //obtenemos la extensión del archivo
        fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
        //obtenemos el tamaño del archivo
        var fileSize = file.size;
        //obtenemos el tipo de archivo image/png ejemplo
        var fileType = file.type;
		
		
		if (fileSize>1572864){
			alert('El tama\u00f1o del archivo es mayor al permitido');
			document.getElementById("archivo").value = "";
           showMessage("");
			return false;
		}
		if(!isPDF(fileExtension)){
			alert('El archivo debe ser de un formato en PDF');
			document.getElementById("archivo").value = "";
           showMessage("");
			return false;
			
			}
		var peso =Math.round10( ((fileSize / 1024)/1024),-3);	
        //mensaje con la información del archivo
        showMessage("<span class='info'>Archivo para subir: "+fileName+", peso total: "+(peso) +" Mega-bytes.</span>");
		//alert("<span class='info'>Archivo para subir: "+fileName+", peso total: "+(fileSize) +" Mega-bytes.</span>");
		//document.getElementById("divMensaje").innerHTML="<span class='info'>Archivo para subir: "+fileName+", peso total: "+(fileSize) +" Mega-bytes.</span>";
		
		}
	
	
	/*************************************************************************/

//Función para validar un RFC
// Devuelve el RFC sin espacios ni guiones si es correcto
// Devuelve false si es inválido
// (debe estar en mayúsculas, guiones y espacios intermedios opcionales)
function rfcValido(rfc, aceptarGenerico = true) {
    const re       = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
    var   validado = rfc.match(re);

    if (!validado)  //Coincide con el formato general del regex?
        return false;

    //Separar el dígito verificador del resto del RFC
    const digitoVerificador = validado.pop(),
          rfcSinDigito      = validado.slice(1).join(''),
          len               = rfcSinDigito.length,

    //Obtener el digito esperado
          diccionario       = "0123456789ABCDEFGHIJKLMN&OPQRSTUVWXYZ Ñ",
          indice            = len + 1;
    var   suma,
          digitoEsperado;

    if (len == 12) suma = 0
    else suma = 481; //Ajuste para persona moral

    for(var i=0; i<len; i++)
        suma += diccionario.indexOf(rfcSinDigito.charAt(i)) * (indice - i);
    digitoEsperado = 11 - suma % 11;
    if (digitoEsperado == 11) digitoEsperado = 0;
    else if (digitoEsperado == 10) digitoEsperado = "A";

    //El dígito verificador coincide con el esperado?
    // o es un RFC Genérico (ventas a público general)?
    if ((digitoVerificador != digitoEsperado)
     && (!aceptarGenerico || rfcSinDigito + digitoVerificador != "XAXX010101000"))
        return false;
    else if (!aceptarGenerico && rfcSinDigito + digitoVerificador == "XEXX010101000")
        return false;
    return rfcSinDigito + digitoVerificador;
}



//funcion de novedades
function RegCord(){
 var boton= document.getElementById("btnv").value;
        var parametros = {
                 "Registrar": boton    };
       $.ajax({
                  data:  parametros,
                  url:   'audio.html',
                  type:  'post',
                  beforeSend: function () {
                         // $("#divOrganismo").html("Buscando, espere por favor...");
              document.getElementById("registro").innerHTML="Cargando, espere por favor...";


                  },
                  success:  function (response) {
                        //  $("#divOrganismo").html(response);
              document.getElementById("registro").innerHTML=response;
                  }
          })
    .fail(function( jqXHR, textStatus, errorThrown ) {
         if ( console && console.log ) {
             console.log( "La solicitud a fallado: " +  textStatus + console.log);
           }
    });

  }
  //funcion de novedades2
function RegCord1(){
 var boton= document.getElementById("btnv1").value;
        var parametros = {
                 "Registrar": boton    };
       $.ajax({
                  data:  parametros,
                  url:   'audio2.html',
                  type:  'post',
                  beforeSend: function () {
                         // $("#divOrganismo").html("Buscando, espere por favor...");
              document.getElementById("registro1").innerHTML="Cargando, espere por favor...";


                  },
                  success:  function (response) {
                        //  $("#divOrganismo").html(response);
              document.getElementById("registro1").innerHTML=response;
                  }
          })
    .fail(function( jqXHR, textStatus, errorThrown ) {
         if ( console && console.log ) {
             console.log( "La solicitud a fallado: " +  textStatus + console.log);
           }
    });

  }
  
  function soloNumeros(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}


 function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
  
function showMessage(message){
//    $(".messages").html("").show();
 //   $(".messages").html(message);

    $("#divMensajeArchivo").html("").show();
    $("#divMensajeArchivo").html(message);
}
 
//comprobamos si el archivo a subir es una imagen
//para visualizarla una vez haya subido
function isImage(extension)
{
    switch(extension.toLowerCase()) 
    {
        case 'jpg': case 'gif': case 'png': case 'jpeg':
            return true;
        break;
        default:
            return false;
        break;
    }
}

function isPDF(extension)
{
    switch(extension.toLowerCase()) 
    {
        case 'pdf': 
            return true;
        break;
        default:
            return false;
        break;
    }
}



(function() {
  /**
   * Ajuste decimal de un número.
   *
   * @param {String}  tipo  El tipo de ajuste.
   * @param {Number}  valor El numero.
   * @param {Integer} exp   El exponente (el logaritmo 10 del ajuste base).
   * @returns {Number} El valor ajustado.
   */
  function decimalAdjust(type, value, exp) {
    // Si el exp no está definido o es cero...
    if (typeof exp === 'undefined' || +exp === 0) {
      return Math[type](value);
    }
    value = +value;
    exp = +exp;
    // Si el valor no es un número o el exp no es un entero...
    if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
      return NaN;
    }
    // Shift
    value = value.toString().split('e');
    value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
    // Shift back
    value = value.toString().split('e');
    return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
  }

  // Decimal round
  if (!Math.round10) {
    Math.round10 = function(value, exp) {
      return decimalAdjust('round', value, exp);
    };
  }
  // Decimal floor
  if (!Math.floor10) {
    Math.floor10 = function(value, exp) {
      return decimalAdjust('floor', value, exp);
    };
  }
  // Decimal ceil
  if (!Math.ceil10) {
    Math.ceil10 = function(value, exp) {
      return decimalAdjust('ceil', value, exp);
    };
  }
})();