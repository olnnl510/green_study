<?php

/* 8번문제

현재 시간이 20시 이전이면 "Have a good day!" 출력하기

*/

$timenow = date("H-i-s");
$timetarget = "20:00:00";
$str_now = strtotime($timenow);
$str_target = strtotime($timetarget);

if($str_now > $str_target)
{
    print "Have a good day!";
}

?>