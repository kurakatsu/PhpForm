<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>確認ページ</title>
        <link rel="stylesheet" href="r_style.css">
    </head>
    <body>
        <div id="word">
            <h1>入力内容をご確認ください</h1>
            <h2>
                <ul>
                    <li><?php
                        echo "お名前： ". $_POST["name1"]. " ". $_POST["name2"]. "<br>";
                    ?></li>
                    <li><?php
                        $gender_a = array("1" => "男", "2" => "女", "3" => "不明");
                        echo "性別： ". $gender_a[$_POST["rdo"]]. "<br>";
                    ?></li>
                    <li><?php
                        echo "電話番号<br>". $_POST["num1"]. "-". $_POST["num2"]. "-". $_POST["num3"]. "<br>";
                    ?></li>
                    <li><?php
                        echo "住所<br>". "〒 ". $_POST["y_num1"]. "-". $_POST["y_num2"]. "<br>";
                        echo $_POST["address"]. "<br>";
                    ?></li>
                    <li><?php
                        echo "メールアドレス<br>". $_POST["mail_1"]. "@". $_POST["mail_2"]. "<br>";
                    ?></li>
                    <li><?php
                        echo "どこで知りましたか？<br>";
                    ?></li>
                    <?php
                        $check_a = array("0" => "", "1" => "雑誌", "2" => "Web", "3" => "友人", "4" => "その他");
                        foreach($_POST["chk"] as $value){
                        echo $check_a[$value]. " ";
                    }
                    ?>
                    <?php
                        echo "<br>";
                    ?>
                    <li><?php
                        $select_a = array("1" => "商品について", "2" => "サービスについて", "3" => "イベントについて", "4" => "その他");
                        echo "質問カテゴリ<br>". $select_a[$_POST["question"]]. "<br>";
                    ?></li>
                    <li><?php
                        echo "質問内容<br>". $_POST["area"];
                    ?></li>
                </ul>
            </h2>
        </div>
    </body>
</html>
