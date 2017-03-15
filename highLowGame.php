<?php

$min = 0;
$max = 100;

// random number
// $randomNumber = int rand ( int $min , int $max )

fwrite(STDOUT, 'What number do you guess? ');
$userGuess = fgets(STDIN);



if ($userguess > $randomNumber) {
    echo "Loooooowerrr...";
} elseif ($userguess < $randomNumber) {
	echo "Hiiiiiigherrr...";
} else {
	echo "YOU GOT IT!";
}

// if random number greater
	// elseif lower
		// else equal

// $userguess = fgets(STDIN) - reads what user types
	// $userguess === random number variable 