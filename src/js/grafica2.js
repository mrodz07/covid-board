var ctx;
var afectados, poblacion, no_afectados; 
var chart;

$(document).ready(function() {
	init_variables();
	ctx = document.getElementById('grafica2').getContext('2d');
	chart = new Chart(ctx, {
		// The type of chart we want to create
		type: 'doughnut',

		// The data for our dataset
		data: {
			datasets: [{
				data: [no_afectados, afectados],

				backgroundColor: [
					'rgb(51, 153, 255)',
					'rgb(230, 230, 0)',
				]
			}],
			
			labels: [
				'Población no afectada',
				'Población afectada'
			]
		},

		// Configuration options go here
		options: {
			responsive: true, 
			maintainAspectRatio: false, 
		}
	});
});

function init_variables() {
	getUsCaseDoughnut("confirmados"); 
	getStatePopulationDoughnut("us");
}

function actualizarGraficaDoughnut() {
	chart.destroy();
	chart = new Chart(ctx, {
		// The type of chart we want to create
		type: 'doughnut',

		// The data for our dataset
		data: {
			datasets: [{
				data: [no_afectados, afectados],

				backgroundColor: [
					'rgb(51, 153, 255)',
					'rgb(230, 230, 0)',
				]
			}],
			
			labels: [
				'Población no afectada',
				'Población afectada'
			]
		},

		// Configuration options go here
		options: {
			responsive: true, 
			maintainAspectRatio: false, 
		}
	});
}

function getStatePopulationDoughnut(state_name) {
	$.ajax({
		type: "POST", 
		async: false,
		url: "../php/getHabitantData.php", 
		data: {state: state_name},
		success: function(response) {guardar_poblacion(response);}
	}); 
}

function getStateConfirmedDoughnut(state_name) {
	$.ajax({
		type: "POST", 
		async: false,
		url: "../php/getStateData.php", 
		data: {estado_confirmados: state_name},
		success: function(response) {guardar_afectados(response);}
	}); 
}

function getUsCaseDoughnut(c) {
	$.ajax({
		type: "POST", 
		async: false,
		url: "../php/getGeneralMetrics.php", 
		data: {case: c},
		success: function(response) {guardar_afectados(response);}
	}); 
}

function guardar_poblacion(pob) {
	// Hacemos copia simple de pob
	poblacion = pob;
	no_afectados = poblacion - afectados;
}

function guardar_afectados(afe) {
	// Hacemos copia simple de afe
	afectados = afe;
}

