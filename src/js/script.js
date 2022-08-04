// Variables para usar en el código
var states = ["alabama", "alaska", "arizona", "arkansas", "california", "colorado", "connecticut", "delaware", "district_columbia", "florida", "georgia", "guam", "hawaii", "idaho", "illinois", "indiana", "iowa", "kansas", "kentucky", "louisiana", "maine", "maryland", "massachusetts", "michigan", "minnesota", "mississippi", "missouri", "montana", "nebraska", "nevada", "new_hampshire", "new_jersey", "new_mexico", "new_york", "north_carolina", "north_dakota", "northen_mariana_islands", "ohio", "oklahoma", "oregon", "pennsylvania", "puerto_rico", "rhode_island", "south_carolina", "south_dakota", "tennessee", "texas", "utah", "vermont", "virgin_islands", "virginia", "washington", "west_virginia", "wisconsin", "wyoming"];
var cases = ["confirmados", "fallecidos", "negativos"]; 


// Script para hacer activo el link que selecciona el usuario.
$(document).ready(function() {
	$('.navbar .navbar-nav .nav-item .nav-link').click(function() {
		$('.navbar-nav .nav-link').removeClass('active'); 
		$(this).addClass('active'); 
	})
});

// Script para obtener los datos de estados unidos al inicio
$(document).ready(function() {
	let case_type; 
	let html_var; 
	for(let i=0; i<3; i++) {
		let case_type = cases[i]; 
		let html_var = "#" + "num_" + cases[i]; 
		getUSCase(case_type, html_var); 
	}
});

// Función que llena la lista de estados con datos de los confirmados, fallecidos y negativos
$(document).ready(function() {
	let var_case;
	let state_name;
	let case_name;
	let element_name;
	for(let i=0; i<3; i++) {
		case_name = cases[i]; 
		var_case = (i==0) ? "_conf" : (i==1) ? "_fall" : "_nega"; 
		element_name = "#eu" + var_case; 
		getUSCase(case_name, element_name); 
	}
	for(let i=0; i<55; i++) {
		state_name = states[i];
		element_name = "#" + states[i] + "_conf";
		getStateConfirmed(state_name, element_name); 
		element_name = "#" + states[i] + "_fall";
		getStateDead(state_name, element_name); 
		element_name = "#" + states[i] + "_nega"; 
		getStateNegative(state_name, element_name);
	}
});

// Obtener datos de todos los confirmados de eu
function getUSCase(case_name, element_name) {
	$.post("../php/getGeneralMetrics.php", {
		case: case_name
	}, function(data) {
		$(element_name).html(data);
	}); 
}

// Obtener datos de todos los confirmados de estados
function getStateConfirmed(state_name, element_name) {
	$.post("../php/getStateData.php", {
		estado_confirmados: state_name
	}, function(data) {
		$(element_name).html(data);
	}); 
}

// Obtener datos de todos los confirmados de estados
function getStateDead(state_name, element_name) {
	$.post("../php/getStateData.php", {
		estado_muertes: state_name
	}, function(data) {
		$(element_name).html(data);
	}); 
}

function getStateNegative(state_name, element_name) {
	$.post("../php/getStateData.php", {
		estado_negativos: state_name
	}, function(data) {
		$(element_name).html(data);
	}); 
}
