var togglePassword = document.getElementById("toggle-password");
if (window.location.host == 'localhost:8080') {
	var BASE_URL = "http://localhost:8080/tareas/";
} else {
	var BASE_URL = "http://t.yaledigocomo.com/";
}


document.getElementById('recuperar').style.display = 'none';
document.getElementById('msgerror').style.display = 'none';
document.getElementById('msgerror1').style.display = 'none';

$('#btn_acceder').attr('disabled', true); //set button disable 



//Confirmar fin alistamiento 
function olvide_password() {
	event.preventDefault();
	$('#i_login').hide();
	$('#recuperar').fadeIn(1000);
}

$('#N_password').on('change keyup paste', function () {
	$('#btn_acceder').attr('disabled', false);

	if ($('#N_password').val().length == 0) {
		$('#btn_acceder').attr('disabled', true);
	}
});



$(document).ready(function () {
	$('#password').blur(function () {
		var user = $(this).val();

		if (user == '') {

			$('#msg_password').html('La Contraseña es requerida').css('color', 'red');

		} else {

			$('#msg_password').empty();
			$('#btn_acceder').append('<i btn btn-primary></i>');
			$('#btn_acceder').text('Acceder'); //Cambio el texto del botón
			$('#btn_acceder').attr('disabled', false); //set button disable 

		}

	});

});

$(document).ready(function () {
	$('#username').focus();
	$('#username').blur(function () {
		var user = $('#username').val();
		if (user == '') {

			$('#msg_username').html('El Usuario es requerido').css('color', 'red');

		} else {

			var info = { username: user };
			$('#btn_acceder').html('<i class="spinner-border spinner-border-sm"></i> Buscando...'); //Cambio el texto del botón
			$('#btn_acceder').attr('disabled', true); //set button disable 


			$.ajax({
				url: BASE_URL + 'login/valid_login_ajax',
				type: 'POST',
				data: info,
				success: function (msg) {  // alert(msg);  

					if (msg != 1) {

						$('#msg_username').html('El Usuario es Incorrectos').css('color', 'red');
						$('#btn_acceder').attr('disabled', true); //set button disable 
						$('#btn_acceder').text('Acceder'); //Cambio el texto del botón
						$('#btn_acceder').attr('disabled', true); //set button disable 


					} else {
						$('#msg_username').html('El Usuario es correcto').css('color', 'green');
						$('#btn_acceder').append('<i btn btn-primary></i>');
						$('#btn_acceder').text('Acceder'); //Cambio el texto del botón
						$('#btn_acceder').attr('disabled', false); //set button disable 


					}
				}

			});
		}

	});
});

function logeo() {


	document.getElementById('msgerror').style.display = 'none';


	var user = $('#username').val();
	var password = $('#password').val();

	if (user == '') {
		$('#msg_username').html('El Usuario es requerido').css('color', 'red');

	} else {
		$('#btn_acceder').html('<i class="spinner-border spinner-border-sm"></i> Accediendo...'); //Cambio el texto del botón
		$('#btn_acceder').attr('disabled', true); //set button disable 

		$.ajax({
			url: BASE_URL + 'login/validar_login',
			type: 'POST',
			dataType: 'json',
			data: {
				username: user,
				password: password
			},
			success: function (msg) {  // alert(msg);	
			//	alert(msg.length);
				if (msg.length === 0) {					
			//	if (msg != 1) {
					document.getElementById('msgerror').style.display = '';
					$('#btn_acceder').append('<i btn btn-primary></i>');
					$('#btn_acceder').text('Acceder'); //Cambio el texto del botón
					$('#btn_acceder').attr('disabled', false); //set button disable 

				} else {


					window.location.href = BASE_URL + msg;
				}
			}

		});
	}

};

function recuperar_password() {
	event.preventDefault();
	document.getElementById('msgerror1').style.display = 'none';
	var email = $('#email').val();

	if (email == '') {
		$('#msg_email').html('El correo es requerido').css('color', 'red');

	} else {
		$('#btn_recuperar').html('<i class="spinner-border spinner-border-sm"></i> Recuperando...'); //Cambio el texto del botón
		$('#btn_recuperar').attr('disabled', true); //set button disable 

		$.ajax({
			url: BASE_URL + 'login/recuperar',
			type: 'POST',
			data: {
				email: email
			},
			success: function (data) {  // alert(msg);
				if (data == 0) {
					document.getElementById('msgerror1').style.display = '';
					$('#btn_recuperar').append('<i btn btn-primary></i>');
					$('#btn_recuperar').text('Recuperar'); //Cambio el texto del botón
					$('#btn_recuperar').attr('disabled', false); //set button disable 
				} else {

					$('#btn_recuperar').append('<i btn btn-primary></i>');
					$('#btn_recuperar').text('Recuperar'); //Cambio el texto del botón
					$('#btn_recuperar').attr('disabled', false); //set button disable 
					//window.location.href = BASE_URL + "login/logeo";

					Swal
						.fire({
							title: "AVISO",
							text: "Se ha enviando un correo con las instrucciones para la recuperacion de la password",
							icon: 'warning',
							confirmButtonText: "ok",
						})
						.then(resultado => {
							if (resultado.value) {
								// Hicieron click en "Sí"
								window.location.href = BASE_URL + "login/logeo";
							} else {
								// Dijeron que no

							}
						});

				}
			}

		});
	}
}


function nueva_password() {
	event.preventDefault();

	var id = $('#N_usuario_id').val();
	var password = $('#N_password').val();

	$.ajax({
		url: BASE_URL + 'login/nueva_password',
		type: 'POST',
		data: {
			id: id,
			password: password

		},
		success: function (data) {
			if (data == 0) {
				document.getElementById('msgerror').style.display = 'true';
				$('#btn_acceder').append('<i btn btn-primary></i>');
				$('#btn_acceder').text('Enviar'); //Cambio el texto del botón
				$('#btn_acceder').attr('disabled', false); //set button disable 

			} else {

				$('#btn_acceder').append('<i btn btn-primary></i>');
				$('#btn_acceder').text('accediedo'); //Cambio el texto del botón
				$('#btn_acceder').attr('disabled', false); //set button disable 
				//window.location.href = BASE_URL + "login/logeo";
				Swal
					.fire({
						title: "PERFECTO!!!",
						text: "Tú clave ha sido creada correctamente",
						icon: 'warning',
						confirmButtonText: "ok",
					})
					.then(resultado => {
						if (resultado.value) {
							// Hicieron click en "Sí"
							window.location.href = BASE_URL + "login/logeo";
						} else {
							// Dijeron que no

						}
					});
			}
		}

	});
}



