
function warningDisplay(warningText) {
	alert(warningText);
}

function successDisplay(text, timeout ){
	timeout = typeof timeout !== 'undefined' ? timeout : 10;
	//Do the alert
	console.log(text);
}
			
function toggleBooks(divId, height, divToggle) {
	if($('#' + divId).height() == '100') {
		$('#' + divId).animate({height:height + 20}, 1000);
		$('#' + divToggle).html("Ver menos");
	} else {
		$('#' + divId).animate({height:'100px'}, 1000);
		$('#' + divToggle).html("Ver m&aacute;s");
	}
}

function toggleBooksTitle(divId, height, divToggle) {
	if($('#' + divId).height() == '140') {
		$('#' + divId).animate({height:height + 95}, 1000);
		$('#' + divToggle).html("Ver menos");
	} else {
		$('#' + divId).animate({height:'140px'}, 1000);
		$('#' + divToggle).html("Ver m&aacute;s");
	}
}
