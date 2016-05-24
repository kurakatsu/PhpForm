<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問合せページ</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>お問合せページ</h1>
    <form action="result.php" method="POST">
        <div class = "clearfix" id= page>
            <div id = main>
                <div class = "name"><h2>お名前<div id = req>（必須）</div></h2></div>
                <div class = "rdo"><h2>性別</h2></div>
                <div class = "add"><h2>住所</h2></div>
                <div class = "number"><h2>電話番号</h2></div>
                <div class = "mail"><h2>メールアドレス<div id = req>（必須）</div></h2></div>
                <div class = "where"><h2>どこで知りましたか？</h2></div>
                <div class = "select"><h2>質問カテゴリ選択</h2></div>
                <div class = "value"><h2>質問内容<div id = req>（必須）</div></h2></div>
            </div>
            <div id = sub>
                    <div class = "name">
                        姓: <input type="textbox" name="name1" style="background-color:#EFEEF0;" placeholder="田中" required><br><br>
                        名: <input type="textbox" name="name2" style="background-color:#EFEEF0;" placeholder="太郎" required><br>
                    </div>
                    <div class = "rdo">
                        <label><input type="radio" name="rdo" value="1" checked>男</label>
                        <label><input type="radio" name="rdo" value="2">女</label>
                        <label><input type="radio" name="rdo" value="3">不明</label><br>
                    </div>
                    <div class = "add">
                        <div id = addleft>
                            郵便番号<br>
                            都道府県・市区町村・番地<br>
                            アパート・マンション名等<br>
                        </div>
                        <div id = addright>
                            <input type="textbox" name="y_num1" style="background-color:#EFEEF0;" maxlength="3" placeholder="123" size="1"> -
                            <input type="textbox" name="y_num2" style="background-color:#EFEEF0;" maxlength="4" placeholder="1241" size="1"><br>
                            <input type="textbox" name="address1" style="background-color:#EFEEF0;" placeholder="東京都なんちゃら" size="30"><br>
                            <input type="textbox" name="address2" style="background-color:#EFEEF0;" placeholder="○×マンション" size="30"><br>
                        </div>
                    </div>
                    <div class = "number">
                        <input type="textbox" name="num1" maxlength="4" style="background-color:#EFEEF0;" placeholder="123" size="4"> -
                        <input type="textbox" name="num2" maxlength="4" style="background-color:#EFEEF0;" placeholder="9999" size="4"> -
                        <input type="textbox" name="num3" maxlength="4" style="background-color:#EFEEF0;" placeholder="9999" size="4"><br>
                    </div>
                    <div class = "mail">
                        <input type="textbox" name="mail_1" style="background-color:#EFEEF0;" placeholder="sanma0000" required> @
                        <input type="textbox" name="mail_2" style="background-color:#EFEEF0;" placeholder="sasasa.co.jp" required><br>
                    </div>
                    <div class = "where">
                        <input type="hidden" name=""chk[]" value="5">
                        <label><input type="checkbox" name="chk[]" value="1">雑誌</label>
                        <label><input type="checkbox" name="chk[]" value="2">Web</label>
                        <label><input type="checkbox" name="chk[]" value="3">友人</label>
                        <label><input type="checkbox" name="chk[]" value="4">その他</label><br>
                    </div>
                    <div class = "select">
                        <select name="question" style="background-color:#EFEEF0;">
                            <option value="0">選択してね</option>
                            <option value="1">商品について</option>
                            <option value="2">サービスについて</option>
                            <option value="3">イベントについて</option>
                            <option value="4">その他</option>
                        </select><br>
                    </div>
                <div class = "value">
                    <textarea cols="70" rows="10" name="area" style="background-color:#EFEEF0;" placeholder="ご意見・ご感想など" required></textarea>
                </div>
            </div>
            <div id=s_btn>
                <p><input id="submit_btn" type="submit"></p>
            </div>
        </div>
    </form>
</body>
</html>
