<?php
    
    function generateRandomSuit() {
        
            $suit = rand(1,4);

            switch($suit){
                case 1: $folder="clubs";
                    break;
                case 2: $folder="diamonds";
                    break;
                case 3: $folder="hearts";
                    break;
                case 4: $folder="spades";
                    break;
            }
               
            return $folder;
    }

    function generateRandomNumer(){
               $num1 = rand(1,13);
               $product = $num1 * $num2;
   
           while($product % 10 == 0);
        
    }
?>




<!DOCTYPE html>
<html>
    <head>
        <title> Lab2: Multiplying playing cards</title>
        <meta charset="utf-8"/>
        
    </head>
    <style>
        .SymbolStyle {
            font-Size: 6em;
            text-align: center;
        }
    
    
    
    </style>
    
        
    <body>
        <?php
           
            
           do{
               $num1 = rand(1,10);
               $num2 = rand(1,10);
               $product = $num1 * $num2;
   
           }while($product % 10 == 0);



            echo "<img src ='silverjack/img/cards/".generateRandomSuit()."/$num1.png'>";
            
            echo "<span class= 'SymbolStyle'>*</span>";
                
            echo "<img src ='silverjack/img/cards/".generateRandomSuit()."/$num2.png'>";

            echo "<span class= 'SymbolStyle'>=</span>";
            //echo $product;


            $productStr =(string)$product;
            for($i = 0; $i < strlen($productStr); $i++)
                {
                echo "<img src ='silverjack/img/cards/".generateRandomSuit()."/".  $productStr[$i]  . ".png'>";
            }


           echo "<br/>";

            do{
                $nums1=rand(1,10);
                $nums2=rand(1,10);
                $products = $nums1 * $nums2;
            }while($products%10 == 0);




            echo "<img src ='silverjack/img/cards/".generateRandomSuit()."/$nums1.png'>";
            
            echo "<span class= 'SymbolStyle'>*</span>";
                
            echo "<img src ='silverjack/img/cards/".generateRandomSuit()."/$nums2.png'>";

            echo "<span class= 'SymbolStyle'>=</span>";

            $productsStr = (string)$products;

            for($k =0; $k < strlen($productsStr); $k++)
            {
                echo "<img src ='silver/img/cards/".generateRandomSuit()."/".  $productsStr[$k]  . ".png'>";
                
            }
            
            if($productStr < $productsStr)
            {
                echo "Player wins";
            }


            /*

            if($product < 10)
                {
                echo "<img src ='img/cards/cards/".generateRandomSuit()."/$product.png'>";   
            }
            else if($product >10)
            {
                $firstNumber = floor($product/10);
                $secondNumber = product%10;
                
                    echo "<img src ='img/cards/cards/".generateRandomSuit()."/$firstNumber.png'>";
                    echo "<img src ='img/cards/cards/".generateRandomSuit()."/$secondNumber.png'>";
                
            }
            */

        ?>


        <footer>
            
            &copy; Created by: Adrain Miguel
            
        </footer>
        
    </body>
</html>