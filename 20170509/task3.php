<?php

/*    $x = 1;

    do {

        echo "number　: $x <br>";

        $x++;

    } while ($x <= 5);
    */

    $x = 1;

    for($i=0;$i<5;$i++){
            echo "number　: {$x} <br />";
            $x++;
    }
   echo "<br />";
/*    $colors = array("赤", "緑", "青", "黄色");

    foreach ($colors as $value) {

        echo "$value <br>";

    }
*/
    $colors = ["赤","緑","青","黄色"];

    for($i=0;$i<count($colors);$i++){

            echo "{$colors[$i]} <br />";
    }
?>
