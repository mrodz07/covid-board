<?php
	// Abrimos la información 
	$res;	
	$state_arr = array_map('str_getcsv', file('../../data/nst-est2019-01.csv')); 

	// Regresamos los datos dependiendo del caso
	if(isset($_POST['state'])) {
		$data = $_POST['state'];
		switch($data) {
			case "us":
				$res = $state_arr[1][1];
				break;
			case "alabama": 
				$res = $state_arr[2][1];
				break;
			case "alaska":
				$res = $state_arr[3][1];
				break;
			case "arizona": 
				$res = $state_arr[4][1];
				break;
			case "arkansas": 
				$res = $state_arr[5][1];
				break;
			case "california": 
				$res = $state_arr[6][1];
				break;
			case "colorado": 
				$res = $state_arr[7][1];
				break;
			case "connecticut": 
				$res = $state_arr[8][1];
				break;
			case "delaware": 
				$res = $state_arr[9][1];
				break;
			case "district_columbia": 
				$res = $state_arr[10][1];
				break;
			case "florida": 
				$res = $state_arr[11][1];
				break;
			case "georgia": 
				$res = $state_arr[12][1];
				break;
			case "hawaii": 
				$res = $state_arr[13][1];
				break;
			case "idaho": 
				$res = $state_arr[14][1];
				break;
			case "illinois": 
				$res = $state_arr[15][1];
				break;
			case "indiana": 
				$res = $state_arr[16][1];
				break;
			case "iowa": 
				$res = $state_arr[17][1];
				break;
			case "kansas": 
				$res = $state_arr[18][1];
				break;
			case "kentucky": 
				$res = $state_arr[19][1];
				break;
			case "louisiana": 
				$res = $state_arr[20][1];
				break;
			case "maine": 
				$res = $state_arr[21][1];
				break;
			case "maryland": 
				$res = $state_arr[22][1];
				break;
			case "massachusetts": 
				$res = $state_arr[23][1];
				break;
			case "michigan": 
				$res = $state_arr[24][1];
				break;
			case "minnesota": 
				$res = $state_arr[25][1];
				break;
			case "mississippi": 
				$res = $state_arr[26][1];
				break;
			case "missouri": 
				$res = $state_arr[27][1];
				break;
			case "montana": 
				$res = $state_arr[28][1];
				break;
			case "nebraska": 
				$res = $state_arr[29][1];
				break;
			case "nevada": 
				$res = $state_arr[30][1];
				break;
			case "new_hampshire": 
				$res = $state_arr[31][1];
				break;
			case "new_jersey": 
				$res = $state_arr[32][1];
				break;
			case "new_mexico": 
				$res = $state_arr[33][1];
				break;
			case "new_york": 
				$res = $state_arr[34][1];
				break;
			case "north_carolina": 
				$res = $state_arr[35][1];
				break;
			case "north_dakota": 
				$res = $state_arr[36][1];
				break;
			case "ohio": 
				$res = $state_arr[37][1];
				break;
			case "oklahoma": 
				$res = $state_arr[38][1];
				break;
			case "oregon": 
				$res = $state_arr[39][1];
				break;
			case "pennsylvania": 
				$res = $state_arr[40][1];
				break;
			case "rhode_island": 
				$res = $state_arr[41][1];
				break;
			case "south_carolina": 
				$res = $state_arr[42][1];
				break;
			case "south_dakota": 
				$res = $state_arr[43][1];
				break;
			case "tennessee": 
				$res = $state_arr[44][1];
				break;
			case "texas": 
				$res = $state_arr[45][1];
				break;
			case "utah": 
				$res = $state_arr[46][1];
				break;
			case "vermont": 
				$res = $state_arr[47][1];
				break;
			case "virgin_islands": 
				$res = $state_arr[48][1];
				break;
			case "virginia": 
				$res = $state_arr[49][1];
				break;
			case "washington": 
				$res = $state_arr[50][1];
				break;
			case "west_virginia": 
				$res = $state_arr[51][1];
				break;
			case "wisconsin": 
				$res = $state_arr[52][1];
				break;
			case "wyoming":
				$res = $state_arr[53][1];
				break;
			case "puerto_rico": 
				$res = $state_arr[54][1];
				break;
			default:
				$res = $state_arr[1][1];
				break;
		}
		echo $res;
	}
?>
