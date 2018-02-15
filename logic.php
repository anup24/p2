<?php
	
	$symbol = array('!', '@', '#', '$', '^', '&', '*');
	if($wordlist = file("wordlist.txt", FILE_IGNORE_NEW_LINES)) {
		
		$password = "";
		$count = (empty($_POST["num_of_word"]) ? 4 : $_POST["num_of_word"]);
		for ($i = 0; $i < $count; $i++) {
			$word = $wordlist[rand(0, 4999)];
			if (isset($_POST["add_number"])) {
				$word = ucfirst($word);
			}
			if ($i != 0) {
				$password .= ("-".$word);
			} else {
				$password .= $word;
			}
				
		}
		if(isset($_POST["add_number"])) {
				$password .= rand(0, 9);
		}
		if(isset($_POST["add_symbol"])) {
				$password .= $symbol[array_rand($symbol,1)];
		}
			
	}
