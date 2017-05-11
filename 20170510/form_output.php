<?php

echo $_GET['name1'];
echo $_GET['name2'];
echo "<br />";
echo $_GET['radiosex'];
echo "<br />";
echo $_GET['add'];
echo "<br />";
echo $_GET['tel1'],"-",$_GET['tel2'],"-",$_GET['tel3'];
echo "<br />";
echo $_GET['mail'];
echo "<br />";

$checkbox = $_POST['checkbox'];
　　　　　

//$checkbox[] = $_POST['checkbox[]'];
for($i=0; $i<<count($checkbox); $i++){
    echo $checkbox[$i];
}


?>
<br />
<br /><input type="button" name="Submit" onclick="javascript:history.back(-1);" value="未入力状態でお書き直します">
