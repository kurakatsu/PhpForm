<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問合せページ</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id= page>
    <form action="result.php" method="POST">
        <table border="1">
            <caption><h1>お問合せページ</h1></caption>
        <tr>
        <td>姓</td><td><input type="textbox" name="name1"></td>
        </tr>
        <tr>
        <td>名</td><td><input type="textbox" name="name2"></td>
        </tr>
        <tr>
        <td>性別</td><td><label><input type="radio" name="rdo" value="男" checked>男</label>
            <label><input type="radio" name="rdo" value="女">女</label>
            <label><input type="radio" name="rdo" value="不明">不明</label></td>
        </tr>
        <tr>
        <td>住所</td><td><input type="textbox" name="address"></td>
        </tr>
        <tr>
        <td>電話番号</td><td><input type="textbox" name="num1" size="4"> -
            <input type="textbox" name="num2" size="4"> -
            <input type="textbox" name="num3" size="4"></td>
        </tr>
        <tr>
        <td>メールアドレス</td><td><input type="textbox" name="mail_1"> @
            <input type="textbox" name="mail_2"></td>
        </tr>
        <tr>
        <td>どこで知りましたか？</td><td>
            <label><input type="checkbox" name="chk[]" value="雑誌">雑誌</label>
            <label><input type="checkbox" name="chk[]" value="Web">Web</label>
            <label><input type="checkbox" name="chk[]" value="友人">友人</label>
            <label><input type="checkbox" name="chk[]" value="その他">その他</label></td>
        </tr>
        <tr>
        <td>質問カテゴリ選択</td><td>
            <select name="question">
                <option>商品について</option>
                <option>サービスについて</option>
                <option>イベントについて</option>
                <option>その他</option>
            </select></td>
        </tr>
        <tr>
        <td>質問内容</td>
            <td><textarea cols="50" rows="10" name="area">
            </textarea></td>
        </tr>
    </table>
        <input type="submit">
    </form>
</div>
</body>
</html>
