<?php
function writeMsg() {
    echo "2017年度の新入社員研修がスタートしました。頑張りましょう";
}
writeMsg();
    echo "<br><br>";

function addfive($num){
  $num += 5;
  echo $num;
  echo "<br>";
}

function addsix(&$num){
    $num += 6;
    echo $num;
    echo "<br>";
}

$orignum = 10;

addfive($orignum);

echo "元の値は　$orignum <br/>";

addsix($orignum);

echo "元の値は　$orignum <br/>";
?>
