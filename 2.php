<?php
// https://projecteuler.net/problem=2

// Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:

// 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...

// By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

function solution(){

    function fib($n,&$memo=[]){
        if(array_key_exists($n,$memo))return $memo[$n];
        if($n<=2) return 1;
        $val=fib($n-1,$memo)+fib($n-2,$memo);
        $memo[$n]=$val;
        return $memo[$n];
    }
    
    $ct=0;
    $f=1;
    while($ct<4000000){
        $fibVal=fib($f);
        if($fibVal%2==0) $ct+=$fibVal;
        $f++;
    }
    echo $ct;
}

echo solution();

?>