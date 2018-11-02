<?php

	function compress_string ($string_to_be_compressed) {

		$counter = 0;
		$string_compressed_array = array();

		for ($i = 0; $i < strlen($string_to_be_compressed); $i++) {
			if ( $string_to_be_compressed[$i] === $string_to_be_compressed[$i+1] ) {
				$counter++;

			} else {

				if ($counter <= 0) {
					$string_compressed_array[] = $string_to_be_compressed[$i];
				} else {
					$string_compressed_array[] = $string_to_be_compressed[$i] . ($counter+1);	
				}

				$counter = 0;
			}
		}
		
		return implode($string_compressed_array);

	}

	
	//$string = compress_string("abcaaabbb");
	//$string_compressed = "abca3b3";

	//$string = compress_string("abcd");
	//$string_compressed = "abcd";

	$string = compress_string("abbbbccdeffffg");
	$string_compressed = "ab4c2def4g";

	$ret = $string === $string_compressed ? true : false;

	var_dump($ret);

?>
