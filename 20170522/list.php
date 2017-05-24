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

     <table border="1" align="center">
  <tr>
    <th width="20px">No.</th>
    <th width="100px">氏名</th>
    <th width="100px">性別</th>
    <th width="100px">住所</th>
    <th width="100px">電話番号</th>
    <th width="100px">メールアドレス</th>
    <th width="100px">どこで知ったか</th>
    <th width="100px">質問カテゴリ</th>
    <th width="100px">質問内容</th>
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

//      define('STDIN',fopen("question.csv","r"));

          $s1 = trim(fgets($myfile));
          $arr = explode(" ", $s1);

//ID番号
echo "<tr>";
echo "<td>";
$no = $i +1;
echo "$no";
echo "</td>";
//氏名
echo "<td>";
echo "$arr[0]" . " " . "$arr[1]";
echo "</td>";
//性別、住所
for($j=2;$j<4;$j++){

   echo "<td>";
   echo "$arr[$j]";
   echo "</td>";
}
//電話番号
echo "<td>";
echo "$arr[4]" . "-" . "$arr[5]" . "-" . "$arr[6]";
echo "</td>";
//メールアドレス
echo "<td>";
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
if($arr[$q] != NULL){
echo "$arr[$q]";
}
else echo "";
echo "</td>";
//質問内容
$qw=$where + 10;
echo "<td>";
echo "$arr[$qw]";
echo "</td>";
   echo "</tr>";
  }
}
  ?>
</table>
<br />
<input type="button" class="btn" onclick="location.href='task.html'" value="お問い合わせへ戻る">
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 </div>
</body>

</html>
