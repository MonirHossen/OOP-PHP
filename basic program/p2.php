<!--2.	Find consecutive numbers between A & B divided by N.-->
<?php
$a = 2;
$b = 20;
$c=5;
for ($i = $a; $i <= $b; $i++)
{
    if($i % $c ==0)
    {
        print"$i<br>";
    }
}