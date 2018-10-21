<?php

	 
	function check_words_equal_first_case (string $word1, string $word2) {
		$is_equal = compare_with_insert($word1, $word2);

		var_dump($is_equal);
	}

	function compare_with_insert($word1, $word2) {
		$word1_array = str_split($word1);
		$word2_array = str_split($word2);

		$bigger_array = count($word1_array) >= count($word2_array) ? $word1_array : $word2_array;
		$smaller_array = count($word1_array) <= count($word2_array) ? $word1_array : $word2_array;


		foreach ($bigger_array as $index => $letter) {
			if ( $letter !== $smaller_array[$index] ) {
				$bigger_array[$index] = "";
				break;
			}
		}
		
		$new_word1 = implode($bigger_array);
		$new_word2 = implode($smaller_array);

		return true ? $new_word1 === $new_word2 : false;
	}
	
	print_r(check_words_equal_first_case("programming", "programming"));
	

?>