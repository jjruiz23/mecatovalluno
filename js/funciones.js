// Funcion para controlar acciones de confirmacion. EDITAR Y ELIMINAR
function ConfirmarAccionDel(){
  var respuesta = confirm("Esta seguro de BORRAR informacion ?");   // var xx = confirm()  genera un boleano para confirmar accion
  if(respuesta == true){  // si la respuesta es positivo
    var msg = alertify.success('Default message');
    msg.delay(3).setConten('Datos Borrados con <b>EXITO</b>');
    return true;  // regrese un true
  }else{  // sino
    alertify.error("Error");
    return false; //regrese un falso
  }
}
// Funcion para controlar acciones de confirmacion. EDITAR Y ELIMINAR
function ConfirmarAccionEdit(){
  var respuesta = confirm("Esta seguro de EDITAR informacion?");   // var xx = confirm()  genera un boleano para confirmar accion
  if(respuesta == true){  // si la respuesta es positivo
    return true;  // regrese un true
  }else{  // sino
    return false; //regrese un falso
  }  
}

function accionesAdminSis(){      // se crea funcion de js

    console.log("cargo la funcion acciones AdminSistema");    // para confirmar que funciona mediante vista desarrollador
  // cargar form buscar persona
    $('#btnBuscarPer').click(function (event){     // cargar evento click en #elemento
        event.preventDefault();     // para que no se ejecute el sumit del fomrulario
        console.log("cargo accion form buscPerAjax");        // para confirmar que funciona mediante vista desarrollador
        $('#cnt-info').load('../adminSis/buscPer.php');    // (contendor) cargar (modulo)
    });
  // no permite espacio en blanco para buscar en form buscPersonal
    $('#buscar').click(function(){  // asigno evento a funcion click del boton Entrar utilizando #
        if ($('#buscador').val() == "") {   // si el input usuario esta vacio
            console.log("cargo accion ctrl espacio en blaco");
            alertify.alert("<b>Debes ingresar el ID</b> Campo en blanco").setHeader('<b> Cuidado! </b></em> ');  // mensaje de alerta indicando que el campo esta vacio
            return false;   //para que el mensaje no se cierre automaticamente
        }
    }); //.click(funtion)
    // borrar datos en form de con id id="frmRegistro" desde boton id="borrarCampos"
    $("#borrarCampos").click(function(){
        console.log("cargo accion borrar datos form");
        alertify.alert("<b>Datos borrados</b> Ingresar informacion de nuevo").setHeader('<b> Cuidado! </b></em> ');  // mensaje de alerta indicando que el campo esta vacio
        $("#frmRegistro")[0].reset();
      });

    // control de no inputs en blanco en form crearPersonal y envio mediante AJAX
    $('#registrarNuevo').click(function(){  // primer fila de inputs
        console.log("cargo accion validar datos en blanco form");
        if($('#tipodoc').val().trim() === ''){  // primera fila de inputs
          alertify.alert("Debes Elegir <b>Tipo de Documento</b>").setHeader('<em> Alerta </em>');
          return false;
        }else if($('#numdocumento').val()==""){
          alertify.alert("Debes Digitar <b>Numero de documento</b>").setHeader('<em> Alerta </em>');
          return false;
        }else if($('#nombres').val()==""){  // segunda fila de inputs
          alertify.alert("Debes Digitar <b>Nombre(s)</b>").setHeader('<em> Alerta </em>');
          return false;
        }else if($('#apellidos').val()==""){
          alertify.alert("Debes Digitar <b>Apellido(s)</b>").setHeader('<em> Alerta </em>');
          return false;
        }else if($('#celular').val()==""){  // tercera fila de inputs
          alertify.alert("Debes Digitar <b>Numero Celular</b>").setHeader('<em> Alerta </em>');
          return false;
        }else if($('#telefono').val()==""){
          alertify.alert("Debes Digitar <b>Telefono</b>").setHeader('<em> Alerta </em>');
          return false;
        }else if($('#direccion').val()==""){    //cuarta fila de inputs
          alertify.alert("Debes Digitar <b>Direccion</b>").setHeader('<em> Alerta </em>');
          return false;     
        }else if($('#email').val()==""){  
          alertify.alert("Debes Digitar <b>Correo Electronico</b>").setHeader('<em> Alerta </em>');
          return false;        
        }else if($('#fechanac').val()==""){   // quinta fila de inputs
          alertify.alert("Debes elegir una <b>fecha de nacimiento</b>").setHeader('<em> Alerta </em>');
          return false;        
        }else if($('#estcivil').val().trim() === ''){
          alertify.alert("Debes Elegir <b>Estado Civil</b>").setHeader('<em> Alerta </em>');
          return false;        
        }else if($('#sede').val().trim() === ''){ // sexta fila de inputs
          alertify.alert("Debes Elegir <b>sede</>").setHeader('<em> Alerta </em>');
          return false;        
        }else if($('#salarios').val().trim() === ''){
          alertify.alert("Debes Elegir <b>Salario</b>").setHeader('<em> Alerta </em>');
          return false;        
        }

        // crear paquete de datos para pasar al ajax

        cadena="nombres=" + $('#nombres').val() +
                "&email=" + $('#email').val() +
                "&apellidos=" + $('#apellidos').val() +
                "&fechanac=" + $('#fechanac').val() +
                "&tipodoc=" + $('#tipodoc').val() +
                "&numdocumento=" + $('#numdocumento').val() +
                "&estcivil=" + $('#estcivil').val() +
                "&celular=" + $('#celular').val() +
                "&sede=" + $('#sede').val() +
                "&telefono=" + $('#telefono').val() +
                "&salarios=" + $('#salarios').val() +
                "&direccion=" + $('#direccion').val();

    //creo el ajax
    $.ajax({
        type:"POST",
        url:"../dataBase/adminSis/regisPerAjax.php",
        data:cadena,
        success:function(r){
            if(r==2){
                alertify.alert("Este personal ya existe, Prueba con otro").setHeader('<em> Cuidado </em> ');
                return false; //para que el mensaje no se cierre automaticamente
            }
            else{
                $('#frmRegistro')[0].reset();
                alertify.success("Nuevo Personal</b> ingresado con EXITO!");
                return false; //para que el mensaje no se cierre automaticamente
            }
            // recepcion de respuesta no funciona correctamente
            //if
            /*
                        if(r==2){
                alertify.alert("Este personal ya existe, Prueba con otro").setHeader('<em> Titulo </em> ');
                //return false;
            }
            else if(r==1){
                $('#frmRegistro')[0].reset();
                alertify.success("Agregado con exito");
                //return false;
            }
            else{
                alertify.error("Fallo al agregar");
                //return false;
            }       //if
            */
        }   //success function
    }); //ajax

    }); //funcionregistrar nuevo

  // control de no inputs en blanco en form crearPais y envio mediante AJAX
    $('#registrarPais').click(function(){  // asigno evento a funcion click del boton Entrar utilizando #
      if ($('#nuevoPais').val() == "") {   // si el input usuario esta vacio
          console.log("cargo accion ctrl espacio en blaco");
          alertify.alert("<b>Debes ingresar el Nuevo Pais</b> Campo en blanco").setHeader('<b> Cuidado! </b></em> ');  // mensaje de alerta indicando que el campo esta vacio
          return false;   //para que el mensaje no se cierre automaticamente
      }

      // crear paquete de datos para pasar al ajax
      cadenaPais="nuevoPais=" + $('#nuevoPais').val();

      //creo el ajax
      $.ajax({
        type:"POST",
        url:"../dataBase/adminSis/regisPaisAjax.php",
        data:cadenaPais,
        success:function(r){
            if(r==2){
                alertify.alert("Este pais ya existe, Prueba con otro").setHeader('<em> Cuidado </em> ');
                return false;
            }
            else{
                $('#frmRegistro')[0].reset();
                alertify.success("Nuevo Pais</b> ingresado con EXITO!");
                return false;
            }
        }   //success function
      }); //ajax
    }); //.click(funtion)

  // control de no inputs en blanco en form crearCiudad y envio mediante AJAX
  $('#registrarCiudad').click(function(){  // asigno evento a funcion click del boton Entrar utilizando #
    if ($('#idPais').val().trim() === '') {   // si el input usuario esta vacio
        console.log("cargo accion ctrl espacio en blaco");
        alertify.alert("<b>Debes elegir el Pais</b> Campo en blanco").setHeader('<b> Cuidado! </b></em> ');  // mensaje de alerta indicando que el campo esta vacio
        return false;   //para que el mensaje no se cierre automaticamente
    }else if($('#nuevaCiudad').val()==""){  
      alertify.alert("<b>Debes digitar la Nueva Ciudad</b> Campo en blanco").setHeader('<em> Alerta </em>');
      return false;        
    }

    // crear paquete de datos para pasar al ajax
    cadenaCiudad="nuevaCiudad=" + $('#nuevaCiudad').val() +
                  "&idPais=" + $('#idPais').val();

    //creo el ajax
    $.ajax({
      type:"POST",
      url:"../dataBase/adminSis/regisCiudadAjax.php",
      data:cadenaCiudad,
      success:function(r){
          if(r==2){
              alertify.alert("Esta Ciudad ya existe, Prueba con otra").setHeader('<em> Cuidado </em> ');
              return false;
          }
          else{
              $('#frmRegistro')[0].reset();
              alertify.success("Nueva Ciudad</b> ingresada con EXITO!");
              return false;
          }
      }   //success function
    }); //ajax
  }); //.click(funtion)

  // control de no inputs en blanco en form crearSede y envio mediante AJAX
  $('#registrarSede').click(function(){  // asigno evento a funcion click del boton Entrar utilizando #
    if ($('#idCiudad').val().trim() === '') {   // si el input usuario esta vacio
        console.log("cargo accion ctrl espacio en blaco");
        alertify.alert("<b>Debes elegir La ciudad</b> Campo en blanco").setHeader('<b> Cuidado! </b></em> ');  // mensaje de alerta indicando que el campo esta vacio
        return false;   //para que el mensaje no se cierre automaticamente
    }else if($('#nuevaSede').val()==""){  
      alertify.alert("Debes digitar <b>El NOMBRE de Nueva Sede</b> Campo en blanco").setHeader('<em> Alerta </em>');
      return false;        
    }else if($('#telefonoSede').val()==""){  
      alertify.alert("Debes digitar <b>El TELEFONO de Nueva Sede</b> Campo en blanco").setHeader('<em> Alerta </em>');
      return false;        
    }else if($('#direcSede').val()==""){  
      alertify.alert("Debes digitar <b>La DIRECCION de Nueva Sede</b> Campo en blanco").setHeader('<em> Alerta </em>');
      return false;        
    }

    // crear paquete de datos para pasar al ajax
    cadenaCiudad="nuevaSede=" + $('#nuevaSede').val() +
                  "&idCiudad=" + $('#idCiudad').val() +
                  "&telefonoSede=" + $('#telefonoSede').val()+
                  "&direcSede=" + $('#direcSede').val();

    //creo el ajax
    $.ajax({
      type:"POST",
      url:"../dataBase/adminSis/regisSedeAjax.php",
      data:cadenaCiudad,
      success:function(r){
          if(r==2){
              alertify.alert("<b>Esta Sede ya existe</b>, Prueba con otra").setHeader('<em> Cuidado </em> ');
              return false;
          }
          else{
              $('#frmRegistro')[0].reset();
              alertify.success("<b>Nueva Sede</b> ingresada con EXITO!");
              return false;
          }
      }   //success function
    }); //ajax
  }); //.click(funtion)

    // control de no inputs en blanco en form crearROL y envio mediante AJAX
    $('#registrarRol').click(function(){  // asigno evento a funcion click del boton Entrar utilizando #
      if ($('#nuevoRol').val() == "") {   // si el input usuario esta vacio
          console.log("cargo accion ctrl espacio en blaco");
          alertify.alert("<b>Debes ingresar el Nuevo Rol</b> Campo en blanco").setHeader('<b> Cuidado! </b></em> ');  // mensaje de alerta indicando que el campo esta vacio
          return false;   //para que el mensaje no se cierre automaticamente
      }

      // crear paquete de datos para pasar al ajax
      cadenaPais="nuevoRol=" + $('#nuevoRol').val();

      //creo el ajax
      $.ajax({
        type:"POST",
        url:"../dataBase/adminSis/regisRolAjax.php",
        data:cadenaPais,
        success:function(r){
            if(r==2){
                alertify.alert("Este Rol ya existe, Prueba con otro").setHeader('<em> Cuidado </em> ');
                return false;
            }
            else{
                $('#frmRegistro')[0].reset();
                alertify.success("<b>Nuevo Rol</b> ingresado con EXITO!");
                return false;
            }
        }   //success function
      }); //ajax
    }); //.click(funtion)

  // control de no inputs en blanco en form asignarRol y envio mediante AJAX
  $('#registrarRolxPersonal').click(function(){  // asigno evento a funcion click del boton Entrar utilizando #
    if ($('#idPer').val().trim() === '') {   // si el input usuario esta vacio
        console.log("cargo accion ctrl espacio en blaco");
        alertify.alert("<b>Debes elegir el Empleado</b> Campo en blanco").setHeader('<b> Cuidado! </b></em> ');  // mensaje de alerta indicando que el campo esta vacio
        return false;   //para que el mensaje no se cierre automaticamente
    }else if($('#idRol').val().trim() === ''){  
      alertify.alert("<b>Debes elegir el Rol</b> Campo en blanco").setHeader('<em> Alerta </em>');
      return false;        
    }

    // crear paquete de datos para pasar al ajax
    cadenaCiudad="idPer=" + $('#idPer').val() +
                  "&idRol=" + $('#idRol').val();

    //creo el ajax
    $.ajax({
      type:"POST",
      url:"../dataBase/adminSis/regisRolPerAjax.php",
      data:cadenaCiudad,
      success:function(r){
          if(r==2){
              alertify.alert("<b>Esta Relacion Rol y empleado ya existe</b>, Prueba con otra").setHeader('<em> Cuidado </em> ');
              return false;
          }
          else{
              $('#frmRegistro')[0].reset();
              alertify.success("<b>Nueva asignacion</b> ingresada con EXITO!");
              return false;
          }
      }   //success function
    }); //ajax
  }); //.click(funtion)

  // mensajes de informacion sobre botones DETALLES, EDITAR Y ELIMINAR PERSONAL
  $('#detallePersonal').one('mousemove', function(){  // asigno evento a funcion click del boton Entrar utilizando #
      alertify.success("<b>Ver Detalles</b> de empleado");
      return false;
  }); //.click(funtion)
  // mensaje de EDITAR
  $('#editarPersonal').one('mousemove', function(){  // asigno evento a funcion click del boton Entrar utilizando #
    alertify.warning("<b>Editar informacion</b> de empleado");
    return false;
  }); //.click(funtion)
  // mensaje de ELIMINAR
  $('#delPersonal').one('mousemove', function(){  // asigno evento a funcion click del boton Entrar utilizando #
    alertify.error("<b>Eliminar info</b> de empleado");
    return false;
  }); //.click(funtion)

  
}