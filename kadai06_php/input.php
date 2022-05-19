<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム</title>
</head>
<body>

<form method="POST" action="write.php">
    氏名 <input type="text" name="your_name">
    <br>
    性別
    <input type="radio" name="gender" value="男">男
    <input type="radio" name="gender" value="女">女
    <br>
    メールアドレス
    <input type="text" name="mail">
    <br>
    パスワード
    <input type="password" name="pass">
    <br>
    気にカテゴリーは？（複数選択可）<br>
    <label><input type="checkbox" name="favorite[]" value="車">車</label>
    <label><input type="checkbox" name="favorite[]" value="バイク">バイク</label>
    <label><input type="checkbox" name="favorite[]" value="自転車">自転車</label>
    <label><input type="checkbox" name="favorite[]" value="ベビー用品">ベビー用品</label>
    <label><input type="checkbox" name="favorite[]" value="マタニティーグッズ">マタニティーグッズ</label>
    <br>
    <br>
    <input type="submit" value="送信">


</form>

</body>
</html>
