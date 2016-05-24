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
                            echo "お名前<br>". htmlspecialchars($_POST["name1"]). " ". htmlspecialchars($_POST["name2"]). "<br>";
                    ?></li>
                    <li><?php
                            $gender_a = array("1" => "男", "2" => "女", "3" => "不明");
                            echo "性別<br>". $gender_a[$_POST["rdo"]]. "<br>";
                    ?></li>
                    <li><?php
                            if(isset($_POST["num1"]) == false || isset($_POST["num2"]) == false || isset($_POST["num3"]) == false){
                                echo "電話番号<br>未記入です<br>";
                            }else{
                            echo "電話番号<br>". htmlspecialchars($_POST["num1"], ENT_QUOTES). "-". htmlspecialchars($_POST["num2"], ENT_QUOTES). "-". htmlspecialchars($_POST["num3"]). "<br>";
                            }
                    ?></li>
                    <li><?php
                            if(isset($_POST["y_num1"]) == false || isset($_POST["y_num2"]) == false || isset($_POST["address"]) == false){
                                echo "住所<br>未記入です<br>";
                            }else{
                                echo "住所<br>". "〒 ". $_POST["y_num1"]. "-". $_POST["y_num2"]. "<br>";
                                echo htmlspecialchars($_POST["address"], ENT_QUOTES). "<br>";
                            }
                    ?></li>
                    <li><?php
                        echo "メールアドレス<br>". htmlspecialchars($_POST["mail_1"], ENT_QUOTES). htmlspecialchars("@". $_POST["mail_2"], ENT_QUOTES). "<br>";
                    ?></li>
                    <li><?php
                        echo "どこで知りましたか？<br>";
                    ?></li>
                    <?php
                        $count = 0;
                        $check_a = array("1" => "雑誌", "2" => "Web", "3" => "友人", "4" => "その他");
                        if(isset($_POST["chk"]) == false){
                            echo "未選択";
                        }else{
                            foreach($_POST["chk"] as $value){
                                if($count > 0){
                                    echo ", ";
                                }
                                echo $check_a[$value];
                                $count++;
                            }
                        }
                    ?>
                    <li><?php
                        $select_a = array("0" => "未選択です", "1" => "商品について", "2" => "サービスについて", "3" => "イベントについて", "4" => "その他");
                        echo "質問カテゴリ<br>". $select_a[$_POST["question"]]. "<br>";
                    ?></li>
                    <li><?php
                        echo "質問内容<br>";
                    ?></li>
                    <div id=box>
                    <?php
                        echo nl2br(htmlspecialchars($_POST["area"], ENT_QUOTES));
                        //さらに、, に続けて ENT_QUOTES と書くと、' （シングルクォート）も &#039; に変換されて返されます。
                        //この処理は、訪問者から送信されたデータを表示する際には必ず行うようにしてください。もしこの処理を忘れると、フォームから送信する際に入力されたHTMLやJavaScriptをそのまま解釈してしまいます。
                        //もし悪意あるJavaScriptが埋め込まれると訪問者全員に影響を与えてしまうため、それを防ぐためにも htmlspecialchars で安全な文字列に変換します。
                    ?>
                </div>
                </ul>
            </h2>
        </div>
    </body>
</html>
