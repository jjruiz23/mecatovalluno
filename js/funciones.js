function accionesAdminSis(){      // se crea funcion de js

    console.log("cargo la funcion");    // para confirmar que funciona mediante vista desarrollador

    $('#btnBuscarPer').click(function (event){     // cargar evento click en #elemento
        event.preventDefault();     // para que no se ejecute el sumit del fomrulario
        console.log("cargo accion busarper");        // para confirmar que funciona mediante vista desarrollador
        $('#cnt-info').load('../adminSis/buscPer.php');    // (contendor) cargar (modulo)
    });

    $('#btnConsoPer').click(function (event){     // cargar evento click en #elemento
        event.preventDefault();     // para que no se ejecute el sumit del fomrulario
        console.log("cargo accion consoper");        // para confirmar que funciona mediante vista desarrollador
        $('#cnt-info').load('../adminSis/buscPer.php');    // (contendor) cargar (modulo)
    });
}