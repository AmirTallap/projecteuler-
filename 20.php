<?php
//https://projecteuler.net/problem=20


// n! means n × (n − 1) × ... × 3 × 2 × 1

// For example, 10! = 10 × 9 × ... × 3 × 2 × 1 = 3628800,
// and the sum of the digits in the number 10! is 3 + 6 + 2 + 8 + 8 + 0 + 0 = 27.

// Find the sum of the digits in the number 100!

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution($n){
    $product=1;
    for($i=1; $i<=$n; $i++){
        $product=bcmul($product,$i);
    }
    return array_sum(str_split($product));
}
echo solution(100);

?>