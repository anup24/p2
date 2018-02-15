<?php
	require "logic.php";
?>

<!DOCTYPE html>

<html lang="en">
	<head>
        <title>Project 2 - xkcd Password Generator</title>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/main.css">
	</head>

	<body>
		<div class="container">
			<h1>xkcd Password Generator</h1>

			<div class="xkcd_image">
				<img class='comic' src='https://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
			</div>

			<form action="index.php" method="POST">
				<div class="num_of_word">
					<label for="num_of_word">Number of words:</label>
                    <input type="text" id="num_of_word" name="add_number" value="1">
				</div>

                <div class="uppercase_first">
                    <input type="checkbox" id="add_number" name="add_number" value="1">
                    <label for="add_number">Include a number</label>
                </div>

				<div class="add_symbol">
					<input type="checkbox" id="add_symbol" name="add_symbol" value="1">
                    <label for="add_symbol">Include a special character
                        <select name="add_symbol">
                            <option selected="selected" value="@">@</option>
                            <option value="!">!</option>
                            <option value="#">#</option>
                            <option value="%">$</option>
                            <option value="%">%</option>
                            <option value="%">^</option>
                        </select>
                    </label>
                </div>

				<input id="submit" type="submit" value="Generate a password">
			</form>

            <div class="password">
                <span>Your password: </span>
                <span><?php echo $password; ?></span>
            </div>

		</div>
	</body>
</html>
