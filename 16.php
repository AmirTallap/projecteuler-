<?php
//https://projecteuler.net/problem=0


// 215 = 32768 and the sum of its digits is 3 + 2 + 7 + 6 + 8 = 26.

// What is the sum of the digits of the number 2^1000?

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution($n){
$digits=[1]; 
for($i=0; $i<$n; $i++){
    $carry=0;
    $count=count($digits)+1;
    for($j=0;$j<$count;$j++){
        $currentDigit=isset($digits[$j])?$digits[$j]:0;
        $currentDigit=($currentDigit*2)+$carry;
        if($currentDigit>9){
            $currentDigit-=10;
            $carry=1;
        }else{
            $carry=0;
        }
        $digits[$j]=$currentDigit;
    }

 }
 return array_sum($digits);
}
echo solution(1000);

?>