<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問合せページ</title>
</head>
<body>
    <form action="result.php" method="POST">
        姓：<input type="textbox" name="name1">
        <br>
        名：<input type="textbox" name="name2">
        <br>
        性別：<input type="radio" name="rdo" value="男" checked>男
            <input type="radio" name="rdo" value="女">女
            <input type="radio" name="rdo" value="不明">不明
        <br>
        住所：<input type="textbox" name="address">
        <br>
        電話番号：<input type="textbox" name="num1" size="4"> -
            <input type="textbox" name="num2" size="4"> -
            <input type="textbox" name="num3" size="4">
            <br>
            メールアドレス：<input type="textbox" name="mail_1"> @
                <input type="textbox" name="mail_2">
                <br>
                どこで知りましたか？<br>
                <input type="checkbox" name="chk[]" value="雑誌">雑誌
                <input type="checkbox" name="chk[]" value="Web">Web
                <input type="checkbox" name="chk[]" value="友人">友人
                <input type="checkbox" name="chk[]" value="その他">その他
                <br>
                質問カテゴリ選択：
                <select name="question">
                    <option>商品について</option>
                    <option>サービスについて</option>
                    <option>イベントについて</option>
                    <option>その他</option>
                </select>
                <br>
                質問内容<br>
                <textarea cols="50" rows="10" name="area">
                </textarea>
                <br>
                <input type="submit">
            </form>
        </body>
</html>
