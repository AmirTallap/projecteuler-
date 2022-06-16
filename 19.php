<?php
//https://projecteuler.net/problem=19

// You are given the following information, but you may prefer to do some research for yourself.

// 1 Jan 1900 was a Monday.
// Thirty days has September,
// April, June and November.
// All the rest have thirty-one,
// Saving February alone,
// Which has twenty-eight, rain or shine.
// And on leap years, twenty-nine.
// A leap year occurs on any year evenly divisible by 4, but not on a century unless
//  it is divisible by 400.
// How many Sundays fell on the first of the month during the twentieth century
//  (1 Jan 1901 to 31 Dec 2000)?



ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
function solution(){

function padMe($v){return str_pad($v,2,"0",STR_PAD_LEFT);}
 $currentDate=19000101;
 function daysOfMonth($currentYear){
    $feb=is_int($currentYear/4)?29:28;
    $currentYear=(string)$currentYear;
    $lastTwo=$currentYear[strlen($currentYear)-2].$currentYear[strlen($currentYear)-1];
    if($lastTwo=="00"){
        $feb=is_int($currentYear/400)?29:28;
    }
    return [
        1=>31,
        2=>$feb,
        3=>31,
        4=>30,
        5=>31,
        6=>30,
        7=>31,
        8=>31,
        9=>30,
        10=>31,
        11=>30,
        12=>31,
    ];
 }
 $sunDays=0;
 while($currentDate<=20001231){
    $check=(string)$currentDate;
    if(substr($currentDate,6,2)=="02" &&substr($currentDate,0,4)>=1901){
        $sunDays++;
        echo substr($check,0,4).'-';
        echo substr($check,4,2).'-';
        echo substr($check,6,2).'<br>';
    }
    //Doing the math here
    $currentYear=substr($currentDate,0,4);
    $currentMonth=substr($currentDate,4,2);
    $currentDay=substr($currentDate,6,2);
    
    $newDay=$currentDay+7;
    
    $daysOfMonth=daysOfMonth($currentYear)[(int)$currentMonth];
    
    if($newDay>$daysOfMonth){
        $currentMonth++;
        $newDay=$newDay-$daysOfMonth;
    }
    
    
    if($currentMonth>12){
        $currentYear++;
        $currentMonth=1;
    }
    $currentDate=(int)($currentYear.padMe($currentMonth).padMe($newDay));
    
 }

 return $sunDays;


}
echo solution();

?>