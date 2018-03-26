<?php
	function isBrazil() {
		$location = file_get_contents('http://freegeoip.net/json/');
		if ($location) {
		   $data = json_decode($location, true);
		   if ($data['country_name'] == 'Brazil') {
			  return true;
		   }
		}
		return false;
	}

	if (isBrazil()) {
	   header('Location: https://www.esportscups.com.br/ptbr/');
	} else {
	   header('Location: https://www.esportscups.com.br/ptbr/');
	}
?>