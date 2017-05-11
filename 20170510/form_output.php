<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="task.css" type="text/css" />
</style>
</head>

<?php
echo "<h3>&nbsp;&nbsp;&nbsp;&nbsp;お問い合わせ</h3>" ;
echo "・" . "<b>名前：</b>" . $_POST['name1'] . "&nbsp" .$_POST['name2'];
echo "<br />" ;
echo "・" . "<b>性别：</b>" . $_POST['radiosex'];
echo "<br />";
echo "・" . "<b>住所：</b>" . $_POST['add'];
echo "<br />";
echo "・" . "<b>電話番号：</b>" . $_POST['tel1'],"-",$_POST['tel2'],"-",$_POST['tel3'];
echo "<br />";
echo "・" . "<b>メールアドレス：</b>" . $_POST['mail'];
echo "<br />";

echo "・" . "<b>どこで知った：</b>";
$checkbox = $_POST['checkbox'];

for($i=0;$i<count($checkbox);$i++){

        echo "{$checkbox[$i]} ";
        if ($i<count($checkbox)-1) {
            echo "、";
        }
}
echo "<br />";
echo "・" . "<b>質問カテゴリ：</b>" . $_POST['ques'];
echo "<br />";
echo "・" . "<b>質問内容：</b>" . "<br />" . "<div>"  . $_POST['content']  . "</div>";

?>
<br />
<br /><input type="button" name="Submit" onclick="javascript:history.back(-1);" value="未入力状態でお書き直します">
</html>
