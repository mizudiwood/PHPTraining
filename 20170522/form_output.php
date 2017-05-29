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
    text-align: center;
    margin:0px 5px 0px 15px;

/*Transition*/
    -webkit-transition: -webkit-box-shadow 0.5s ease-out;;
    -moz-transition: -moz-box-shadow 0.5s ease-out;
    -o-transition: box-shadow 0.5s ease-out;
}
.btn:hover {
    background: #CF7A7A
    -moz-box-shadow: 0px 0px 15px #0099ff;
    -webkit-box-shadow: 0px 0px 15px #0099ff;
    box-shadow: 0px 0px 15px #0099ff;
}

.btn:active {
    position:relative;
    top:1px;
}

</style>

</head>

<body>
    <div id = "animate-area">
<div class="bb">

 <h3>お問い合わせ</h3>

 <div class="ee"><b>・名前：</b> <?php echo $_POST['name1']; ?> &nbsp <?php echo $_POST['name2'];?></div>

 <div class="ee"><b>・性别：</b> <?php echo $_POST['radiosex'];?></div>

 <div class="ee"><b>・住所：</b> <?php echo $_POST['add'];?></div>

 <div class="ee"><b>・電話番号：</b> <?php echo $_POST['tel1'],"-",$_POST['tel2'],"-",$_POST['tel3'];?></div>

 <div class="ee"><b>・メールアドレス：</b> <?php echo $_POST['mail'];?></div>

 <div class="ee" ><b>・どこで知った：</b>
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

?></div>

 <div class="ee"><b>・質問カテゴリ：</b>  <?php echo $_POST['ques'];?></div>

 <div class="ee"><b>・質問内容：</b>

 <div class="aa">  <?php echo $_POST['content'] ?></div>
</div>
 <br />

<!--パラメーター送信-->
 <form action="csv.php" method="get">
 <input name="name1" type="hidden" value="<?php echo $_POST['name1']; ?>">
 <input name="name2" type="hidden" value="<?php echo $_POST['name2']; ?>">
 <input name="radiosex" type="hidden" value="<?php echo $_POST['radiosex']; ?>">
 <input name="add" type="hidden" value="<?php echo $_POST['add']; ?>">
 <input name="tel1" type="hidden" value="<?php echo $_POST['tel1']; ?>">
 <input name="tel2" type="hidden" value="<?php echo $_POST['tel2']; ?>">
 <input name="tel3" type="hidden" value="<?php echo $_POST['tel3']; ?>">
 <input name="mail" type="hidden" value="<?php echo $_POST['mail']; ?>">

<?php
 if(isset($_POST['checkbox'])){
     $checkbox = $_POST['checkbox'];
//     echo "$checkbox" . "<br>";
     if(count($checkbox)==1){
         $a = "1" . "," . "$checkbox[0]";
     }
     if(count($checkbox)==2){
         $a = "2" . "," . "$checkbox[0]" . "," . "$checkbox[1]";
     }
 }
 else{
     $a = 0 ;
 }
?>

 <input type="hidden" name="a" value="<?php echo $a; ?>">

 <input name="ques" type="hidden" value="<?php echo $_POST['ques']; ?>">
 <input name="content" type="hidden" value="<?php echo $_POST['content']; ?>">

 <input type="submit" class="btn"></button>
 <input type="button" class="btn" onclick="javascript:history.back(-1);" value="戻る">

</form>
</div>
</div>
</body>

</html>
