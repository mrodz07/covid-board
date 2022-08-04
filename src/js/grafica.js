// Variables de contagios
var contagios_alabama, contagios_alaska, contagios_arizona, contagios_arkansas, contagios_california, contagios_colorado, contagios_connecticut, contagios_delaware, contagios_district_columbia, contagios_florida, contagios_georgia, contagios_guam, contagios_hawaii, contagios_idaho, contagios_illinois, contagios_indiana, contagios_iowa, contagios_kansas, contagios_kentucky, contagios_louisiana, contagios_maine, contagios_maryland, contagios_massachusetts, contagios_michigan, contagios_minnesota, contagios_mississippi, contagios_missouri, contagios_montana, contagios_nebraska, contagios_nevada, contagios_new_hampshire, contagios_new_jersey, contagios_new_mexico, contagios_new_york, contagios_north_carolina, contagios_north_dakota, contagios_ohio, contagios_oklahoma, contagios_oregon, contagios_pennsylvania, contagios_puerto_rico, contagios_rhode_island, contagios_south_carolina, contagios_south_dakota, contagios_tennessee, contagios_texas, contagios_utah, contagios_vermont, contagios_virgin_islands, contagios_virginia, contagios_washington, contagios_west_virginia, contagios_wisconsin, contagios_wyoming;

$(document).ready(function() {
	init_vars();
	var ctx = document.getElementById('grafica').getContext('2d');
	var chart = new Chart(ctx, {
		// The type of chart we want to create
		type: 'pie',

		// The data for our dataset
		data: {
			datasets: [{
				data: [contagios_alabama, contagios_alaska, contagios_arizona, contagios_arkansas, contagios_california, contagios_colorado, contagios_connecticut, contagios_delaware, contagios_district_columbia, contagios_florida, contagios_georgia, contagios_guam, contagios_hawaii, contagios_idaho, contagios_illinois, contagios_indiana, contagios_iowa, contagios_kansas, contagios_kentucky, contagios_louisiana, contagios_maine, contagios_maryland, contagios_massachusetts, contagios_michigan, contagios_minnesota, contagios_mississippi, contagios_missouri, contagios_montana, contagios_nebraska, contagios_nevada, contagios_new_hampshire, contagios_new_jersey, contagios_new_mexico, contagios_new_york, contagios_north_carolina, contagios_north_dakota, contagios_ohio, contagios_oklahoma, contagios_oregon, contagios_pennsylvania, contagios_puerto_rico, contagios_rhode_island, contagios_south_carolina, contagios_south_dakota, contagios_tennessee, contagios_texas, contagios_utah, contagios_vermont, contagios_virgin_islands, contagios_virginia, contagios_washington, contagios_west_virginia, contagios_wisconsin, contagios_wyoming],

				backgroundColor: [
					'rgb(255, 0, 0)', 'rgb(102, 255, 102)', 'rgb(255, 153, 0)', 'rgb(255, 255, 0)', 'rgb(255, 102, 255)','rgb(255, 0, 0)', 'rgb(102, 255, 102)', 'rgb(255, 255, 0)', 'rgb(255, 153, 0)', 'rgb(255, 102, 255)','rgb(255, 0, 0)', 'rgb(102, 255, 102)', 'rgb(255, 255, 0)', 'rgb(255, 153, 0)', 'rgb(255, 102, 255)','rgb(255, 0, 0)', 'rgb(102, 255, 102)', 'rgb(255, 255, 0)', 'rgb(255, 153, 0)', 'rgb(255, 102, 255)','rgb(255, 0, 0)', 'rgb(102, 255, 102)', 'rgb(255, 255, 0)', 'rgb(255, 153, 0)', 'rgb(255, 102, 255)','rgb(255, 0, 0)', 'rgb(102, 255, 102)', 'rgb(255, 255, 0)', 'rgb(255, 153, 0)', 'rgb(255, 102, 255)','rgb(255, 0, 0)', 'rgb(102, 255, 102)', 'rgb(255, 255, 0)', 'rgb(255, 153, 0)', 'rgb(255, 102, 255)','rgb(255, 0, 0)', 'rgb(102, 255, 102)', 'rgb(255, 255, 0)', 'rgb(255, 153, 0)', 'rgb(255, 102, 255)','rgb(255, 0, 0)', 'rgb(102, 255, 102)', 'rgb(255, 255, 0)', 'rgb(255, 153, 0)', 'rgb(255, 102, 255)','rgb(255, 0, 0)', 'rgb(102, 255, 102)', 'rgb(255, 255, 0)', 'rgb(255, 153, 0)', 'rgb(255, 102, 255)','rgb(255, 0, 0)', 'rgb(102, 255, 102)', 'rgb(255, 255, 0)', 'rgb(255, 153, 0)', 'rgb(255, 102, 255)','rgb(255, 0, 0)', 'rgb(102, 255, 102)', 'rgb(255, 255, 0)', 'rgb(255, 153, 0)', 'rgb(255, 102, 255)' 
				]
			}],

			labels: [
				'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Washington D.C', 'Florida', 'Georgia', 'Guam', 'Hawaí', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Montana', 'Nebraska', 'Nevada', 'Hampshire', 'Nueva Jersey', 'Nuevo México', 'Nueva York', 'Carolina del norte', 'Dacota del norte', 'Islas marianas del norte', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvannia', 'Puerto Rico', 'Rhode Island', 'Carolina del sur', 'Dacota del sur', 'Tennesse', 'Texas', 'Utah', 'Vermont', 'Islas virgenes', 'Virginia', 'Washington', 'Virginia del este', 'Wisconsin', 'Wyoming' 
			]
		},

		// Configuration options go here
		options: {
			responsive: true, 
			maintainAspectRatio: false, 
			legend: {
				display: false
			}
		}
	});
});

function init_vars() {
	getStateConfirmedGraph("alabama"); 
	getStateConfirmedGraph("alaska"); 
	getStateConfirmedGraph("arizona"); 
	getStateConfirmedGraph("arkansas"); 
	getStateConfirmedGraph("california"); 
	getStateConfirmedGraph("colorado"); 
	getStateConfirmedGraph("connecticut"); 
	getStateConfirmedGraph("delaware"); 
	getStateConfirmedGraph("district_columbia"); 
	getStateConfirmedGraph("florida"); 
	getStateConfirmedGraph("georgia"); 
	getStateConfirmedGraph("guam"); 
	getStateConfirmedGraph("hawaii"); 
	getStateConfirmedGraph("idaho"); 
	getStateConfirmedGraph("illinois"); 
	getStateConfirmedGraph("indiana"); 
	getStateConfirmedGraph("iowa"); 
	getStateConfirmedGraph("kansas"); 
	getStateConfirmedGraph("kentucky"); 
	getStateConfirmedGraph("louisiana"); 
	getStateConfirmedGraph("maine"); 
	getStateConfirmedGraph("maryland"); 
	getStateConfirmedGraph("massachusetts"); 
	getStateConfirmedGraph("michigan"); 
	getStateConfirmedGraph("minnesota"); 
	getStateConfirmedGraph("mississippi"); 
	getStateConfirmedGraph("missouri"); 
	getStateConfirmedGraph("montana"); 
	getStateConfirmedGraph("nebraska"); 
	getStateConfirmedGraph("nevada"); 
	getStateConfirmedGraph("new_hampshire"); 
	getStateConfirmedGraph("new_jersey"); 
	getStateConfirmedGraph("new_mexico"); 
	getStateConfirmedGraph("new_york"); 
	getStateConfirmedGraph("north_carolina"); 
	getStateConfirmedGraph("north_dakota"); 
	getStateConfirmedGraph("ohio"); 
	getStateConfirmedGraph("oklahoma"); 
	getStateConfirmedGraph("oregon"); 
	getStateConfirmedGraph("pennsylvania"); 
	getStateConfirmedGraph("puerto_rico"); 
	getStateConfirmedGraph("rhode_island"); 
	getStateConfirmedGraph("south_carolina"); 
	getStateConfirmedGraph("south_dakota"); 
	getStateConfirmedGraph("tennessee"); 
	getStateConfirmedGraph("texas"); 
	getStateConfirmedGraph("utah"); 
	getStateConfirmedGraph("vermont"); 
	getStateConfirmedGraph("virgin_islands"); 
	getStateConfirmedGraph("virginia"); 
	getStateConfirmedGraph("washington"); 
	getStateConfirmedGraph("west_virginia"); 
	getStateConfirmedGraph("wisconsin"); 
	getStateConfirmedGraph("wyoming"); 
}

function getStateConfirmedGraph(state_name) {
	$.ajax({
		type: "POST", 
		url: "../php/getStateData.php", 
		//async: false, 
		data: {estado_confirmados: state_name},
		success: function(response) {regresar_confirmados(state_name, response);}
	}); 
}

function regresar_confirmados(state_name, data) {
	switch(state_name) {
		case "alabama": 
			contagios_alabama = data;
			break;
		case "alaska":
			contagios_alaska = data; 
			break;
		case "arizona": 
			contagios_arizona = data; 
			break;
		case "arkansas": 
			contagios_arkansas = data;	
			break;
		case "california": 
			contagios_california = data;
			break;
		case "colorado": 
			contagios_colorado = data;
			break;
		case "connecticut": 
			contagios_connecticut = data; 
			break;
		case "delaware": 
			contagios_delaware = data; 
			break;
		case "district_columbia": 
			contagios_district_columbia = data; 
			break;
		case "florida": 
			contagios_florida = data; 
			break;
		case "georgia": 
			contagios_georgia = data; 
			break;
		case "guam": 
			contagios_guam = data; 
			break;
		case "hawaii": 
			contagios_hawaii = data; 
			break;
		case "idaho": 
			contagios_idaho = data; 
			break;
		case "illinois": 
			contagios_illinois = data; 
			break;
		case "indiana": 
			contagios_indiana = data; 
			break;
		case "iowa": 
			contagios_iowa = data; 
			break;
		case "kansas": 
			contagios_kansas = data; 
			break;
		case "kentucky": 
			contagios_kentucky = data; 
			break;
		case "louisiana": 
			contagios_louisiana = data; 
			break;
		case "maine": 
			contagios_maine = data; 
			break;
		case "maryland": 
			contagios_maryland = data; 
			break;
		case "massachusetts": 
			contagios_massachusetts = data; 
			break;
		case "michigan": 
			contagios_michigan = data; 
			break;
		case "minnesota": 
			contagios_minnesota = data; 
			break;
		case "mississippi": 
			contagios_mississippi = data; 
			break;
		case "missouri": 
			contagios_missouri = data; 
			break;
		case "montana": 
			contagios_montana = data; 
			break;
		case "nebraska": 
			contagios_nebraska = data; 
			break;
		case "nevada": 
			contagios_nevada = data; 
			break;
		case "new_hampshire": 
			contagios_new_hampshire = data; 
			break;
		case "new_jersey": 
			contagios_new_jersey = data; 
			break;
		case "new_mexico": 
			contagios_new_mexico = data; 
			break;
		case "new_york": 
			contagios_new_york = data; 
			break;
		case "north_carolina": 
			contagios_north_carolina = data; 
			break;
		case "north_dakota": 
			contagios_north_dakota = data; 
			break;
		case "northen_mariana_islands": 
			contagios_northen_mariana_islands = data; 
			break;
		case "ohio": 
			contagios_ohio = data; 
			break;
		case "oklahoma": 
			contagios_oklahoma = data; 
			break;
		case "oregon": 
			contagios_oregon = data; 
			break;
		case "pennsylvania": 
			contagios_pennsylvania = data; 
			break;
		case "puerto_rico": 
			contagios_puerto_rico = data; 
			break;
		case "rhode_island": 
			contagios_rhode_island = data; 
			break;
		case "south_carolina": 
			contagios_south_carolina = data; 
			break;
		case "south_dakota": 
			contagios_south_dakota = data; 
			break;
		case "tennessee": 
			contagios_tennessee = data; 
			break;
		case "texas": 
			contagios_texas = data; 
			break;
		case "utah": 
			contagios_utah = data; 
			break;
		case "vermont": 
			contagios_vermont = data; 
			break;
		case "virgin_islands": 
			contagios_virgin_islands = data; 
			break;
		case "virginia": 
			contagios_virginia = data; 
			break;
		case "washington": 
			contagios_washington = data; 
			break;
		case "west_virginia": 
			contagios_west_virginia = data; 
			break;
		case "wisconsin": 
			contagios_wisconsin = data; 
			break;
		case "wyoming":
			contagios_wyoming = data; 
			break;
	}
}
