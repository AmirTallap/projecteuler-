<?php
//https://projecteuler.net/problem=1

// If we list all the natural numbers below 10 that are multiples of 3 or 5,
// we get 3, 5, 6 and 9. The sum of these multiples is 23.

// Find the sum of all the multiples of 3 or 5 below 1000.

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution(){
    $arr=[];

    for($i=0; $i<1000; $i+=3){
        $arr[]=$i;
    }
    
    for($i=0; $i<1000; $i+=5){
        $arr[]=$i;
    }

    $arr=array_unique($arr);

    echo array_sum($arr);

}
echo solution();

?>