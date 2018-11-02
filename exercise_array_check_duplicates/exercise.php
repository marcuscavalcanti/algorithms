<?php

	function array_check_duplicates_easy_mode (array $array) {
		return array_unique($array);
	}

	function array_check_duplicates_medium_mode (array $array) {
		$new_array = array();

		foreach ($array as $integer) {
			if (!in_array($integer, $new_array)) {
				$new_array[] = $integer;
			}
		}

		return $new_array;
	}

	$array = array(1, 118182, 3, 74, 03, 40, 9, 13, 5468, 1103933, 7383, 83, 11, 54, 802, 73930303, 1, 3, 5468, 77, 77, 90, 161, 2, 11, 11);

	echo "<pre>";
	print_r(array_check_duplicates_medium_mode($array));
	echo "</pre>";
?>