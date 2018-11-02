<?php

	function check_sum_pair ($integer_array, $sum) {
		$i = 0;
		foreach ($integer_array  as $key => $value) {

			$j = 0;
			foreach ($integer_array as $key2 => $value2) {
				if ( $key != $key2 ) {
					$current_sum = $integer_array[$i]+ $integer_array[$j];

					if ($current_sum === $sum ) {
						echo $integer_array[$i] ."-". $integer_array[$j];
						echo "<br><br>";
						return true;
					}
				}

				$j++;
			}

			$i++;
		}

		return false;
	}


	function generat_random_array($array_size) {
		$array = array();
		for ($i = 0;  $i<$array_size; $i++) {
			$array[] = rand(1, 50000);
		}

		return $array;
	}
	 
	$integer_array = generat_random_array(5000);
	$sum = 113;
		
	var_dump(check_sum_pair($integer_array, $sum));

	echo "<pre>";
	print_r($integer_array);
	echo "</pre>";

?>
