<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>確認ページ</title>
        <link rel="stylesheet" href="r_style.css">
    </head>
    <body>
        <div id="word">
            <?php
                echo "姓名： ". $_POST["name1"]. " ". $_POST["name2"]. "<br>";
                $gender_a = array("1" => "男", "2" => "女", "3" => "不明");
                echo "性別： ". $gender_a[$_POST["rdo"]]. "<br>";
                echo "電話番号: ". $_POST["num1"]. "-". $_POST["num2"]. "-". $_POST["num3"]. "<br>";
                echo "メールアドレス:". $_POST["mail_1"]. "@". $_POST["mail_2"]. "<br>";
                echo "どこで知りましたか？<br>";
                $check_a = array("0" => "", "1" => "雑誌", "2" => "Web", "3" => "友人", "4" => "その他");
                foreach($_POST["chk"] as $value){
                    echo $check_a[$value]. ",";
                }
                echo "<br>";
                $select_a = array("1" => "商品について", "2" => "サービスについて", "3" => "イベントについて", "4" => "その他");
                echo "質問カテゴリ<br>". $select_a[$_POST["question"]]. "<br>";
                echo "質問内容<br>". $_POST["area"];
            ?>
        </div>
    </body>
</html>
