<?php
//https://projecteuler.net/problem=12



// The sequence of triangle numbers is generated by adding the natural numbers. 
// So the 7th triangle number would be 1 + 2 + 3 + 4 + 5 + 6 + 7 = 28. 
// The first ten terms would be:

// 1, 3, 6, 10, 15, 21, 28, 36, 45, 55, ...

// Let us list the factors of the first seven triangle numbers:

//  1: 1
//  3: 1,   3
//  6: 1,2,3,6
// 10: 1,2,5,10
// 15: 1,3,5,15
// 21: 1,3,7,21
// 28: 1,2,4,7,14,28
// We can see that 28 is the first triangle number to have over five divisors.

// What is the value of the first triangle number to have over five hundred divisors?


ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution($n){

    function countDivisors($n) {
       $r=0;
       $nSqrt=sqrt($n);
        for($i = 1; $i <= $nSqrt; $i++) {
            if($n%$i == 0) {
                $r+=2;
            }
        }
       return $r-1;
    }
    $x=1;
    while(true){
        $triangularNumber=$x*($x+1)/2;
        if(countDivisors($triangularNumber)>=$n) return $triangularNumber;
        $x++;
    }

}
echo solution(500);

?>