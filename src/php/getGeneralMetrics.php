<?php
	// Obtenemos documento de todo estados unidos actualizado de internet
	$curl = curl_init("https://raw.githubusercontent.com/nytimes/covid-19-data/master/us.csv");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$us_general_db = curl_exec($curl); 
	curl_close($curl); 

	// Convertimos en arreglo la base general
	$fp = fopen("php://temp", 'r+'); 
	fputs($fp, $us_general_db); 
	rewind($fp); 
	$cov_arr = [];
	while( ($d = fgetcsv($fp) ) !== FALSE) {
		$cov_arr[] = $d; 
	}

	// Obtenemos el último elemento
	$ult_act = end($cov_arr);
	reset($cov_arr);

	// Obtenemos los valores
	$cas_con = $ult_act[1]; 
	$cas_fal = $ult_act[2];
	$cas_neg = ($cas_con - $cas_fal); 

	// Obtenemos los valores de los últimos siete días
	$seven_days = array_slice($cov_arr, -7);

	// Regresamos los datos dependiendo del caso
	if(isset($_POST['case'])) {
		$data = $_POST['case'];
		switch($data) {
			case "confirmados": 
				$res = $cas_con;
				break;
			case "fallecidos":
				$res = $cas_fal;
				break;
			case "negativos": 
				$res = $cas_neg;
				break;
		}
		echo $res;
	}

	if(isset($_POST['conf_dia'])) {
		$data = $_POST['conf_dia'];
		switch($data) {
			case "1": 
				$res = $seven_days[0][1];
				break;
			case "2":
				$res = $seven_days[1][1];
				break;
			case "3": 
				$res = $seven_days[2][1];
				break;
			case "4": 
				$res = $seven_days[3][1];
				break;
			case "5": 
				$res = $seven_days[4][1];
				break;
			case "6": 
				$res = $seven_days[5][1];
				break;
			case "7": 
				$res = $seven_days[6][1];
				break;
		}
		echo $res;
	}

?>
