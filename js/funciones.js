function accionesAdminSis(){      // se crea funcion de js

    console.log("cargo la funcion");    // para confirmar que funciona mediante vista desarrollador

    $('#btnBuscarPer').click(function (event){     // cargar evento click en #elemento
        event.preventDefault();     // para que no se ejecute el sumit del fomrulario
        console.log("cargo accion busarper");        // para confirmar que funciona mediante vista desarrollador
        $('#cnt-info').load('../adminSis/buscPer.php');    // (contendor) cargar (modulo)
    });

    $('#buscar').click(function(){  // asigno evento a funcion click del boton Entrar utilizando #
        if ($('#buscador').val() == "") {   // si el input usuario esta vacio
            console.log("cargo la funcion");
            alertify.alert("<b>Debes ingresar el ID</b> Campo en blanco").setHeader('<b> Cuidado! </b></em> ');  // mensaje de alerta indicando que el campo esta vacio
            return false;   //para que el mensaje no se cierre automaticamente
        }
    }); //.click(funtion)

    /*
    $('#btnConsoPer').click(function (event){     // cargar evento click en #elemento
        event.preventDefault();     // para que no se ejecute el sumit del fomrulario
        console.log("cargo accion consoper");        // para confirmar que funciona mediante vista desarrollador
        $('#cnt-info').load('../adminSis/buscPer.php');    // (contendor) cargar (modulo)
    });
    */
}