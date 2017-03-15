<?php

$min = 1;
$max = 100;
$randomNumber = rand ($min , $max);

// random number
// LOOP 


do {
	fwrite(STDOUT, 'Number guess? ');
	$userGuess = fgets(STDIN);
		if ($userGuess < $randomNumber) {
			echo "Hiiiiiigherrr...";
		} elseif ($userGuess > $randomNumber) {
		    echo "Loooooowerrr...";
		} else {
			echo "YOU GOT IT!";
		}
	} while ($userGuess != $randomNumber);


// LOOP END
// if random number greater
	// elseif lower
		// else equal

// $userGuess = fgets(STDIN) - reads what user types
	// $userGuess === random number variable 