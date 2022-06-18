<?php
//https://projecteuler.net/problem=24

// A permutation is an ordered arrangement of objects. For example, 3124 is one possible permutation of the digits 1, 2, 3 and 4. If all of the permutations are listed numerically or alphabetically, we call it lexicographic order. The lexicographic permutations of 0, 1 and 2 are:

// 012   021   102   120   201   210

// What is the millionth lexicographic permutation of the digits 0, 1, 2, 3, 4, 5, 6, 7, 8 and 9?



ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution(){
    $perm=range(0,9);
    function swap($i,$j,&$perm){
        $k = $perm[$i];
        $perm[$i] = $perm[$j];
        $perm[$j] = $k;
    }
    $count = 1;
    $numPerm = 1000000;
    while ($count < $numPerm) {
        $N = count($perm);
        $i = $N-1;
        while ($perm[$i - 1] >= $perm[$i]) {
            $i = $i - 1;
        }
        $j = $N;
        while ($perm[$j - 1] <= $perm[$i - 1]) {
            $j = $j - 1;
        }
        swap($i - 1, $j - 1,$perm);
        
        $i++;
        $j = $N;
        while ($i < $j) {
            swap($i - 1, $j - 1,$perm);
            $i++;
            $j--;
        }
        $count++;
    }
    $permNum = "";
    for ($k = 0; $k < count($perm); $k++) {
        $permNum = $permNum . $perm[$k];
    }
    return $permNum;

}
echo solution();

?>