<?php
$a = 0;
$b = 1;
$n = 20;
for ($i = 1; $i <= $n; $i++)
{
  $r = $a+$b;
  print "$r <br>";
  $a = $b;
  $b = $r;
}
