<!DOCTYPE HTML>

<html>
<head>
<link rel="stylesheet" href="form.css" type="text/css"/>
</head>

<body>

    <div id = "animate-area">
    <div class="dd" >
        <!-- <br> -->
     <div class= "ff"><h3 >お問い合わせ一覧</h3></div>
<div class= "ff">
     <table border="1" align="center" >
  <tr>
    <th width="15px">No.</th>
    <th width="70px">氏名</th>
    <th width="20px">性別</th>
    <th width="120px">住所</th>
    <th width="80px">電話番号</th>
    <th width="120px">メールアドレス</th>
    <th width="70px">どこで知ったか</th>
    <th width="60px">質問カテゴリ</th>
    <th width="120px">質問内容</th>
  </tr>

  <?php

  $csvfile = "question.csv";
  $counterfile = "counter.txt";

  if (file_exists($counterfile)){
    $fp = fopen( "counter.txt", "r+" ); // ファイル開く
    $myfile = fopen( "question.csv", "r" );

    $total = fgets( $fp, 100000 ); // 9桁分値読み取り
    $number = intval($total);

    fclose( $fp );

    for($i=0;$i<$number;$i++){

          $s1 = trim(fgets($myfile));
          $arr = explode(",", $s1);

         if($i % 2 !=0)
          echo "<tr class='qq'>";
         else
          echo "<tr class='rr'>";
          //ID番号
          echo "<td><b>";
          $no = $i +1;
          echo "$no";
          echo "</b></td>";
          //氏名
          echo "<td onmouseover='this.title=this.innerHTML'>";
          echo "$arr[0]" . " " . "$arr[1]";
          echo "</td>";
          //性別
          echo "<td>";
          echo " " . "$arr[2]";
          echo "</td>";
          //住所
          echo "<td onmouseover='this.title=this.innerHTML'>";
          echo "$arr[3]";
          echo "</td>";
          //電話番号
          echo "<td>";
          echo "$arr[4]" . "-" . "$arr[5]" . "-" . "$arr[6]";
          echo "</td>";
          //メールアドレス
          echo "<td onmouseover='this.title=this.innerHTML'>";
          echo "$arr[7]";
          echo "</td>";
          //どこで知ったか
          $where = $arr[8];
         if($where==0){
              echo "<td>";
              echo "未選択";
              echo "</td>";
         }
         else{
              echo "<td>";
              for($j=9;$j<$where+9;$j++){

                  echo "$arr[$j]";
                  if ($j<$arr[8]+8) {
                      echo "、";
                  }
              }
              echo "</td>";
         }
          //質問カテゴリ
          $q=$where + 9;
          echo "<td>";
          echo "$arr[$q]";
          echo "</td>";
          //質問内容
          $qw=$where + 10;
          echo "<td  onmouseover='this.title=this.innerHTML'>";
          echo "$arr[$qw]";
          echo "</td>";

          echo "</tr>";
    }
  }
  ?>
     </table>
     </div>
<div class= "ff">
     <input type="button" class="btn" onclick="location.href='task.html'" value="お問い合わせへ戻る" style="font-size: 15px;">
</div>
    </div>
    </div>
</body>

</html>
