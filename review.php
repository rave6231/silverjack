<?php

$prices = array(); // initializes an empty array

$prices = array(550, 200, 600); // add values to an array

$items = array("water bottle", "chicken", "corn bread");


echo $prices[0];

$prices [] = 100; // adds an item at the end of the array
array_push($prices, 200); // also adds item at the end

$prices[0] = 500; //replace the value in index 0

print_r($prices); // prints all the values in array

echo"<br/>";
for ($i=0; $i < count($prices); $i++){ //cpint returns size of array
	echo $prices[$i]."<br/>";
	
}
 
 
 //Associative array
 
 $prices = array("Apple Watch"=>500, "iPad Mini"=>250); //initializes with 2 values
 $prices["iPad air"] = 600; //adding values
 
 //echo $prices["0"]; // throws an errir, index "0" doesn't exist!
 
 print_r($prices);
 
 echo"<br/><br/><br/>";
 

 foreach($prices as $key => $value){

	echo $key . " = $" .$value . "<br>";
 }
 
 
 echo "Subtotal: " . array_sum($prices);
 
 echo"<br/><br/>Osrdering values<br/>";
 
 
$prices = array_values($prices); //creates the index to numbers
 
 asort($prices);
 ksort($prices);
 
 foreach($prices as $key => $value){

	echo $key . " = $" .$value . "<br>";
 }
 
?>