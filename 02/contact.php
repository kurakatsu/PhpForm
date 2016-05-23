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
                    <td >お名前<div id = req>（必須）</req></td>
                    <td>姓: <input type="textbox" name="name1" placeholder="田中" required><br><br>
                        名: <input type="textbox" name="name2" placeholder="太郎" required>
                    </td>
                </tr>
                <tr>
                    <td>性別</td><td><label><input type="radio" name="rdo" value="1" checked>男</label>
                        <label><input type="radio" name="rdo" value="2">女</label>
                        <label><input type="radio" name="rdo" value="3">不明</label></td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td>〒<input type="textbox" name="y_num1" maxlength="3" placeholder="123" size="1"> -
                        <input type="textbox" name="y_num2" maxlength="4" placeholder="1241" size="1"><br>
                        <input type="textbox" name="address" placeholder="東京都なんちゃら"></td>
                </tr>
                <tr>
                    <td>電話番号</td><td><input type="textbox" name="num1" maxlength="4" size="4"> -
                        <input type="textbox" name="num2" maxlength="4" size="4"> -
                        <input type="textbox" name="num3" maxlength="4" size="4"></td>
                </tr>
                <tr>
                    <td>メールアドレス<div id = req>（必須）</req></td><td><input type="textbox" name="mail_1" placeholder="sanma0000" required> @
                        <input type="textbox" name="mail_2" placeholder="sasasas.co.jp" required></td>
                </tr>
                <tr>
                    <td>どこで知りましたか？</td>
                    <td>
                        <label><input type="checkbox" name="chk[]" value="1">雑誌</label>
                        <label><input type="checkbox" name="chk[]" value="2">Web</label>
                        <label><input type="checkbox" name="chk[]" value="3">友人</label>
                        <label><input type="checkbox" name="chk[]" value="4">その他</label></td>
                </tr>
                <tr>
                    <td>質問カテゴリ選択</td>
                    <td>
                        <select name="question">
                            <option value="0">選択してね</option>
                            <option value="1">商品について</option>
                            <option value="2">サービスについて</option>
                            <option value="3">イベントについて</option>
                            <option value="4">その他</option>
                        </select></td>
                </tr>
                <tr>
                    <td>質問内容<div id = req>（必須）</req></td>
                    <td><textarea cols="50" rows="10" name="area" placeholder="ご意見・ご感想など" required></textarea>
                    </td>
                </tr>
            </table>
            <div id=s_btn>
                <p><input id="submit_btn" type="submit"></p>
            </div>
        </form>
    </div>
</body>
</html>
