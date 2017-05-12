<?php

date_default_timezone_set('Asia/Tokyo');
/*
$counterfile = "date.csv";

$fp = fopen('date.csv', 'a');
$weekday = array( "日", "月", "火", "水", "木", "金", "土" );
   fputcsv($fp, array(date("Y/m/d"),$weekday[date("w")], date("G:i")));
    fclose($fp);
*/

$counterfile = "date.csv";

if (file_exists($counterfile) )
{
$fp = fopen( "date.csv", "r+" ); // ファイル開く
$date = fgets( $fp, 30 ); // 9桁分値読み取り
 // 値+1（カウントアップ）
 echo '前回:'.$date;
 $weekday = array( "日", "月", "火", "水", "木", "金", "土" );
 $date = date("Y/m/d(") . $weekday[date("w")] . date(") G:i:s");
rewind( $fp ); // ファイルポインタを先頭に戻す
fputs( $fp, $date ); // 値書き込み
fclose( $fp ); // ファイル閉じる
}

else {

   $myfile = fopen("date.csv", "w");
   $weekday = array( "日", "月", "火", "水", "木", "金", "土" );
   fwrite($myfile, date("Y/m/d(") . $weekday[date("w")] . date(") G:i"));
   fclose($myfile);
}



?>
