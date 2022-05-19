<?php
//フォームの中身を受け取る
$your_name = $_POST['your_name'];
$gender = $_POST['gender'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];

echo "選択された値 <br>";
if(isset($_POST['favorite'])) {
  foreach($_POST['favorite'] as  $key => $value) {
    echo $key . ": " .htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . "<br>";
  }
}
?>


// 記入時間
$time = date('Y/m/d H:i:s');

//ファイルオープン
$file = fopen('data/data.txt','a');

// ファイルに書き込み
 fwrite($file, $time. $your_name. $gender . $mail . $pass . $favorite . "\n");

//ファイルの保存
fclose($file);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
