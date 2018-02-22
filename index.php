<?php
require "logic.php";
require "validate.php";
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

    <script>
        function enableDropdown(bEnable, addSymbol){
            document.getElementById(addSymbol).disabled = !bEnable
        }
        function submitForm() {
        alert('hi');
            document.form.submit();
        }
    </script>
</head>
<body>
<div class="container">
    <h1>xkcd Password Generator</h1>

    <div class="image">
        <img class='comic' src='https://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
    </div>

    <form action="index.php" method="POST">
        <div class="info">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label for="num_of_word">Number of words:</label>
            <input type="text" id="num_of_word" name="num_of_word">
        </div>
        <div class="info">
            <input type="checkbox" id="add_number" name="add_number"/>
            <label for="add_number">Include a number</label>
        </div>
        <div class="info">
            <input type="checkbox" id="add_symbol_checkbox" onclick="enableDropdown(this.checked, 'add_symbol')"/>
            <label for="add_symbol">Include a special character
                <select id="add_symbol" name="add_symbol" disabled>
                    <option value="">Select a symbol</option>
                    <option value="!">!</option>
                    <option value="@">@</option>
                    <option value="#">#</option>
                    <option value="$">$</option>
                    <option value="^">^</option>
                    <option value="%">%</option>
                </select>
            </label>
        </div>
        <input class="btnbtn btn-default" type="submit" value="Generate a password" />
    </form>

    <?php if (!empty($message)) { ?>
        <div class="message">
            <span><?php echo $message; ?></span>
        </div>
    <?php } else if (!empty($password)){ ?>
        <div class="password">
            <span><b>Your password: </b></span>
            <span><?php echo $password; ?></span>
        </div>
    <?php } ?>
</div>
</body>
</html>
