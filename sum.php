<?php

// sum
$numbers = [1,2,3,4,5];
$sum = 0;

foreach($numbers as $number){
    $sum += $number;
}

echo $sum;  //output: 15 (1+2+3+4+5)

//products
$numbers = [1,2,3,4,5];
$product = 1;

foreach ($numbers as $number) {
    # code...
    $product *= $number;
}
echo $product;
?>