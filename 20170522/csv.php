<?php
            $csvfile = "question.csv";
            $counterfile = "counter.txt";

           if (file_exists($counterfile) ){
            $fp = fopen( "counter.txt", "r+" ); // ファイル開く

            $total = fgets( $fp, 100000 ); // 9桁分値読み取り
            $number = intval($total);

            fclose( $fp );

            }

            if (file_exists($csvfile) )
            {
            $myfile = fopen( "question.csv", "a" ); // ファイル開く


            $number= $number +1; // 値+1（カウントアップ）


            fwrite($myfile, $_GET['name1'] . " " . $_GET['name2']);//氏名
            fwrite($myfile, " " . $_GET['radiosex'] . " " . $_GET['add']);//性別、住所
            fwrite($myfile, " " . $_GET['tel1'] . " " . $_GET['tel2'] . " " . $_GET['tel3']);//電話番号
            fwrite($myfile, " " . $_GET['mail']);//メールアドレス

            fwrite($myfile, " " . $_GET['a']);//どこで知ったか
            //質問カテゴリ
            fwrite($myfile, " " . $_GET['ques']);
            //質問内容
            if($_GET['content'] != "")
            fwrite($myfile, " " . $_GET['content'] . "\r\n");
            else fwrite($myfile, " " . "未入力" . "\r\n");

            fclose($myfile);
            }

            else {

               $myfile = fopen("question.csv", "w");

               $number = 1;
    //           fwrite($myfile, $number . "\r\n");

               fwrite($myfile, $_GET['name1'] . " " . $_GET['name2']);//氏名
               fwrite($myfile, " " . $_GET['radiosex'] . " " . $_GET['add']);//性別、住所
               fwrite($myfile, " " . $_GET['tel1'] . " " . $_GET['tel2'] . " " . $_GET['tel3']);//電話番号
               fwrite($myfile, " " . $_GET['mail']);//メールアドレス

               fwrite($myfile, " " . $_GET['a']);//どこで知ったか

               //質問カテゴリ
               fwrite($myfile, " " . $_GET['ques']);
               //質問内容
               if(isset($_POST['content']))
               fwrite($myfile, " " . $_GET['content'] . "\r\n");
               else fwrite($myfile, " " . "未入力" . "\r\n");
               fclose($myfile);
            }


            if (file_exists($counterfile) )
            {
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
<style>

.btn {
background: #E27575;
border: none;
padding: 10px 25px 10px 25px;
color: #FFF;
box-shadow: 1px 1px 5px #B6B6B6;
border-radius: 3px;
text-shadow: 1px 1px 1px #9E3F3F;
cursor: pointer;
margin: auto;
}
.btn:hover {
background: #CF7A7A
}

</style>

</head>
<body>
    <div class="cc">
    <h4>お問い合わせありがとうございました！</h4>
    <h5>お問い合わせ番号: <?php echo $number; ?></h5>
    <input type="button" class="btn" onclick="location.href='list.php'" value="お問い合わせ一覧">

</div>
</body>

</html>
