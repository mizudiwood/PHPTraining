<?php
    $csvfile = "question.csv";
    $counterfile = "counter.txt";

    if (file_exists($counterfile) ){
        $fp = fopen( "counter.txt", "r+" ); // ファイル開く

        $total = fgets( $fp, 100000 ); // 値を読み取り
        $number = intval($total);

        fclose( $fp );
    }

    if (file_exists($csvfile) ){
        $myfile = fopen( "question.csv", "a" ); // ファイル開く
        }

    else {
        $myfile = fopen("question.csv", "w"); // ファイル作る

        $number = 0;
    }
        $number= $number +1; // 値+1（カウントアップ）
        fwrite($myfile, $_GET['name1'] . "," . $_GET['name2']);//氏名
        fwrite($myfile, "," . $_GET['radiosex'] . "," . $_GET['add']);//性別、住所
        fwrite($myfile, "," . $_GET['tel1'] . "," . $_GET['tel2'] . "," . $_GET['tel3']);//電話番号
        fwrite($myfile, "," . $_GET['mail']);//メールアドレス

        fwrite($myfile, "," . $_GET['a']);//どこで知ったか
        //質問カテゴリ
        fwrite($myfile, "," . $_GET['ques']);
        //質問内容
        if($_GET['content'] != "")
            fwrite($myfile, "," . $_GET['content'] . "\r\n");
        else fwrite($myfile, "," . "未入力" . "\r\n");
            fclose($myfile);

    if (file_exists($counterfile) ){
        $fp = fopen( "counter.txt", "r+" ); // ファイル開く

        rewind( $fp ); // ファイルポインタを先頭に戻す
        fputs( $fp, $number ); // 値書き込み
        fclose( $fp ); // ファイル閉じる
    }

    else {
        $myfile = fopen("counter.txt", "w");

        fwrite($myfile, $number);
        fclose($myfile);
    }

?>
<!DOCTYPE HTML>

<html>
<head>
<link rel="stylesheet" href="form.css" type="text/css"/>

</head>
<body>
    <div id = "animate-area">
    <div class="cc">
    <h4>お問い合わせありがとうございました！</h4>
    <h5>お問い合わせ番号: <?php echo $number; ?></h5>
    <!-- お問い合わせ一覧ページへ -->
    <input type="button" class="btn" onclick="location.href='list.php'" value="お問い合わせ一覧">

</div>
</div>
</body>

</html>
