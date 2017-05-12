<?php

date_default_timezone_set('Asia/Tokyo');

echo date("Y/m/d g:i");
echo "<br />";
// 文字列のアルファベットのところはすべてフォーマット文字列です
print "今日は".date("Y年n月j日")."　時刻は".date("G時i分s秒")."です。";

echo "<br />";
$weekday = array( "日", "月", "火", "水", "木", "金", "土" );
echo date("Y/m/d(") . $weekday[date("w")] . date(") G:i");

?>
