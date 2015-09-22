<?php

function getScore($hand) {
	$score = 0;
	for ($i = 0; $i < count($hand); $i++) {
		$score += $hand[$i]%13+1;
	}
	return $score;
}

function getWinner($scores) {
	$bestScore = 0;
	foreach ($scores as $key => $value) {
		if ($value > $bestScore) {
			$bestScore = $value;
			$winner = $key;
		}
	}
	return $winner;
}

?>