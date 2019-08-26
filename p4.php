<?php
$a = 4;
$count = 0;
for ($i = 2; $i < $a; $i++)
{
    if ($a % $i == 0)
    {
        $count++;
    }
}

if ($count == 0)
{
    print "This Is a Prime Number";
}
else
{
    print "This is Not a Prime Number!!!";
}
?>
