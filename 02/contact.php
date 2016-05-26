<?php
session_start();
$flag = 1;
$mailf = 1;
if(count($_POST) != 0){
    if($_POST["name1"] == ""){
        $flag = 0;
    }
    if($_POST["name2"] == ""){
        $flag = 0;
    }
    if($_POST["mail_1"] == ""){
        $mailf = 0;
    }
    if($_POST["mail_1"] == ""){
        $flag = 0;
    }
    if($_POST["area"] == ""){
        $flag = 0;
    }
    if($flag != 0 && $mailf != 0){
    $_SESSION["name1"] = $_POST["name1"];
    $_SESSION["name2"] = $_POST["name2"];
    $_SESSION["mail_1"] = $_POST["mail_1"];
    $_SESSION["mail_2"] = $_POST["mail_2"];
    $_SESSION["rdo"] = $_POST["rdo"];
    $_SESSION["y_num1"] = $_POST["y_num1"];
    $_SESSION["y_num2"] = $_POST["y_num2"];
    $_SESSION["address1"] = $_POST["address1"];
    $_SESSION["address2"] = $_POST["address2"];
    $_SESSION["num1"] = $_POST["num1"];
    $_SESSION["num2"] = $_POST["num2"];
    $_SESSION["num3"] = $_POST["num3"];
    if(isset($_SESSION)){
        foreach($_POST["chk"] as $key => $value){
            $_SESSION["chk"][$key] = $value;
        }
    }
    $_SESSION["chk[]"] = $_POST["chk[]"];
    $_SESSION["question"] = $_POST["question"];
    $_SESSION["area"] = $_POST["area"];
    header('location: result.php');
    exit();
}
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1><img src="otoi.png" width="400"alt="" /></h1>
    <form action="contact.php" autocomplete="off" method="POST">
        <div class = "clearfix" id= page>
            <div id = main>
                <div class = "name">
                    <div class="item">お名前
                        <div class = 'req'>（必須）
                        </div>
                    </div>
                </div>
                <div class = "rdo">
                    <div class="item">性別
                        <div class = 'any'>（任意）
                        </div>
                    </div>
                </div>
                <div class = "add">
                    <div class="item">住所
                        <div class = 'any'>（任意）
                        </div>
                    </div>
                </div>
                <div class = "number">
                    <div class="item">電話番号
                        <div class = 'any'>（任意）
                        </div>
                    </div>
                </div>
                <div class = "mail">
                    <div class="item">メールアドレス
                        <div class = 'req'>（必須）
                        </div>
                    </div>
                </div>
                <div class = "where">
                    <div class="item">どこで知りましたか？
                        <div class = 'any'>（任意）
                        </div>
                    </div>
                </div>
                <div class = "select">
                    <div class="item">質問カテゴリ選択
                        <div class = 'any'>（任意）
                        </div>
                    </div>
                </div>
                <div class = "value">
                    <div class="item">質問内容
                        <div class = 'req'>（必須）
                        </div>
                    </div>
                </div>
            </div>
            <div id = sub>
                    <div class = "name">
                        姓: <input type="textbox" name="name1" style="background-color:#EFEEF0;" placeholder="田中">
                                <?php
                                    if($flag == 0){
                                        echo "<span class='blank'>※未記入です</span>";
                                    }
                                 ?><br>
                        名: <input type="textbox" name="name2" style="background-color:#EFEEF0;" placeholder="太郎">
                        <?php
                            if($flag == 0){
                                echo "<span class='blank'>※未記入です</span>";
                            }
                         ?><br>
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
                        <input type="textbox" name="num1" maxlength="4" style="background-color:#EFEEF0;" placeholder="123" size="3" pattern="^[0-9]+$"> -
                        <input type="textbox" name="num2" maxlength="4" style="background-color:#EFEEF0;" placeholder="9999" size="3" pattern="^[0-9]+$"> -
                        <input type="textbox" name="num3" maxlength="4" style="background-color:#EFEEF0;" placeholder="9999" size="3" pattern="^[0-9]+$">
                        <div class = 'req'>※半角数字で記入してください</div><br>
                    </div>
                    <div class = "mail">
                        <input type="textbox" name="mail_1" style="background-color:#EFEEF0;" placeholder="sanma0000" > <span class='at'>@</span>
                        <input type="textbox" name="mail_2" style="background-color:#EFEEF0;" placeholder="sasasa.co.jp"  size="12" >
                        <?php
                            if($flag == 0 || $mailf == 0){
                                echo "<span class='blank'>※未記入です</span>";
                            }
                         ?>
                        <div class = 'req'>※半角英数字及び記号で記入してください</div><br>
                    </div>
                    <div class = "where">
                        <label><input type="checkbox" name="chk[]" value="1">雑誌</label>
                        <label><input type="checkbox" name="chk[]" value="2">Web</label>
                        <label><input type="checkbox" name="chk[]" value="3">友人</label>
                        <label><input type="checkbox" name="chk[]" value="4">その他</label><br>
                    </div>
                    <div class = "select">
                        <select name="question" style="background-color:#EFEEF0;">
                            <option value="0">選択してね</option>
                            <option value="1">授業について</option>
                            <option value="2">給食について</option>
                            <option value="3">登下校について</option>
                            <option value="4">その他</option>
                        </select><br>
                    </div>
                <div class = "value">
                    <textarea cols="55" rows="10" name="area" style="background-color:#EFEEF0;" placeholder="ご意見・ご感想など"  wrap="hard" ></textarea>
                    <?php
                        if($flag == 0){
                            echo "<br><span class='blank'>※未記入です</span>";
                        }
                     ?>
                </div>
            </div>
            <div id=s_btn>
                <input id="submit_btn" type="submit">
            </div>
        </div>
    </form>
</body>
</html>
