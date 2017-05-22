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
//     echo "$checkbox" . "<br>";

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


 <form action="csv.php" method="get">
 <input name="name1" type="hidden" value="<?php echo $_POST['name1']; ?>">
 <input name="name2" type="hidden" value="<?php echo $_POST['name2']; ?>">
 <input name="radiosex" type="hidden" value="<?php echo $_POST['radiosex']; ?>">
 <input name="add" type="hidden" value="<?php echo $_POST['add']; ?>">
 <input name="tel1" type="hidden" value="<?php echo $_POST['tel1']; ?>">
 <input name="tel2" type="hidden" value="<?php echo $_POST['tel2']; ?>">
 <input name="tel3" type="hidden" value="<?php echo $_POST['tel3']; ?>">
 <input name="mail" type="hidden" value="<?php echo $_POST['mail']; ?>">

 <input name="checkbox" type="hidden" value=" ">

 <input name="ques" type="hidden" value="<?php echo $_POST['ques']; ?>">
 <input name="content" type="hidden" value="<?php echo $_POST['content']; ?>">

 &nbsp;&nbsp;&nbsp;<input type="submit" class="btn"></button>
&nbsp;&nbsp;&nbsp;<input type="button" class="btn" onclick="javascript:history.back(-1);" value="戻る">

</form>
<br /><br />
</div>
</body>


</html>
