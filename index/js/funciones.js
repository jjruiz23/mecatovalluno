function refrescar(){
  //actualizar pagina
  location.reload();
}

function accionesIndex(){      // se crea funcion de js

    console.log("cargo la funcion acciones Index");    // para confirmar que funciona mediante vista desarrollador
    // cargar form buscar persona
    $('#entrarSistema').click(function () {  // asigno funcion click al boton Entrar utilizando #
			if ($('#usuario').val() == "") {   // si el input usuario esta vacio
				alertify.alert("Debes ingresar el <b>Usuario</b>").setHeader('<em> <b>Alerta</b> </em>');  // mensaje de alerta indicando que el campo esta vacio
				// mensaje de alerta indicando que el campo esta vacio
				return false;  // detener el if
			} else if ($('#password').val() == "") {  // si el input de password esta vacio 
				alertify.alert("Debes ingresar la <b>Contraseña</b>").setHeader('<em> <b>Alerta</b> </em>');  // mensaje de alerta indicando que el campo esta vacio
				return false;  // detener el else if
			}  // cierre funcion click

			// crear paquete de datos para pasar al ajax
			// cre una cadena y le paso los datos ingresados en los inputs de usuario y password

			cadena = "usuario=" + $('#usuario').val() +   // le asigno los valores de #usuario a usuario
				"&password=" + $('#password').val();  // asigno los valores de #password a pasword
			// creo el ajax
			$.ajax({
				type: "POST", // defino el tipo POTS=ENVIO
				url: "../dataBase/adminSis/regisPerAjax.php",  // defino enviar los datos a  login.php
				data: cadena,  // seleciono los datos empaquetados en cadena
				success: function (r) { //  establesco que ejecutar con los datos recibidos en (r)
					if (r == 1) {  // si los datos recibidos son iguales a 1
						window.location = "adminSis/menuPpl.php";  // llevar a la pagina inicio.php
					} else {  //sino
						alertify.alert("Fallo al entrar :(").setHeader('<em> Titulo </em> ');	// mensaje de alerta para indicar el fallo.
					}
				} // cirre de funcion r
			}); // cierre del ajax
		});	// cierre del evento click
        //$('#frmRegistro')[0].reset(); 
}