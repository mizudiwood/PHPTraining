<?php
$Data = array(
    array("A","B","C","D","E"),
    array("F","G","H","I","J"),
    array("K","L","M","N","O",),
    array("P","Q","R","S","T"),
    array("U","V","W","X","V"),
);
for($i=0;$i<=4;$i++){
    for($j=0;$j<=4;$j++){
       if ($Data[$i][$j]=="B" or $Data[$i][$j]=="F" or $Data[$i][$j]=="X"){
            echo "&nbsp";
        }
        else {
            echo "{$Data[$i][$j]}";
       }
    }
    echo "<br />";
}
?>
