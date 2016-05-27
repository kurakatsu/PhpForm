<?php
session_start();
$flag = array('name1' => '1', 'name2' => '1', 'num' => '1', 'mail' => '1', 'area' => '1');
$value_array = array('name1' => "", 'name2' => "", 'num1' => "", 'num2' => "", 'num3' => "", 'mail_1' => "", 'mail_2' => "", 'area' => "");
$num_req = "";
$name1_req = "";
$name2_req = "";
$mail_req = "";
$area_req = "";
if(count($_POST) != 0){
    if($_POST["num1"] == "" ||  $_POST["num2"] == "" ||  $_POST["num3"] == ""){
        $num_req = "※未入力です";
        $flag['num'] = 0;
    }elseif(!preg_match('/^[0-9]+$/', $_POST["num1"]) || !preg_match('/^[0-9]+$/', $_POST["num2"]) || !preg_match('/^[0-9]+$/', $_POST["num3"])){
        $num_req = "※半角数字ではありません";
        $flag['num'] = 0;
    }else{
        $value_array['num1'] = $_POST['num1'];
        $value_array['num2'] = $_POST['num2'];
        $value_array['num3'] = $_POST['num3'];
    }
    if($_POST["name1"] == "" ){
        $name1_req = "※未入力です";
        $flag['name1'] = 0;
        $value_array['name1'] = "";
    }else{
        $value_array['name1'] = $_POST['name1'];
    }
    if($_POST["name2"] == ""){
        $name2_req = "※未入力です";
        $flag['name2'] = 0;
        $value_array['name2'] = "";
    }else{
        $value_array['name2'] = $_POST['name2'];
    }
    if($_POST["mail_1"] == "" || $_POST["mail_2"] == ""){
        $mail_req = "※未入力です";
        $flag['mail'] = 0;
        $value_array['mail'] = "";
    }elseif(!preg_match('/^[a-z]+\.[a-z]+\.*[a-z]*$/', $_POST["mail_2"])){
        $mail_req = '※形式が違います';
        $flag['mail'] = 0;
    }else{
        $value_array['mail_1'] = $_POST['mail_1'];
        $value_array['mail_2'] = $_POST['mail_2'];
    }
    if($_POST["area"] == ""){
        $area_req = "※未入力です";
        $flag['area'] = 0;
        $value_array['area'] = "";
    }else{
        $value_array['area'] = $_POST['area'];
    }
    if(min($flag) != 0){
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
                        <div class = 'req'>（必須）
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
                        姓: <input type="textbox" name="name1" placeholder="田中" value="<?php echo $value_array['name1']; ?>">
                                <?php
                                    if($flag['name1'] == 0){
                                        echo "<span　class='blank'>". $name1_req. "</span>";
                                    }
                                 ?><br>
                        名: <input type="textbox" name="name2" placeholder="太郎" value="<?php echo $value_array['name2']; ?>">
                            <?php
                                if($flag['name2'] == 0){
                                    echo "<span　class='blank'>". $name2_req. "</span>";
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
                            <input type="textbox" name="y_num1" maxlength="3" placeholder="123" size="1"> -
                            <input type="textbox" name="y_num2" maxlength="4" placeholder="1241" size="1"><br>
                            <input type="textbox" name="address1" placeholder="東京都なんちゃら" size="30"><br>
                            <input type="textbox" name="address2" placeholder="○×マンション" size="30"><br>
                        </div>
                    </div>
                    <div class = "number">
                        <input type="textbox" name="num1" maxlength="4" placeholder="123" size="3" value="<?php echo $value_array['num1']; ?>"> -
                        <input type="textbox" name="num2" maxlength="4" placeholder="9999" size="3" value="<?php echo $value_array['num2']; ?>"> -
                        <input type="textbox" name="num3" maxlength="4" placeholder="9999" size="3" value="<?php echo $value_array['num3']; ?>">
                        <?php
                        if($flag['num'] == 0){
                            echo "<span　class='blank'>". $num_req. "</span>";
                        }
                         ?>
                        <div class = 'req'>※半角数字で記入してください</div><br>
                    </div>
                    <div class = "mail">
                        <input type="textbox" name="mail_1" placeholder="sanma0000" value="<?php echo $value_array['mail_1']; ?>">
                        <span class='at'>@</span>
                        <input type="textbox" name="mail_2" placeholder="sasasa.co.jp"  size="12" value="<?php echo $value_array['mail_2']; ?>">
                        <?php
                            if($flag['mail'] == 0){
                                echo "<span　class='blank'>". $mail_req. "</span>";
                            }
                         ?>
                        <div class = 'req'>※半角英数字及び記号で記入してください</div><br>
                    </div>
                    <div class = "where">
                        <label><input type="checkbox" name="chk[]" value="1">配布物</label>
                        <label><input type="checkbox" name="chk[]" value="2">連絡網</label>
                        <label><input type="checkbox" name="chk[]" value="3">子供</label>
                        <label><input type="checkbox" name="chk[]" value="4">その他</label><br>
                    </div>
                    <div class = "select">
                        <select name="question"
                            <option value="0">選択してね</option>
                            <option value="1">授業について</option>
                            <option value="2">給食について</option>
                            <option value="3">登下校について</option>
                            <option value="4">その他</option>
                        </select><br>
                    </div>
                <div class = "value">
                    <textarea cols="55" rows="10" name="area" placeholder="ご意見・ご感想など"  wrap="hard"><?php echo $value_array['area']; ?></textarea>
                    <?php
                        if($flag['area'] == 0){
                            echo "<span　class='blank'>". $area_req. "</span>";
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
