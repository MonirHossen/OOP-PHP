<!--8.	1, 4, 8, 11, 15, 18, 22 , …… , N-->
<?php
$n = 20;
$s = 1;
$flag = 0;

for ($i = 1; $i <= $n; $i++)
{
    print "$s<br>";
    if ($flag == 0)
    {
        $s += 3;
        $flag = 1;
    }
    else
    {
        $s += 4;
        $flag = 0;
    }

}
