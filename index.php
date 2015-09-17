<?php

$deck = array();
for ($i  = 0; $i < 52; $i++){
	
	$deck[] = $i;
}

shuffle($deck);
print_r($deck);

echo "<br/><br/>";
$lastcard = array_pop($deck);
$suitArray = array("clubs", "diamonds", "hearts", "spades");

echo "<img src ='img/cards/".$suitArray[floor($lastcard/13)]."/". (($lastcard % 13) + 1).".png'/>"; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>index</title>
  <meta name="description" content="">
  <meta name="author" content="migu8457">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <link href="../Labs/Lab2/css/style.css" rel="stylesheet" />
  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

</head>

        <title>Lab3: Silver Jack</title>
            

    </head>

    <body>
        <div id="wrapper">
        	<h1 style ='text-align:center'>Silver-Jack</h1>
        	
        </div>
    </body>
</html>