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
                    <td >お名前</td>
                    <td>姓: <input type="textbox" name="name1"><br><br>
                        名: <input type="textbox" name="name2">
                    </td>
                </tr>
                <tr>
                    <td>性別</td><td><label><input type="radio" name="rdo" value="1" checked>男</label>
                        <label><input type="radio" name="rdo" value="2">女</label>
                        <label><input type="radio" name="rdo" value="3">不明</label></td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td>〒<input type="textbox" maxlength="3" size="1"> -
                        <input type="textbox" maxlength="4" size="1"><br>
                        <input type="textbox" name="address"></td>
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
                        <input type="hidden" name="chk[]" value="0">
                        <label><input type="checkbox" name="chk[]" value="1">雑誌</label>
                        <label><input type="checkbox" name="chk[]" value="2">Web</label>
                        <label><input type="checkbox" name="chk[]" value="3">友人</label>
                        <label><input type="checkbox" name="chk[]" value="4">その他</label></td>
                </tr>
                <tr>
                    <td>質問カテゴリ選択</td><td>
                        <select name="question">
                            <option value="1">商品について</option>
                            <option value="2">サービスについて</option>
                            <option value="3">イベントについて</option>
                            <option value="4">その他</option>
                        </select></td>
                </tr>
                <tr>
                    <td>質問内容</td>
                    <td><textarea cols="50" rows="10" name="area">
                    </textarea></td>
                </tr>
            </table>
            <div id=s_btn>
                <p><input id="submit_btn" type="submit"></p>
            </div>
        </form>
    </div>
</body>
</html>
