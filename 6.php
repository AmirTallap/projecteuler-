<?php
//https://projecteuler.net/problem=6


// The sum of the squares of the first ten natural numbers is,

// The square of the sum of the first ten natural numbers is,

// Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is .

// Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.


ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function solution($n){
 $f=0;
 $l=0;
 for($i=1; $i<=$n; $i++){
   $f+=$i*$i;
 }
 $l=array_sum(range(1,$n));

 return $l*$l-$f;


}
echo solution(100);

?>