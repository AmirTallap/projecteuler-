<?php
//https://projecteuler.net/problem=5


// 2520 is the smallest number that can be divided by each of the 
//numbers from 1 to 10 without any remainder.

// What is the smallest positive number that is evenly divisible by all of 
// the numbers from 1 to 20?


ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution(){
    

    $n = 20;
    function checkMe($n){
        for($i=1; $i<=20; $i++){
            if(!is_int($n/$i)) return false;
        }
        return true;
    }
    while(true){
        if(checkMe($n)==false) $n+=20;
        else return $n;
    }
    
}
echo solution();

?>