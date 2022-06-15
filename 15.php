<?php
//https://projecteuler.net/problem=15

// Starting in the top left corner of a 2×2 grid, and only being able to move to the right and down, there are exactly 6 routes to the bottom right corner.


// How many such routes are there through a 20×20 grid?


ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution($n){
 $g=[];
 $n+=1;
 for($i=0; $i<$n; $i++){
    $grid[$i]=[];
    for($j=0; $j<$n; $j++){
        $grid[$i][$j]=1;
    }
 }
 for($i=0; $i<$n; $i++){
    for($j=0; $j<$n; $j++){
        if(isset($grid[$i-1])){
            if(isset($grid[$i][$j-1])){
                $grid[$i][$j]=$grid[$i-1][$j]+$grid[$i][$j-1];
            }
        }
    }
 }
return $grid[$n-1][$n-1]; 

}
echo solution(20);

?>