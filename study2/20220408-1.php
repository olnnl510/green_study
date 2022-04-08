<?php

/* 1번문제*/
for ($i=9; $i>1; $i--) //시(천천히도는)
{
    if ( $i <9 && $i > 1)
    {
        print "----------<br>" ;

    }
    for ($z=9; $z>0; $z--) //분(빠르게도는)
    {
        $result = $i * $z ;
        print "$i x $z = $result <br>" ;
    }
}

print "22222222222222222222" ;

?>