<?php
echo "姓名： ". $_POST["name1"]. " ". $_POST["name2"]. "<br>";
echo "性別： ". $_POST["rdo"]. "<br>";
echo "電話番号: ". $_POST["num1"]. "-". $_POST["num2"]. "-". $_POST["num3"]. "<br>";
echo "メールアドレス:". $_POST["mail_1"]. "@". $_POST["mail_2"]. "<br>";
echo "どこで知りましたか？<br>";
foreach($_POST["chk"] as $value){
    echo $value. ",";
}
echo "<br>";
echo "質問カテゴリ:". $_POST["question"]. "<br>";
echo "質問内容<br>". $_POST["area"];
?>
