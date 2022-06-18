<?php
//https://projecteuler.net/problem=21


// Let d(n) be defined as the sum of proper divisors of n (numbers less than n which divide evenly into n).
// If d(a) = b and d(b) = a, where a ≠ b, then a and b are an amicable pair and each of a and b are called amicable numbers.

// For example, the proper divisors of 220 are 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 and 110; therefore d(220) = 284. The proper divisors of 284 are 1, 2, 4, 71 and 142; so d(284) = 220.

// Evaluate the sum of all the amicable numbers under 10000.

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution($n){
    function sumDivisors($num){
        $sum=1;
        $sqrt=floor(sqrt($num));
        if($sqrt*$sqrt==$num){
            $sqrt--;
            $sum+=$sqrt;
        }
        for($i=2; $i<=$sqrt; $i++){
            $sum+=$num%$i==0?$i+($num/$i):0;
        }
        return $sum;

    }
    $arr=[];
    for($i=$n; $i>1; $i--){
        $find=sumDivisors($i);
        $result=sumDivisors($find);
        if($i==$result && $i <> $find){
            $arr[]=$find;
        }
    }
    return array_sum($arr);
}
echo solution(100000);

?>