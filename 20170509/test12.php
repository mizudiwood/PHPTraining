<?php
    $x = 100;
    $y = "100";

    var_dump($x == $y); // 値は同じなのでTrueを返す
    var_dump($x === $y); //型が異なるのでfalseを返す
    var_dump($x >= $y); //$xは$yより大きいまたは同じ、trueを返す。
    echo "<br>";


    $i = 1;

    echo ++$i;
        echo "<br>";
    echo $i++;
        echo "<br>";
    echo $i++;
        echo "<br>";
    echo ++$i;
        echo "<br>";

?>
