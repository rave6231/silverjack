<?php

include 'inc/dclGlobalVars.inc.php';
include 'inc/dealer.inc.php';           // function newhand()
include 'inc/handsScore.php';	
	 
 

//shuffle($deck);
//print_r($deck);

//echo "<br/><br/>";
//$lastcard = array_pop($deck);
//$suitArray = array("clubs", "diamonds", "hearts", "spades");

//echo "<img src ='img/cards/".$suitArray[floor($lastcard/13)]."/". (($lastcard % 13) + 1).".png'/>"; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Lab3: Silver Jack</title>
  <meta name="description" content="">
  <meta name="author" content="migu8457">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet" />
  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <style>

  </style>
</head>

    <body>
        <div id="wrapper">
        	<h1 style ='text-align:center'>Silver-Jack</h1>
        	
        	<?php
        		$deck = generatedeck();
				$hand1 = newhand();
				$hand2 = newhand();
				$hand3 = newhand();
				$hand4 = newhand();
				
				$score1 = getScore($hand1);
				$score2 = getScore($hand2);
				$score3 = getScore($hand3);
				$score4 = getScore($hand4);
				
				$scores = array(
					"HILARY"=>$score1, 
					"SARAH"=>$score2, 
					"BOBBY"=>$score3, 
					"DONALD"=>$score4);
			?>
			
		<table>
			<tr>
				<td><img src='img/player_1.png'></td>
				<td><?php displayhand($hand1); ?></td>
				<td><?php echo $score1 ?></td>
			</tr>
			<tr>
				<td><img src='img/player_2.png'></td>
				<td><?php displayhand($hand2); ?></td>
				<td><?php echo $score2 ?></td>
			</tr>
			<tr>
				<td><img src='img/player_3.png'></td>
				<td><?php displayhand($hand3); ?></td>
				<td><?php echo $score3 ?></td>
			</tr>
			<tr>
				<td><img src='img/player_4.png'></td>
				<td><?php displayhand($hand4); ?></td>
				<td><?php echo $score4 ?></td>
			</tr>
			<tr>
				<td colspan=3><?php echo getWinner($scores) . " WINS"; ?></td>
			</tr>
		</table>
		</div>
    </body>
    
    		<footer>
				<hr>
				Disclaimer: The information included in this page might not be accurate. It was developed as part of the CST336 class at CSUMB.
				<br>
				&copy; <a href="http://hosting.otterlabs.org/zielinskiaustinr/cst336/index.html">Zielinski</a>, 2015
				<br><img src="../../img/csumb-logo.png">
			</footer>
</html>