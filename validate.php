<?php

if (empty($_POST["num_of_word"])) {
    $message = "";

} else if (!is_numeric($_POST["num_of_word"])) {
    $message = "Please enter a valid number for number of words to generate your password.";

} else if (is_numeric($_POST["num_of_word"]) && ($_POST["num_of_word"] < 1 || $_POST["num_of_word"] > 8)) {
    $message = "Please enter a valid number between 1 and 8 for number of words.";

}