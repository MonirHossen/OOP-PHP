
<!--5.	Find first N prime number.-->
<?php
$n = 200;
$primeCount = 0;
$k = 1;

while ($primeCount < $n)
{
    if (IsPrime($k))
    {
        $primeCount++;
        print "$primeCount : $k <br>";
    }
    $k ++;
}

function IsPrime($a)
{
    $count = 0;
    $s = sqrt($a);
    for($i = 2; $i < $s; $i++)
    {
        if($a % $i == 0)
            $count++;
        break;
    }
    if ($count==0)
        return true;
    return false;
}
