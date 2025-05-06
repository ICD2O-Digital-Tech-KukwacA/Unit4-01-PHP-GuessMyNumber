<?php
	// Get number from the textfield
    $userGuess = $_POST['userGuess'];

	// This function will generate a random number
    $min = 1;
    $max = 6;
    $randomNumber = rand($min, $max);
    if ($userGuess == $randomNumber) {
        echo "Congratulations! You guessed the number correctly.";
    }
    if ($userGuess != $randomNumber) {
        echo "Sorry, the correct number was {$randomNumber}. Better luck next time!";
    }
?>