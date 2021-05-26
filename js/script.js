$(document).ready(function () {
	$('#btnSend').click(function () {
		var errores = '';

		// Validado Nombre ==============================
		if ($('#names').val() == '') {
			errores += '<p>Escriba un nombre</p>';
			$('#names').css('border-bottom-color', '#F14B4B');
		} else {
			$('#names').css('border-bottom-color', '#d1d1d1');
		}

		// Validado Correo ==============================
		if ($('#email').val() == '') {
			errores += '<p>Ingrese un correo</p>';
			$('#email').css('border-bottom-color', '#F14B4B');
		} else {
			$('#email').css('border-bottom-color', '#d1d1d1');
		}

		// Validado Mensaje ==============================
		if ($('#mensaje').val() == '') {
			errores += '<p>Escriba un mensaje</p>';
			$('#mensaje').css('border-bottom-color', '#F14B4B');
		} else {
			$('#mensaje').css('border-bottom-color', '#d1d1d1');
		}

		// ENVIANDO MENSAJE ============================
		if ((errores == '') == false) {
			var mensajeModal =
				'<div class="modal_wrap">' +
				'<div class="mensaje_modal">' +
				'<h3>Errores encontrados</h3>' +
				errores +
				'<span id="btnClose">Cerrar</span>' +
				'</div>' +
				'</div>';

			$('body').append(mensajeModal);
		}

		// CERRANDO MODAL ==============================
		$('#btnClose').click(function () {
			$('.modal_wrap').remove();
		});
	});
});

$(function () {
	$('.validar')
		.keypress(function (e) {
			if (isNaN(this.value + String.fromCharCode(e.charCode))) return false;
		})
		.on('cut copy paste', function (e) {
			e.preventDefault();
		});
});

$('.letras').keypress(function (key) {
	window.console.log(key.charCode);
	if (
		(key.charCode < 97 || key.charCode > 122) && //letras mayusculas
		(key.charCode < 65 || key.charCode > 90) && //letras minusculas
		key.charCode != 45 && //retroceso
		key.charCode != 241 && //ñ
		key.charCode != 209 && //Ñ
		key.charCode != 32 && //espacio
		key.charCode != 225 && //á
		key.charCode != 233 && //é
		key.charCode != 237 && //í
		key.charCode != 243 && //ó
		key.charCode != 250 && //ú
		key.charCode != 193 && //Á
		key.charCode != 201 && //É
		key.charCode != 205 && //Í
		key.charCode != 211 && //Ó
		key.charCode != 218 //Ú
	)
		return false;
});
