<h3>&nbsp;&nbsp;&nbsp;&nbsp;お問い合わせ</h3>

<form action="form_output.php" method="get">

姓 <input type="textbox" name="name1" required><br />
名 <input type="textbox" name="name2" required><br />
性别 <input type="radio" value="男" name="radiosex" checked="checked">男
<input type="radio" value="女" name="radiosex">女
<input type="radio" value="不明" name="radiosex">不明<br />
住所 <input type="textbox" name="add" style="width:260px"><br />
電話番号 <input size="5" type="tel" name="tel1" required> -
<input size="7" type="tel" name="tel2" required> -
<input size="7" type="tel" name="tel3" required ><br />
メールアドレス <input type="textbox" name="mail1" style="width:80px" required>＠
<input type="textbox" name="mail2" style="width:80px" required><br />
どこで知ったか　<input type="checkbox" name="checkbox1">雑誌
<input type="checkbox" name="checkbox2">新聞<br />
質問カテゴリ <input type="textbox" name="ques"><br />
<br />
質問内容<br />
<textarea name="ques" style="width:300px; height:200px;">内容を入力してください。</textarea><br />
<br /><input type="reset">&nbsp;&nbsp;&nbsp;<input type="submit">

</form>
