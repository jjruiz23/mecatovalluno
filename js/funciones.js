function accionesAdminSis(){      // se crea funcion de js

    console.log("cargo la funcion acciones AdminSistema");    // para confirmar que funciona mediante vista desarrollador

    $('#btnBuscarPer').click(function (event){     // cargar evento click en #elemento
        event.preventDefault();     // para que no se ejecute el sumit del fomrulario
        console.log("cargo accion form buscPerAjax");        // para confirmar que funciona mediante vista desarrollador
        $('#cnt-info').load('../adminSis/buscPer.php');    // (contendor) cargar (modulo)
    });

    $('#buscar').click(function(){  // asigno evento a funcion click del boton Entrar utilizando #
        if ($('#buscador').val() == "") {   // si el input usuario esta vacio
            console.log("cargo accion ctrl espacio en blaco");
            alertify.alert("<b>Debes ingresar el ID</b> Campo en blanco").setHeader('<b> Cuidado! </b></em> ');  // mensaje de alerta indicando que el campo esta vacio
            return false;   //para que el mensaje no se cierre automaticamente
        }
    }); //.click(funtion)

    $("#borrarCampos").click(function(){
        console.log("cargo accion borrar datos form");
        alertify.alert("<b>Datos borrados</b> Ingresar informacion de nuevo").setHeader('<b> Cuidado! </b></em> ');  // mensaje de alerta indicando que el campo esta vacio
        $("#frmRegistro")[0].reset();
      })
/*
      $("#borrarCampos").click(function(){
        console.log("borrocampos");
        $("#frmRegistro").val($());
        alertify.alert("<b>Campos Borrados</b> Inicie de nuevo!").setHeader('<b> Diligenciar de nuevo </b></em> ');  // mensaje de alerta indicando que el campo esta vacio
      });

    
    $('#btnConsoPer').click(function (event){     // cargar evento click en #elemento
        event.preventDefault();     // para que no se ejecute el sumit del fomrulario
        console.log("cargo accion consoper");        // para confirmar que funciona mediante vista desarrollador
        $('#cnt-info').load('../adminSis/buscPer.php');    // (contendor) cargar (modulo)
    });
    */
}