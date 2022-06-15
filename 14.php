<?php
//https://projecteuler.net/problem=14

// The following iterative sequence is defined for the set of positive integers:

// n → n/2 (n is even)
// n → 3n + 1 (n is odd)

// Using the rule above and starting with 13, we generate the following sequence:

// 13 → 40 → 20 → 10 → 5 → 16 → 8 → 4 → 2 → 1
// It can be seen that this sequence (starting at 13 and finishing at 1)
//  contains 10 terms. Although it has not been proved yet (Collatz Problem), 
//  it is thought that all starting numbers finish at 1.

// Which starting number, under one million, produces the longest chain?

// NOTE: Once the chain starts the terms are allowed to go above one million.



ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 

error_reporting(E_ALL);
function solution(){
$start = microtime(true);
 $cache=[];
 function solveAndCache($n,&$cache){
    if(array_key_exists($n,$cache)) return $cache[$n];
    $count=1;
    while($n <> 1){
        if($n % 2==0){
            $n=$n/2;
        }else{
            $n=(3*$n)+1;
        }
        $count++;
        $cache[$n]=$count;
    }
    return $count;
 }

 $max=0;
 $point=null;
 for($i=1; $i<=1000000; $i++){
    if($i%2==0) continue;
    $find=solveAndCache($i,$cache);
    
    if($find>$max){
        $max=$find;
        $point=$i;
    }
 }
 $after=microtime(true);
 echo 'Time '. (microtime(true) - $start). "<br>";
 return $point;
 
}
echo solution();

?>