<?php

if (!empty($_POST["num_of_word"]) && is_numeric($_POST["num_of_word"]) && $_POST["num_of_word"] >= 1 && $_POST["num_of_word"] <= 8) {
    if ($wordlist = file("wordlist.txt", FILE_IGNORE_NEW_LINES)) {
        $symbol = ['!', '@', '#', '$', '^', '%'];
        $password = "";
        $count = $_POST["num_of_word"];

        for ($index = 0; $index < $count; $index++) {
            $word = $wordlist[rand(0, 4999)];
            if ($index != 0) {
                $password .= ("-" . $word);
            } else {
                $password .= $word;
            }
        }
        if (isset($_POST["add_number"])) {
            $password .= rand(0, 9);
        }
        if (isset($_POST["add_symbol"])) {
            foreach ($symbol as &$value) {
                if ($value == $_POST["add_symbol"]) {
                    $password .= $value;
                }
            }
        }
    }
    if(isset($_POST["capitalize"])){
        $password = ucfirst($password);
    }
}
