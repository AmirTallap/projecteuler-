<?php
//https://projecteuler.net/problem=7

// By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can 
// see that the 6th prime is 13.

// What is the 10 001st prime number?


ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution(){

    function isPrime($n) {
        if ($n == 2) return true;
        //Fastest way to determine if a number is prime.
        for ($i = 2; $i * $i <= $n; $i++) {
            if ($n % $i == 0) return false;
        }
        return true;
    }

    $i = 1;
    $c=1;
    while (true) {
        $i += 2;
        if(isPrime($i)) $c++;
        if($c==10001) return $i;
        
    }

}
echo solution();

?>