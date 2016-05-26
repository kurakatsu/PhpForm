<?php
session_start();
 ?>
 
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
        <div id="word2">
            <ul>
                <li>
                <?php
                    if($_SESSION["name1"] == "" || $_SESSION["name2"] == "" || preg_match("/^[\s　]+$/", $_SESSION["name1"]) || preg_match("/^[\s　]+$/", $_SESSION["name2"])){
                        echo "お名前<br>". "未記入です<br>";
                    }else{
                        echo "お名前<br>". htmlspecialchars($_SESSION["name1"]). " ". htmlspecialchars($_SESSION["name2"]). "<br>";
                    }
                ?>
                </li>
                <li>
                <?php
                    $gender_a = array("1" => "男", "2" => "女", "3" => "不明");
                    echo "性別<br>". $gender_a[$_SESSION["rdo"]]. "<br>";
                ?>
                </li>
                <li>
                <?php
                    if(($_SESSION["num1"]) == "" || ($_SESSION["num2"]) == "" || ($_SESSION["num3"]) == "" ||
                        preg_match("/^[\s　]+$/", $_SESSION["num1"]) || preg_match("/^[\s　]+$/", $_SESSION["num2"]) || preg_match("/^[\s　]+$/", $_SESSION["num3"])){
                        echo "電話番号<br>未記入です<br>";
                    }else{
                        echo "電話番号<br>". htmlspecialchars($_SESSION["num1"], ENT_QUOTES). "-". htmlspecialchars($_SESSION["num2"], ENT_QUOTES). "-". htmlspecialchars($_SESSION["num3"]). "<br>";
                    }
                ?>
                </li>
                <li>
                <?php
                    if($_SESSION["y_num1"] == "" || $_SESSION["y_num2"] == "" || $_SESSION["address1"] == "" ||
                        preg_match("/^[\s　]+$/", $_SESSION["y_num1"]) || preg_match("/^[\s　]+$/", $_SESSION["y_num2"]) ||
                         preg_match("/^[\s　]+$/", $_SESSION["address1"])){
                        echo "住所<br>未記入です<br>";
                    }else{
                        echo "住所<br>". "〒 ". $_SESSION["y_num1"]. "-". $_SESSION["y_num2"]. "<br>";
                        echo htmlspecialchars($_SESSION["address1"], ENT_QUOTES). " ". htmlspecialchars($_SESSION["address2"], ENT_QUOTES). "<br>";
                    }
                ?>
                </li>
                <li>
                <?php
                    if($_SESSION["mail_1"] == "" || $_SESSION["mail_2"] == "" || preg_match("/^[\s　]+$/", $_SESSION["mail_1"]) || preg_match("/^[\s　]+$/", $_SESSION["mail_2"])){
                        echo "メールアドレス<br>未記入です<br>";
                    }else{
                        echo "メールアドレス<br>". htmlspecialchars($_SESSION["mail_1"], ENT_QUOTES). htmlspecialchars("@". $_SESSION["mail_2"], ENT_QUOTES). "<br>";
                    }
                ?>
                </li>
                <li>
                <?php
                    echo "どこで知りましたか？<br>";
                ?>
                </li>
                <?php
                    $count = 0;
                    $check_a = array("1" => "雑誌", "2" => "Web", "3" => "友人", "4" => "その他");
                    if(isset($_SESSION["chk"]) == false){
                        echo "未選択です";
                    }else{
                        foreach($_SESSION["chk"] as $value){
                            if($count > 0){
                                echo ", ";
                            }
                            echo $check_a[$value];
                            $count++;
                        }
                    }
                ?>
                <li>
                    <?php
                    $select_a = array("0" => "未選択です", "1" => "商品について", "2" => "サービスについて", "3" => "イベントについて", "4" => "その他");
                    echo "質問カテゴリ<br>". $select_a[$_SESSION["question"]]. "<br>";
                ?>
                </li>
                <li>
                <?php
                    echo "質問内容<br>";
                ?>
                </li>
            </ul>
        </div>
        <div id=box>
            <div id="word3">
                <?php
                    if($_SESSION["area"] == "" || preg_match("/^[\s　]+$/", $_SESSION["area"])){
                        echo "記入内容がありません";
                    }else{
                        echo nl2br(htmlspecialchars($_SESSION["area"], ENT_QUOTES));
                        //さらに、, に続けて ENT_QUOTES と書くと、' （シングルクォート）も &#039; に変換されて返されます。
                        //この処理は、訪問者から送信されたデータを表示する際には必ず行うようにしてください。もしこの処理を忘れると、フォームから送信する際に入力されたHTMLやJavaScriptをそのまま解釈してしまいます。
                        //もし悪意あるJavaScriptが埋め込まれると訪問者全員に影響を与えてしまうため、それを防ぐためにも htmlspecialchars で安全な文字列に変換します。
                    }
                ?>
            </div>
        </div>
    </div>
    <?php
        date_default_timezone_set('Asia/Tokyo');
        $count = 0;
        $filename = "contact_log.txt";
        $current = file_get_contents($filename);
        $current .= date('Y.m.d  H:i:s  D'). "\n";
        $current .= "名前\n". $_SESSION["name1"]. " ". $_SESSION["name2"]. "\n";
        $current .= "性別\n". $gender_a[$_SESSION["rdo"]]. "\n";
        $current .= "住所\n". "〒". $_SESSION["y_num1"]. "-". $_SESSION["y_num2"]. "\n";
        $current .= htmlspecialchars($_SESSION["address1"], ENT_QUOTES). " ". htmlspecialchars($_SESSION["address2"], ENT_QUOTES). "\n";
        $current .= "電話番号\n". htmlspecialchars($_SESSION["num1"], ENT_QUOTES). "-". htmlspecialchars($_SESSION["num2"], ENT_QUOTES). "-". htmlspecialchars($_SESSION["num3"]). "\n";
        $current .= "メールアドレス\n". htmlspecialchars($_SESSION["mail_1"], ENT_QUOTES). htmlspecialchars("@". $_SESSION["mail_2"], ENT_QUOTES). "\n";
        $current .= "どこで知りましたか？\n";
        if(isset($_SESSION["chk"]) == false){
            $current .= "未選択";
        }else{
            foreach($_SESSION["chk"] as $value){
                if($count > 0){
                    $current .= ", ";
                }
                $current .= $check_a[$value];
                $count++;
            }
        }
        $current .= "\n";
        $current .= "質問カテゴリ\n". $select_a[$_SESSION["question"]]. "\n";
        $current .= "質問内容\n". htmlspecialchars($_SESSION["area"], ENT_QUOTES). "\n\n";
        file_put_contents($filename, $current);
     ?>
</body>
</html>
