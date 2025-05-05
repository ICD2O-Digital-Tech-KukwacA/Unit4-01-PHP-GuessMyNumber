<?php
	// get number from the textfield
    $userGuess = $_POST['userGuess'];

	// generate random number
    $min = 1;
    $max = 6;
    $randomNumber = rand($min, $max);
    <?php
    if ($userGuess == $randomNumber) {
        echo "Congratulations! You guessed the number correctly.";
    }
    if ($userGuess != $randomNumber) {
        echo "Sorry, the correct number was {$randomNumber}. Better luck next time!";
    }
    ?>

?>