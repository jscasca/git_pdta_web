//var appid='256872867765594';
//var appid='436381869736667';
//var appid='508179072574123';
window.fbAsyncInit = function() {
	FB.init({
		appId: appid, 
		channelUrl: channelUrl,
		status: true,
		cookie: true, 
		xfbml: true
	});

	FB.Event.subscribe('auth.login', function(response) {
		window.location.reload();
	});
	
	FB.Event.subscribe('auth.logout', function(response) {
		window.location.reload();
	});
};

/*
FB.init({
		appId: appid, 
		cookie: true, 
		xfbml: true,
		oauth: true
	});
 */

// Load the SDK asynchronously
(function(d, s, id){
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) {return;}
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/all.js";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

(function(d, debug){
    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; js.async = true;
    js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
    ref.parentNode.insertBefore(js, ref);
}(document, /*debug*/ false));

/*
(function() {
	var e = document.createElement('script'); e.async = true;
	e.src = document.location.protocol + '//connect.facebook.net/en_GB/all.js';
	document.getElementById('fb-root').appendChild(e);
}());
*/

function Shadowing(currentElement){
	currentElement.style.opacity=0.5;
}

function unShadowing(currentElement){
	currentElement.style.opacity=1.0;
}
/*
function sendRequestViaMultiFriendSelector() {
	FB.ui({method: 'apprequests',
		message: 'Te presento Posdta, un sitio donde podemos compartir lo que estamos leyendo. También podremos encontrar reseñas y calificaciones de libros para decidir cuál será nuestra próxima lectura.'
	}, requestCallback);
}

function requestCallback(response) {
// Handle callback here
}

function facebook_send_message(to) {
	FB.ui({
		app_id:appid,
		method: 'send',
		picture: "http://www.posdta.com/web/img/appicon.png",
		name: "Posdta, Comparte lo que estás leyendo",
		link: link,
		to:to,
		description:'Encontré tu perfil en Posdta y me interesa contactarte'
			});
}

function facebook_send_message_for_book(to,book,bookid) {
	FB.ui({
		app_id:appid,
		method: 'send',
		name: "Intercambio de libro",
		picture: "http://www.posdta.com/web/img/appicon.png",
		link: 'http://www.posdta.com/web/libro?i='+bookid,
		to:to,
		description:'Hola, encontré en Posdta que estás intercambiando el libro titulado '+book+' y me interesa negociar contigo.'
		});
}
*/
function doLogin() {  
	FB.login(function(response) {
		if(response.status == 'connected'){
			window.location = facebookRedirect;
		}
		if (response.session) {
			FB.api('/me',  function(response) {
				alert('User: ' + response.name);
				alert('Full details: ' + JSON.stringify(response));
			});
		}
	}, {perms:'publish_stream,user_birthday,user_about_me,user_checkins,user_groups,user_interests,user_location,email,read_stream,publish_checkins,read_friendlists'}); 
}
