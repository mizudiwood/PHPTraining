<?php
echo "<h3>&nbsp;&nbsp;&nbsp;&nbsp;お問い合わせ</h3>" ;
echo "・" . "名前：" . $_POST['name1'] . "&nbsp" .$_POST['name2'];
echo "<br />" ;
echo "・" . "性别：" . $_POST['radiosex'];
echo "<br />";
echo "・" . "住所：" . $_POST['add'];
echo "<br />";
echo "・" . "電話番号：" . $_POST['tel1'],"-",$_POST['tel2'],"-",$_POST['tel3'];
echo "<br />";
echo "・" . "メールアドレス：" . $_POST['mail'];
echo "<br />";

echo "・" . "どこで知ったか：";
$checkbox = $_POST['checkbox'];

for($i=0;$i<count($checkbox);$i++){

        echo "{$checkbox[$i]} ";
        if ($i<count($checkbox)-1) {
            echo "、";
        }
}
echo "<br />";
echo "・" . "質問カテゴリ：" . $_POST['ques'];
echo "<br />";
echo "・" . "質問内容：" . "<br />" . "<div>"  . $_POST['content']  . "</div>";

?>
<br />
<br /><input type="button" name="Submit" onclick="javascript:history.back(-1);" value="未入力状態でお書き直します">
