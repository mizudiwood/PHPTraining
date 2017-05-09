<?php
    $color1[0] = "red";
    $color1[1] = "green";
    print_r( $color1);
    print( "<br />");

    $color2[ ] = "red";
    $color2[ ] = "green";
    print_r( $color2);
    print( "<br />");

    $color3 = array( 0=>"red",1=>"green");
    print_r($color3);
    print( "<br />");

    $color4 = array( "red","green");
    print_r($color4);
    print( "<br>");

    $like2=array("color"=>"red"," food"=>"sushi");
    print_r($like2);
    print( "<br />");

    $like3["color"]="red";
    $like4["food"]="sushi";
    print_r($like4);
    print("<br/>");

    $age=array("yamada"=>"25","honda"=>"37","kato"=>"67");
    echo "yamadaは".$age['yamada']."歳";
    print( "<br />");

    $age=array("yamada"=>"25","honda"=>"37","kato"=>"67");
    foreach($age as $x=>$x_value){
    echo "Key=".$x. ",Value=".$x_value;
    echo "<br>";}

    $fruits = array("apple", "orange", "grape");
    echo "I like " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . ".";
    echo "<br />";
    echo count($fruits);
    echo "<br />";
    $arrlength = count($fruits );

    for($x = 0; $x < $arrlength; $x++) {
    echo $fruits [$x];
    echo "<br>";}
?>
