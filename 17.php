<?php
//https://projecteuler.net/problem=17


ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution($n){
    $sum=0;
    for($i=1; $i<=$n; $i++){
        $s=formatNumber($i);
        $sum+=$s;
    }
    return $sum;
}
function formatNumber($number){
    $len=strlen($number);
    switch ($len) {
        case $len==1:
            $select=[
                0=>0,
                1=>3,
                2=>3,
                3=>5,
                4=>4,
                5=>4,
                6=>3,
                7=>5,
                8=>5,
                9=>4,
            ];
            return $select[$number];
        case $len==2 && $number <20:
            $select=[
                10=>3,
                11=>6,
                12=>6,
                13=>8,
                14=>8,
                15=>7,
                16=>7,
                17=>9,
                18=>8,
                19=>8,
            ];
            return $select[$number];
        case $len==2 && $number >=20:
            $select=[
                20=>6,
                30=>6,
                40=>5,
                50=>5,
                60=>5,
                70=>7,
                80=>6,
                90=>6,
            ];
            $number=str_split($number);
            return $select[$number[0]."0"]+formatNumber($number[1]);
            case $len==3 && $number<1000:
                $number=str_split($number);
                return formatNumber($number[0])+($number[1]==0&&$number[2]==0?7:10)+formatNumber((int)($number[1].$number[2]));
            case $len==4:
                return 11;
        default:
            return 0;
            break;
    }
    
}
echo solution(1000);
?>