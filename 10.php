<?php
//https://projecteuler.net/problem=10

// The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.

// Find the sum of all the primes below two million.

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution(){
    function isPrime($n){
        if($n==2) return true;
        for($i=2; $i*$i<=$n; $i++){
            if($n%$i==0) return false;
        }
        return true;
    }

    $sum=2;
    for($i=3; $i<=2000000; $i+=2){
        if(isPrime($i)){
            $sum+=$i;
        }
    }
    return $sum;


}
echo solution();

?>