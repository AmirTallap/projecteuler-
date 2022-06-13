<?php
//https://projecteuler.net/problem=9


// A Pythagorean triplet is a set of three natural numbers, a < b < c, 
// for which,

// a2 + b2 = c2
// For example, 32 + 42 = 9 + 16 = 25 = 52.

// There exists exactly one Pythagorean triplet for which a + b + c = 1000.
// Find the product abc.


ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution($n){
    for($a=1; $a<=$n/2; $a++){
        for($b=1; $b<=$n/2; $b++){
            $check= (pow($a,2)) + (pow($b,2));
            $c=sqrt($check);

            if($a+$b+$c==$n){
                return $a*$b*$c;
            }
        }
    }
}
echo solution(1000);

?>