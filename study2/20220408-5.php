<?php

/*5번문제

1부터 100까지 숫자 중에 홀수와 짝수 각각 나열하기

*/

print " --홀수-- <br>";
for($i=1; $i<=100; $i++)
{
    if($i %2 == 0) { continue; }
    print $i . "<br>";
}


print " --짝수-- <br>";
for($i=1; $i<=100; $i++)
{
    if($i %2 == 1) { continue; }
    print $i . "<br>";
}

?>