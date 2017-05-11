<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--cssを使う-->
<link rel="stylesheet" href="form.css" type="text/css" />
</style>
</head>

<body>
<div class="bb">
 <h3>お問い合わせ</h3>
 <b>・名前：</b>  <?php echo $_POST['name1']; ?> &nbsp <?php echo $_POST['name2'];?>
  <br />
 <b>・性别：</b>  <?php echo $_POST['radiosex'];?>
  <br />
 <b>・住所：</b>  <?php echo $_POST['add'];?>
  <br />
 <b>・電話番号：</b>  <?php echo $_POST['tel1'],"-",$_POST['tel2'],"-",$_POST['tel3'];?>
  <br />
 <b>・メールアドレス：</b>  <?php echo $_POST['mail'];?>
  <br />

 <b>・どこで知った：</b>
 <?php

 if(isset($_POST['checkbox'])){
     $checkbox = $_POST['checkbox'];

     for($i=0;$i<count($checkbox);$i++){

             echo "{$checkbox[$i]} ";
             if ($i<count($checkbox)-1) {
                 echo "、";
             }
     }
 }
 else {
     echo "不明";
 }

?>
  <br />
 <b>・質問カテゴリ：</b>  <?php echo $_POST['ques'];?>
  <br />
 <b>・質問内容：</b>
 <br />
 <div class="aa">  <?php echo $_POST['content'] ?></div>

<br />
&nbsp;&nbsp;&nbsp;<input type="button" name="Submit" onclick="javascript:history.back(-1);" value="書き直す">
<br /><br />
</div>
</body>
</html>
