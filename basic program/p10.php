<?php
$a = 2;
$b = 12;
$c = 8;

if($a > $b)
{
    $tmp = $a;
    $a   = $b;
    $b   = $tmp;
}
else {
    if ($a > $c)
    {
        $tmp = $a;
        $a   = $c;
        $c   = $tmp;
    }
    else{
        if ($b > $c)
        {
            $tmp = $b;
            $b   = $c;
            $c   = $tmp;
        }
    }
}

print "$a , $b , $c ";
