<?php
            $counterfile = "question.csv";

            if (file_exists($counterfile) )
            {
            $myfile = fopen( "question.csv", "a" ); // ファイル開く
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

               fwrite($myfile, $_GET['name1'] . " " . $_GET['name2']);
               fwrite($myfile, " " . $_GET['radiosex'] . " " . $_GET['add']);
               fwrite($myfile, " " . $_GET['tel1'] . " " . $_GET['tel2'] . " " . $_GET['tel3']);
               fwrite($myfile, " " . $_GET['mail']);

               if(isset($_GET['checkbox'])){
                   $checkbox = $_GET['checkbox'];
                   $count = count($checkbox);
                   fwrite($myfile, " " . $count);

                   for($i=0;$i<$count;$i++){

                           fwrite($myfile, " " . $checkbox[$i]);
                   }
               }
                   else {
                      $count = 0;
                      fwrite($myfile, " " . 0);
                   }

               fwrite($myfile, " " . $_GET['ques'] . " " . $_GET['content']. "\r\n");
               fclose($myfile);
            }

        echo "お問い合わせありがとうございました！" . "<br>";
        echo "お問い合わせ番号:" . "";
?>
