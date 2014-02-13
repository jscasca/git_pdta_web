var existingWarningCodes = {
	"1001001":"Ese correo ya existe! Por favor intenta otro correo.",
	"1001002":"",
	"default":"Lo sentimos pero paso algo inesperado"
}

var existingErrorCodes = {
	"501":"501 Error",
	"504":"Lo sentimos pero el servidor no respondio a tiempo. Prueba mas tarde.",
	"default":"Lo sentimos un error inesperado se ha ocasionado!"
}

function displayWarningByCode(code) {
	var warningText;
	if(typeof existingWarningCodes['n' + code] !== 'undefined') {
		warningText = existingWarningCodes['n' + code];
	} else {warningText = existingWarningCodes['default'];}
	displayWarning(warningText);
}

function displayErrorByCode(code) {
	var errorText;
	if(typeof existingErrorCodes[code] !== 'undefined') {
		errorText = existingErrorCodes[code];
	} else {errorText = existingErrorCodes['default'];}
	displayError(errorText);
}

function displayWarning(warning, input) {
	input = typeof input !== 'undefined' ? input : null;
	alert(warning);
	if(input !== null) {
		setTimeout(function(){input.focus();}, 10);
	}
}

function displayError(error) {
	alert(error);
}
