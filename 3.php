<?php
// https://projecteuler.net/problem=3

// The prime factors of 13195 are 5, 7, 13 and 29.

// What is the largest prime factor of the number 600851475143 ?


ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

function solution(){

   $primes=[];
   $n=600851475143;
   $start=2;
   while($n >1){
        $val=$n/$start;
        if(is_int($val)){
            $primes[]=$start;
            $start=2;
            $n=$val;
            continue;
        }
        $start++;
   }


   return max($primes);

}

echo solution();

?>