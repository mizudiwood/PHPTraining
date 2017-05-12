<?php
//フォーマット部分（ここでは%d）が２つ目の引数と交換されて出力されます。
$score = 95;
printf( "得点は%d点です", $score );
echo "<br />";


$year = 2004;
$month = 5;
$day = 4;

//「2004年05月04日」と出力したい
printf("今日は%04d年%02d月%02d日です。", $year, $month, $day );
?>
