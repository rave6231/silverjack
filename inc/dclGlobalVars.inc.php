<?php

// -------------------Prepare Deck --------------------------------------------------------------
$deck = array();   //  This is the Deck "full Deck that will be initialized with every new game"
//-----------------( Initialize Deck Array at the start of each new Game )-------------------------
for ($i = 0; $i < 52; $i++) {
	$deck[] = $i;
}
shuffle($deck);
// ----------- (End Deck Prepare)
?>
