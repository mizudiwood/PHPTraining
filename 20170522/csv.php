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


            fwrite($myfile, $_GET['name1'] . " " . $_GET['name2']);
            fwrite($myfile, " " . $_GET['radiosex'] . " " . $_GET['add']);
            fwrite($myfile, " " . $_GET['tel1'] . " " . $_GET['tel2'] . " " . $_GET['tel3']);
            fwrite($myfile, " " . $_GET['mail']);

            fwrite($myfile, " " . $_GET['a']);

            fwrite($myfile, " " . $_GET['ques'] . " " . $_GET['content']. "\r\n");
            fclose($myfile);
            }

            else {

               $myfile = fopen("question.csv", "w");

               $number = 1;
    //           fwrite($myfile, $number . "\r\n");

               fwrite($myfile, $_GET['name1'] . " " . $_GET['name2']);
               fwrite($myfile, " " . $_GET['radiosex'] . " " . $_GET['add']);
               fwrite($myfile, " " . $_GET['tel1'] . " " . $_GET['tel2'] . " " . $_GET['tel3']);
               fwrite($myfile, " " . $_GET['mail']);

               fwrite($myfile, " " . $_GET['a']);

               fwrite($myfile, " " . $_GET['ques'] . " " . $_GET['content'] . "\r\n");
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


            echo "お問い合わせありがとうございました！" . "<br>";
            echo "お問い合わせ番号:" . "$number";
?>
