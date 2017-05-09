<?php
    $s = 0;
    $i = 0;
    do{
      ++$i;
      $s += $i;
    }while($i < 10);
    print "1から　$i までの和は　$s";
    echo "<br>";

    for ($a=0;$a<=3;$a++){
    print( "{$a}<br />" );
    }

    $color=array("red","green","blue");
    foreach ($color as $value){
      print("{$value}<br />");
  }

  $color=array("red","green","blue");
  foreach($color as $iro=>$value){
    print("{$iro} : {$value}<br />");
}
?>
