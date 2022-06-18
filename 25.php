<?php
//https://projecteuler.net/problem=25



ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution($n){
 
    $fibonacci = 1;
    $old1 = 0;
    $old2 = 1;
    $n = 1000;
    $i = 1;
    
    $n = bcpow(10, $n-1);

    while (bccomp($fibonacci, $n) == -1) {
        $fibonacci = bcadd($old1, $old2); 
        $old1 = $old2;
        $old2 = $fibonacci;
        $i++;
    }
    
    return $i;
}
echo solution(1000);

?>