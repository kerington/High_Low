<?php

$min = 1;
$max = 100;
$randomNumber = rand ($min , $max);

// random number
// LOOP 


do {
	fwrite(STDOUT, 'Number guess? ');
	$userGuess = fgets(STDIN);
		if ($userguess < $randomNumber) {
			echo "Hiiiiiigherrr...";
		} elseif ($userguess > $randomNumber) {
		    echo "Loooooowerrr...";
		} else {
			echo "YOU GOT IT!";
		}
} while ($userguess != $randomNumber);
// LOOP END
// if random number greater
	// elseif lower
		// else equal

// $userguess = fgets(STDIN) - reads what user types
	// $userguess === random number variable 