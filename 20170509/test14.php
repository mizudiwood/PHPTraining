<?php
function writeMsg() {
    echo "Hello world!";
}

writeMsg();
    echo "<br>";
    echo "<br>";
function familyName($fname) {
    echo "$fname yamada.<br>";
}

familyName("yuuki");
familyName("hirobumi");
familyName("yukiko");
familyName("hanako");
familyName("keichi");
    echo "<br>";
function familyName2($fname, $year) {
    echo "$fname yamada. が生まれた年は $year <br>";
}

familyName2("yuuki","1975");
familyName2("hirobumi","1978");
familyName2("yukiko","1983");
    echo "<br>";

function setHeight($minheight = 50) {
    echo "高さは : $minheight <br>";
}
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
    echo "<br>";

function sum($x,$y){

$z=$x+$y;
return $z;
}
echo "5+10=".sum(5,10). "<br>";
echo "7+13=".sum(7,13). "<br>";
echo "2+4=".sum(2,4). "<br>";
?>
