<?php
	// Obtenemos documento de todos los estados de eu actualizado de internet
	$curl = curl_init("https://raw.githubusercontent.com/nytimes/covid-19-data/master/us-states.csv");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$us_states_db = curl_exec($curl); 
	curl_close($curl); 

	// Convertimos en arreglo la base por estados
	$fp = fopen("php://temp", 'r+'); 
	fputs($fp, $us_states_db); 
	rewind($fp); 
	$cov_states_arr = [];
	while( ($d = fgetcsv($fp) ) !== FALSE) {
		$cov_states_arr[] = $d; 
	}

	// Obtenemos los elementos correspondientes al día más actual 
	$ele_act = array_slice($cov_states_arr, -55); 
	$arr_alabama = array_slice($ele_act, 0, 1); 
	$arr_alaska = array_slice($ele_act, 1, -53); 
	$arr_arizona = array_slice($ele_act, 2, -52);  
	$arr_arkansas = array_slice($ele_act, 3, -51);  
	$arr_california = array_slice($ele_act, 4, -50);  
	$arr_colorado = array_slice($ele_act, 5, -49);  
	$arr_connecticut = array_slice($ele_act, 6, -48);  
	$arr_delaware = array_slice($ele_act, 7, -47);  
	$arr_district_columbia = array_slice($ele_act, 8, -46);  
	$arr_florida = array_slice($ele_act, 9, -45);  
	$arr_georgia = array_slice($ele_act, 10, -44);  
	$arr_guam = array_slice($ele_act, 11, -43);  
	$arr_hawaii = array_slice($ele_act, 12, -42);  
	$arr_idaho = array_slice($ele_act, 13, -41);  
	$arr_illinois = array_slice($ele_act, 14, -40);  
	$arr_indiana = array_slice($ele_act, 15, -39);  
	$arr_iowa = array_slice($ele_act, 16, -38);  
	$arr_kansas = array_slice($ele_act, 17, -37);  
	$arr_kentucky = array_slice($ele_act, 18, -36);  
	$arr_louisiana = array_slice($ele_act, 19, -35);  
	$arr_maine = array_slice($ele_act, 20, -34);  
	$arr_maryland = array_slice($ele_act, 21, -33);  
	$arr_massachusetts = array_slice($ele_act, 22, -32);  
	$arr_michigan = array_slice($ele_act, 23, -31);  
	$arr_minnesota = array_slice($ele_act, 24, -30);  
	$arr_mississippi = array_slice($ele_act, 25, -29);  
	$arr_missouri = array_slice($ele_act, 26, -28);  
	$arr_montana = array_slice($ele_act, 27, -27);  
	$arr_nebraska = array_slice($ele_act, 28, -26);  
	$arr_nevada = array_slice($ele_act, 29, -25);  
	$arr_new_hampshire = array_slice($ele_act, 30, -24);  
	$arr_new_jersey = array_slice($ele_act, 31, -23);  
	$arr_new_mexico = array_slice($ele_act, 32, -22);  
	$arr_new_york = array_slice($ele_act, 33, -21);  
	$arr_north_carolina = array_slice($ele_act, 34, -20);  
	$arr_north_dakota = array_slice($ele_act, 35, -19);  
	$arr_northen_mariana_islands = array_slice($ele_act, 36, -18);  
	$arr_ohio = array_slice($ele_act, 37, -17);  
	$arr_oklahoma = array_slice($ele_act, 38, -16);  
	$arr_oregon = array_slice($ele_act, 39, -15);  
	$arr_pennsylvania = array_slice($ele_act, 40, -14);  
	$arr_puerto_rico = array_slice($ele_act, 41, -13);  
	$arr_rhode_island = array_slice($ele_act, 42, -12);  
	$arr_south_carolina = array_slice($ele_act, 43, -11);  
	$arr_south_dakota = array_slice($ele_act, 44, -10);  
	$arr_tennessee = array_slice($ele_act, 45, -9);  
	$arr_texas = array_slice($ele_act, 46, -8);  
	$arr_utah = array_slice($ele_act, 47, -7);  
	$arr_vermont = array_slice($ele_act, 48, -6);  
	$arr_virgin_islands = array_slice($ele_act, 49, -5);  
	$arr_virginia = array_slice($ele_act, 50, -4); 
	$arr_washington = array_slice($ele_act, 51, -3); 
	$arr_west_virginia = array_slice($ele_act, 52, -2); 
	$arr_wisconsin = array_slice($ele_act, 53, -1); 
	$arr_wyoming = array_slice($ele_act, 54, 55);

	// Pedido de 'estados confirmados'
	if(isset($_POST['estado_confirmados'])) {
		$data = $_POST['estado_confirmados'];
		switch($data) {
			case "alabama": 
				$res = $arr_alabama[0][3];
				break;
			case "alaska":
				$res = $arr_alaska[0][3];
				break;
			case "arizona": 
				$res = $arr_arizona[0][3];
				break;
			case "arkansas": 
				$res = $arr_arkansas[0][3];
				break;
			case "california": 
				$res = $arr_california[0][3];
				break;
			case "colorado": 
				$res = $arr_colorado[0][3];
				break;
			case "connecticut": 
				$res = $arr_connecticut[0][3];
				break;
			case "delaware": 
				$res = $arr_delaware[0][3];
				break;
			case "district_columbia": 
				$res = $arr_district_columbia[0][3];
				break;
			case "florida": 
				$res = $arr_florida[0][3];
				break;
			case "georgia": 
				$res = $arr_georgia[0][3];
				break;
			case "guam": 
				$res = $arr_guam[0][3];
				break;
			case "hawaii": 
				$res = $arr_hawaii[0][3];
				break;
			case "idaho": 
				$res = $arr_idaho[0][3];
				break;
			case "illinois": 
				$res = $arr_illinois[0][3];
				break;
			case "indiana": 
				$res = $arr_indiana[0][3];
				break;
			case "iowa": 
				$res = $arr_iowa[0][3];
				break;
			case "kansas": 
				$res = $arr_kansas[0][3];
				break;
			case "kentucky": 
				$res = $arr_kentucky[0][3];
				break;
			case "louisiana": 
				$res = $arr_louisiana[0][3];
				break;
			case "maine": 
				$res = $arr_maine[0][3];
				break;
			case "maryland": 
				$res = $arr_maryland[0][3];
				break;
			case "massachusetts": 
				$res = $arr_massachusetts[0][3];
				break;
			case "michigan": 
				$res = $arr_michigan[0][3];
				break;
			case "minnesota": 
				$res = $arr_minnesota[0][3];
				break;
			case "mississippi": 
				$res = $arr_mississippi[0][3];
				break;
			case "missouri": 
				$res = $arr_missouri[0][3];
				break;
			case "montana": 
				$res = $arr_montana[0][3];
				break;
			case "nebraska": 
				$res = $arr_nebraska[0][3];
				break;
			case "nevada": 
				$res = $arr_nevada[0][3];
				break;
			case "new_hampshire": 
				$res = $arr_new_hampshire[0][3];
				break;
			case "new_jersey": 
				$res = $arr_new_jersey[0][3];
				break;
			case "new_mexico": 
				$res = $arr_new_mexico[0][3];
				break;
			case "new_york": 
				$res = $arr_new_york[0][3];
				break;
			case "north_carolina": 
				$res = $arr_north_carolina[0][3];
				break;
			case "north_dakota": 
				$res = $arr_north_dakota[0][3];
				break;
			case "northen_mariana_islands": 
				$res = $arr_northen_mariana_islands[0][3];
				break;
			case "ohio": 
				$res = $arr_ohio[0][3];
				break;
			case "oklahoma": 
				$res = $arr_oklahoma[0][3];
				break;
			case "oregon": 
				$res = $arr_oregon[0][3];
				break;
			case "pennsylvania": 
				$res = $arr_pennsylvania[0][3];
				break;
			case "puerto_rico": 
				$res = $arr_puerto_rico[0][3];
				break;
			case "rhode_island": 
				$res = $arr_rhode_island[0][3];
				break;
			case "south_carolina": 
				$res = $arr_south_carolina[0][3];
				break;
			case "south_dakota": 
				$res = $arr_south_dakota[0][3];
				break;
			case "tennessee": 
				$res = $arr_tennessee[0][3];
				break;
			case "texas": 
				$res = $arr_texas[0][3];
				break;
			case "utah": 
				$res = $arr_utah[0][3];
				break;
			case "vermont": 
				$res = $arr_vermont[0][3];
				break;
			case "virgin_islands": 
				$res = $arr_virgin_islands[0][3];
				break;
			case "virginia": 
				$res = $arr_virginia[0][3];
				break;
			case "washington": 
				$res = $arr_washington[0][3];
				break;
			case "west_virginia": 
				$res = $arr_washington[0][3];
				break;
			case "wisconsin": 
				$res = $arr_wisconsin[0][3];
				break;
			case "wyoming":
				$res = $arr_wyoming[0][3]; 
				break;
		}
		echo $res;
	}

	// Pedir muertes
	if(isset($_POST['estado_muertes'])) {
		$data = $_POST['estado_muertes'];
		switch($data) {
			case "alabama": 
				$res = $arr_alabama[0][4];
				break;
			case "alaska":
				$res = $arr_alaska[0][4];
				break;
			case "arizona": 
				$res = $arr_arizona[0][4];
				break;
			case "arkansas": 
				$res = $arr_arkansas[0][4];
				break;
			case "california": 
				$res = $arr_california[0][4];
				break;
			case "colorado": 
				$res = $arr_colorado[0][4];
				break;
			case "connecticut": 
				$res = $arr_connecticut[0][4];
				break;
			case "delaware": 
				$res = $arr_delaware[0][4];
				break;
			case "district_columbia": 
				$res = $arr_district_columbia[0][4];
				break;
			case "florida": 
				$res = $arr_florida[0][4];
				break;
			case "georgia": 
				$res = $arr_georgia[0][4];
				break;
			case "guam": 
				$res = $arr_guam[0][4];
				break;
			case "hawaii": 
				$res = $arr_hawaii[0][4];
				break;
			case "idaho": 
				$res = $arr_idaho[0][4];
				break;
			case "illinois": 
				$res = $arr_illinois[0][4];
				break;
			case "indiana": 
				$res = $arr_indiana[0][4];
				break;
			case "iowa": 
				$res = $arr_iowa[0][4];
				break;
			case "kansas": 
				$res = $arr_kansas[0][4];
				break;
			case "kentucky": 
				$res = $arr_kentucky[0][4];
				break;
			case "louisiana": 
				$res = $arr_louisiana[0][4];
				break;
			case "maine": 
				$res = $arr_maine[0][4];
				break;
			case "maryland": 
				$res = $arr_maryland[0][4];
				break;
			case "massachusetts": 
				$res = $arr_massachusetts[0][4];
				break;
			case "michigan": 
				$res = $arr_michigan[0][4];
				break;
			case "minnesota": 
				$res = $arr_minnesota[0][4];
				break;
			case "mississippi": 
				$res = $arr_mississippi[0][4];
				break;
			case "missouri": 
				$res = $arr_missouri[0][4];
				break;
			case "montana": 
				$res = $arr_montana[0][4];
				break;
			case "nebraska": 
				$res = $arr_nebraska[0][4];
				break;
			case "nevada": 
				$res = $arr_nevada[0][4];
				break;
			case "new_hampshire": 
				$res = $arr_new_hampshire[0][4];
				break;
			case "new_jersey": 
				$res = $arr_new_jersey[0][4];
				break;
			case "new_mexico": 
				$res = $arr_new_mexico[0][4];
				break;
			case "new_york": 
				$res = $arr_new_york[0][4];
				break;
			case "north_carolina": 
				$res = $arr_north_carolina[0][4];
				break;
			case "north_dakota": 
				$res = $arr_north_dakota[0][4];
				break;
			case "northen_mariana_islands": 
				$res = $arr_northen_mariana_islands[0][4];
				break;
			case "ohio": 
				$res = $arr_ohio[0][4];
				break;
			case "oklahoma": 
				$res = $arr_oklahoma[0][4];
				break;
			case "oregon": 
				$res = $arr_oregon[0][4];
				break;
			case "pennsylvania": 
				$res = $arr_pennsylvania[0][4];
				break;
			case "puerto_rico": 
				$res = $arr_puerto_rico[0][4];
				break;
			case "rhode_island": 
				$res = $arr_rhode_island[0][4];
				break;
			case "south_carolina": 
				$res = $arr_south_carolina[0][4];
				break;
			case "south_dakota": 
				$res = $arr_south_dakota[0][4];
				break;
			case "tennessee": 
				$res = $arr_tennessee[0][4];
				break;
			case "texas": 
				$res = $arr_texas[0][4];
				break;
			case "utah": 
				$res = $arr_utah[0][4];
				break;
			case "vermont": 
				$res = $arr_vermont[0][4];
				break;
			case "virgin_islands": 
				$res = $arr_virgin_islands[0][4];
				break;
			case "virginia": 
				$res = $arr_virginia[0][4];
				break;
			case "washington": 
				$res = $arr_washington[0][4];
				break;
			case "west_virginia": 
				$res = $arr_washington[0][4];
				break;
			case "wisconsin": 
				$res = $arr_wisconsin[0][4];
				break;
			case "wyoming":
				$res = $arr_wyoming[0][4]; 
				break;
		}
		echo $res;
	}

	// Pedir negativos
	if(isset($_POST['estado_negativos'])) {
		$data = $_POST['estado_negativos'];
		switch($data) {
			case "alabama": 
				$res = $arr_alabama[0][3]-$arr_alabama[0][4];
				break;
			case "alaska":
				$res = $arr_alaska[0][3]-$arr_alaska[0][4];
				break;
			case "arizona": 
				$res = $arr_arizona[0][3]-$arr_arizona[0][4];
				break;
			case "arkansas": 
				$res = $arr_arkansas[0][3]-$arr_arkansas[0][4];
				break;
			case "california": 
				$res = $arr_california[0][3]-$arr_california[0][4];
				break;
			case "colorado": 
				$res = $arr_colorado[0][3]-$arr_colorado[0][4];
				break;
			case "connecticut": 
				$res = $arr_connecticut[0][3]-$arr_connecticut[0][4];
				break;
			case "delaware": 
				$res = $arr_delaware[0][3]-$arr_delaware[0][4];
				break;
			case "district_columbia": 
				$res = $arr_district_columbia[0][3]-$arr_district_columbia[0][4];
				break;
			case "florida": 
				$res = $arr_florida[0][3]-$arr_florida[0][4];
				break;
			case "georgia": 
				$res = $arr_georgia[0][3]-$arr_georgia[0][4];
				break;
			case "guam": 
				$res = $arr_guam[0][3]-$arr_guam[0][4];
				break;
			case "hawaii": 
				$res = $arr_hawaii[0][3]-$arr_hawaii[0][4];
				break;
			case "idaho": 
				$res = $arr_idaho[0][3]-$arr_idaho[0][4];
				break;
			case "illinois": 
				$res = $arr_illinois[0][3]-$arr_illinois[0][4];
				break;
			case "indiana": 
				$res = $arr_indiana[0][3]-$arr_indiana[0][4];
				break;
			case "iowa": 
				$res = $arr_iowa[0][3]-$arr_iowa[0][4];
				break;
			case "kansas": 
				$res = $arr_kansas[0][3]-$arr_kansas[0][4];
				break;
			case "kentucky": 
				$res = $arr_kentucky[0][3]-$arr_kentucky[0][4];
				break;
			case "louisiana": 
				$res = $arr_louisiana[0][3]-$arr_louisiana[0][4];
				break;
			case "maine": 
				$res = $arr_maine[0][3]-$arr_maine[0][4];
				break;
			case "maryland": 
				$res = $arr_maryland[0][3]-$arr_maryland[0][4];
				break;
			case "massachusetts": 
				$res = $arr_massachusetts[0][3]-$arr_massachusetts[0][4];
				break;
			case "michigan": 
				$res = $arr_michigan[0][3]-$arr_michigan[0][4];
				break;
			case "minnesota": 
				$res = $arr_minnesota[0][3]-$arr_minnesota[0][4];
				break;
			case "mississippi": 
				$res = $arr_mississippi[0][3]-$arr_mississippi[0][4];
				break;
			case "missouri": 
				$res = $arr_missouri[0][3]-$arr_missouri[0][4];
				break;
			case "montana": 
				$res = $arr_montana[0][3]-$arr_montana[0][4];
				break;
			case "nebraska": 
				$res = $arr_nebraska[0][3]-$arr_nebraska[0][4];
				break;
			case "nevada": 
				$res = $arr_nevada[0][3]-$arr_nevada[0][4];
				break;
			case "new_hampshire": 
				$res = $arr_new_hampshire[0][3]-$arr_new_hampshire[0][4];
				break;
			case "new_jersey": 
				$res = $arr_new_jersey[0][3]-$arr_new_jersey[0][4];
				break;
			case "new_mexico": 
				$res = $arr_new_mexico[0][3]-$arr_new_mexico[0][4];
				break;
			case "new_york": 
				$res = $arr_new_york[0][3]-$arr_new_york[0][4];
				break;
			case "north_carolina": 
				$res = $arr_north_carolina[0][3]-$arr_north_carolina[0][4];
				break;
			case "north_dakota": 
				$res = $arr_north_dakota[0][3]-$arr_north_dakota[0][4];
				break;
			case "northen_mariana_islands": 
				$res = $arr_northen_mariana_islands[0][3]-$arr_northen_mariana_islands[0][4];
				break;
			case "ohio": 
				$res = $arr_ohio[0][3]-$arr_ohio[0][4];
				break;
			case "oklahoma": 
				$res = $arr_oklahoma[0][3]-$arr_oklahoma[0][4];
				break;
			case "oregon": 
				$res = $arr_oregon[0][3]-$arr_oregon[0][4];
				break;
			case "pennsylvania": 
				$res = $arr_pennsylvania[0][3]-$arr_pennsylvania[0][4];
				break;
			case "puerto_rico": 
				$res = $arr_puerto_rico[0][3]-$arr_puerto_rico[0][4];
				break;
			case "rhode_island": 
				$res = $arr_rhode_island[0][3]-$arr_rhode_island[0][4];
				break;
			case "south_carolina": 
				$res = $arr_south_carolina[0][3]-$arr_south_carolina[0][4];
				break;
			case "south_dakota": 
				$res = $arr_south_dakota[0][3]-$arr_south_dakota[0][4];
				break;
			case "tennessee": 
				$res = $arr_tennessee[0][3]-$arr_tennessee[0][4];
				break;
			case "texas": 
				$res = $arr_texas[0][3]-$arr_texas[0][4];
				break;
			case "utah": 
				$res = $arr_utah[0][3]-$arr_utah[0][4];
				break;
			case "vermont": 
				$res = $arr_vermont[0][3]-$arr_vermont[0][4];
				break;
			case "virgin_islands": 
				$res = $arr_virgin_islands[0][3]-$arr_virgin_islands[0][4];
				break;
			case "virginia": 
				$res = $arr_virginia[0][3]-$arr_virginia[0][4];
				break;
			case "washington": 
				$res = $arr_washington[0][3]-$arr_washington[0][4];
				break;
			case "west_virginia": 
				$res = $arr_washington[0][3]-$arr_washington[0][4];
				break;
			case "wisconsin": 
				$res = $arr_wisconsin[0][3]-$arr_wisconsin[0][4];
				break;
			case "wyoming":
				$res = $arr_wyoming[0][3]-$arr_wyoming[0][4];
				break;
		}
		echo $res;
	}
	
?>
