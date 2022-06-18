<?php
//https://projecteuler.net/problem=22

// Using names.txt (right click and 'Save Link/Target As...'), a 46K text file containing over five-thousand first names, begin by sorting it into alphabetical order. Then working out the alphabetical value for each name, multiply this value by its alphabetical position in the list to obtain a name score.

// For example, when the list is sorted into alphabetical order, COLIN, which is worth 3 + 15 + 12 + 9 + 14 = 53, is the 938th name in the list. So, COLIN would obtain a score of 938 × 53 = 49714.

// What is the total of all the name scores in the file?



ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution(){
    $myfile = fopen("p022_names.txt", "r") or die("Unable to open file!");
    $data= "[".fgets($myfile)."]";
    $data= json_decode($data);
    sort($data);
    $total=0;
    foreach($data as $k=>$name){
        $tmp=0;
        for($i=0; $i<strlen($name); $i++){
            $tmp += ord($name[$i])-64;       
        }
        $total+=$tmp*($k+1);
    }
    return $total;
}
echo solution();

?>