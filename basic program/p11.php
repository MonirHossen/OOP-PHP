<!--Arry to file conversion-->

<?php

$emails = array("a.com", "b.com","c.com","d.com","e.com");

//first process
//$s = "";
//foreach ($emails as $email)
//{
//   $s .= $email." ".";"." ";
//}
//$s = substr($s, 0,strlen($s)-2);
//print $s;
//end first process

$s = implode("; ",$emails);
print $s;

?>