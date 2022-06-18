<?php
//https://projecteuler.net/problem=23

// A perfect number is a number for which the sum of its proper divisors
//  is exactly equal to the number. For example, the sum of the proper 
//  divisors of 28 would be 1 + 2 + 4 + 7 + 14 = 28, which means that 28 
//  is a perfect number.

// A number n is called deficient if the sum of its proper divisors is 
// less than n and it is called abundant if this sum exceeds n.

// As 12 is the smallest abundant number, 1 + 2 + 3 + 4 + 6 = 16, the 
// smallest number that can be written as the sum of two abundant numbers 
// is 24. By mathematical analysis, it can be shown that all integers 
// greater than 28123 can be written as the sum of two abundant numbers. 
// However, this upper limit cannot be reduced any further by analysis 
// even though it is known that the greatest number that cannot be 
// expressed as the sum of two abundant numbers is less than this limit.

// Find the sum of all the positive integers which cannot be written as 
// the sum of two abundant numbers.



ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution($n){
 function sumDivisors($num){
    $sqrt=floor(sqrt($num));
    $sum=1;
    if($sqrt*$sqrt==$num){
        $sqrt--;
        $sum+=$sqrt;
    }
    for($i=2; $i<=$sqrt; $i++){
        $sum+=$num%$i==0?$i+($num/$i):0;
        
    }
    return $sum>$num;
 }
 $abunantList=[];
 for($i=2; $i<=$n; $i++){ 
    if(sumDivisors($i)) $abunantList[]=$i;
 }

 $canBeWrittenAsAbundunt=[];
 foreach($abunantList as $i=>$v1){
    foreach($abunantList as $j=>$v2){
        $sumValues=$v1+$v2;
        if($sumValues<=$n){
            $canBeWrittenAsAbundunt[$sumValues]=true;
        }
    }   
 }
 $t=0;
 for($i=1; $i<=$n; $i++){
    $t+=!isset($canBeWrittenAsAbundunt[$i])?$i:0;
 }
 
 return $t;



}
echo solution(28123);

?>