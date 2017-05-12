<?php

$counterfile = "count.txt";

 if (file_exists($counterfile) )
 {
$fp = fopen( "count.txt", "r+" ); // ファイル開く
$count = fgets( $fp, 10 ); // 9桁分値読み取り
$count++; // 値+1（カウントアップ）
rewind( $fp ); // ファイルポインタを先頭に戻す
fputs( $fp, $count ); // 値書き込み
fclose( $fp ); // ファイル閉じる
}

else {
    $count=1;
    $myfile = fopen("count.txt", "w");
    $txt = "0";
    fwrite($myfile, $txt);
    fclose($myfile);
}

echo 'あなたは'.$count.'人目のお客様です';

?>
