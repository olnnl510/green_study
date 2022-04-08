<?php

/*6번문제

1부터 20까지의 숫자를 랜덤으로 출력되게 
했을 때, 홀수는 "Left" 짝수는 "Right"로 출력
되게 하

*/


$fac = rand(1,20);
print $fac . "는" ;

if($fac %2 ==0)
{
    print "짝수 Right";
}
else
{
    print "홀수 Left";
}



?>