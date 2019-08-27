<!--7.	Draw a table of C number of column & R number of row with consecutive number.-->
<?php

$c=5;
$r=5;
print'<table border="1px" width="600px">';
for($i=1; $i<=$r; $i++){
    print"<tr>";
    for($j=1; $j<=$c; $j++){
        print"<td>".$j."</td>";

    }

    print"</tr>";

}
print'</table>';
?>