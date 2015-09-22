<?php
$deck = array();

function newhand(){
	global $deck;
   $handSize = rand(4,6);     // How many cards will be dealt
	
	$cards = array();           // Holds the 4 to 6 card that will be dealt
	
	for ($i=0; $i < $handSize; $i++ ){
		$cards[] = array_pop($deck);
		
	};
	//print_r($cards);
	
	return $cards;
}  // End Function


function generatedeck(){
global $deck;
// -------------------Prepare Deck --------------------------------------------------------------
// $deck = array();   //  This is the Deck "full Deck that will be initialized with every new game"
//-----------------( Initialize Deck Array at the start of each new Game )-------------------------
for ($i = 0; $i < 52; $i++) {
	$deck[] = $i;
}
shuffle($deck);
//print_r($deck);
return $deck;
// ----------- (End Deck Prepare)
}

function displayhand($hand){
	$suits = array('clubs', 'diamonds', 'hearts', 'spades');
	for($i =0; $i < count($hand); $i++){
		$suit = floor($hand[$i] / 13);
		$card = ($hand[$i] % 13 ) + 1 ;
		echo "<img src='img/cards/".$suits[$suit]."/". $card.".png' style='margin:auto'>";
	}
}

?>
