<?php

function newhand(){
   $handSize = random(4,8);     // How many cards will be dealt
	
	$cards = array();           // Holds the 4 to 8 card that will be dealt
	
	for ($i=0; $i < $handSize; $i++ ){
		$cards[] = array_pop($deck);
	};
	return ($cards);
}  // End Function

?>
