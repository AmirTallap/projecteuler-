<?php
//https://projecteuler.net/problem=1

// If we list all the natural numbers below 10 that are multiples of 3 or 5,
// we get 3, 5, 6 and 9. The sum of these multiples is 23.

// Find the sum of all the multiples of 3 or 5 below 1000.

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
//This can be optimized more....
function solution($n){
    $sum=0;
    for($i=0; $i<$n; $i++){
        if($i%3==0 || $i%5==0){
            $sum+=$i;
        }
    }
    return $sum;
}
echo solution(100000000);

?>