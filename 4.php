<?php
// https://projecteuler.net/problem=4

// A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.

// Find the largest palindrome made from the product of two 3-digit numbers.

//The time complexity is o(n*n) :(
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution(){
$current=0;
for($i=999; $i>0; $i--){
    for($j=999; $j>0; $j--){
        $product=$i*$j;
        if(strrev((string)$product)==(string)$product){
            return $product;
        }
    }
}

}

echo solution();

?>