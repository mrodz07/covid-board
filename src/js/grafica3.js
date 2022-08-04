var fecha1  = new Date(); 
var fecha2  = new Date(); 
var fecha3  = new Date(); 
var fecha4  = new Date(); 
var fecha5  = new Date(); 
var fecha6  = new Date(); 
var fecha7  = new Date(); 
var c1, c2, c3, c4, c5, c6, c7; 

$(document).ready(function() {
	init_vars();
	let ctx = document.getElementById('grafica3').getContext('2d');
	let chart = new Chart(ctx, {
		// The type of chart we want to create
		type: 'line',

		// The data for our dataset
		data: {
			labels: [obtenerFecha(fecha1.setDate(fecha1.getDate() - 7)),obtenerFecha(fecha2.setDate(fecha2.getDate() - 6)),obtenerFecha(fecha3.setDate(fecha3.getDate() - 5)),obtenerFecha(fecha4.setDate(fecha4.getDate() - 4)),obtenerFecha(fecha5.setDate(fecha5.getDate() - 3)),obtenerFecha(fecha6.setDate(fecha6.getDate() - 2)),obtenerFecha(fecha7.setDate(fecha7.getDate() - 1))], 
			datasets: [{
				label: 'Casos por día',
				backgroundColor: 'rgb(0, 153, 255)',
				borderColor: 'rgb(0, 153, 255', 
				fill: false, 
				data: [c1, c2, c3, c4, c5, c6, c7]
			}]
		},

		// Configuration options go here
		options: {
			responsive: true, 
			maintainAspectRatio: false, 
				legend: {
					display:false
				}
		}
	});
});

function obtenerFecha(fecha_actual) {
	var fecha = new Date(fecha_actual);
	mes = '' + (fecha.getMonth() + 1),
	dia = '' + fecha.getDate(),
	anio = fecha.getFullYear();

	if(mes.length < 2) 
		mes = '0' + mes;
	if(dia.length < 2)
		dia = '0' + dia; 

	return [dia, mes, anio].join('-'); 

}

function getConfDay(dia) {
	$.ajax({
		type: "POST", 
		url: "../php/getGeneralMetrics.php", 
		async: false, 
		data: {conf_dia: dia},
		success: function(response) {regresar_confirmados(dia, response);}
	}); 
}

function regresar_confirmados(dia, response) {
	switch(dia) {
		case 1: 
			c1 = response; 
			break;
		case 2: 
			c2 = response; 
			break;
		case 3: 
			c3 = response; 
			break;
		case 4: 
			c4 = response; 
			break;
		case 5: 
			c5 = response; 
			break;
		case 6: 
			c6 = response; 
			break;
		case 7: 
			c7 = response; 
			break;
	}
}

function init_vars() {
	getConfDay(1);
	getConfDay(2);
	getConfDay(3);
	getConfDay(4);
	getConfDay(5);
	getConfDay(6);
	getConfDay(7);
}
