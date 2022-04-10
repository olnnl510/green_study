<?php

/*6번문제

돈쌓기 피라미드 줄의 개수 입력하기
(3 ~ 10) 
"; // 돈 ?> 

*/


    $money = rand(3, 10);
    print "money : $money <br>";
    for($i=0; $i<$money; $i++)
    {
        print "돈";
    }
    print "<br>";




    $money = rand(3, 10);
    print "money : $money <br>";

    
    for($z=0; $z<$star; $z++)     {
        for($i=0; $i<$star; $i++)
        {
            print "돈";
        }
        print "<br>";
    }    



?>