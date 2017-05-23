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
}
.btn:hover {
background: #CF7A7A
}

.btn:active {
    position:relative;
    top:1px;
}


</style>
</head>

<body>
    <div class="dd">
     <h3>お問い合わせ一覧</h3>


     <table border="1">
  <tr>
    <th>No.</th>
    <th>氏名</th>
    <th>性別</th>
    <th>住所</th>
    <th>電話番号</th>
    <th>メールアドレス</th>
    <th>どこで知ったか</th>
    <th>質問カテゴリ</th>
    <th>質問内容</th>
  </tr>

  <?php
  $csvfile = "question.csv";
  $counterfile = "counter.txt";


  $fp = fopen( "counter.txt", "r+" ); // ファイル開く
  $myfile = fopen( "question.csv", "r" );

  $total = fgets( $fp, 100000 ); // 9桁分値読み取り
  $number = intval($total);

  fclose( $fp );

  for($i=0;$i<$number;$i++){

//      define('STDIN',fopen("question.csv","r"));

          $s1 = trim(fgets($myfile));
          $arr = explode(" ", $s1);
echo "<tr>";
echo "<td>";
$no = $i +1;
echo "$no";
echo "</td>";

echo "<td>";
echo "$arr[0]" . " " . "$arr[1]";
echo "</td>";

for($j=2;$j<4;$j++){

   echo "<td>";
   echo "$arr[$j]";
   echo "</td>";
}

echo "<td>";
echo "$arr[4]" . "-" . "$arr[5]" . "-" . "$arr[6]";
echo "</td>";

echo "<td>";
echo "$arr[7]";
echo "</td>";

   echo "</tr>";
  }



  ?>
</table>
 </div>
</body>

</html>
