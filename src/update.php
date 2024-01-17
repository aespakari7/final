<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>選手情報更新</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h1>選手情報更新</h1>
<a href="menu.php">メニューに戻る</a>
<a href="insert.php">選手を追加する</a>
<a href="delete.php">選手情報を削除する</a>
<hr>
<form action="player-update-result.php" method="post">
    <button type="submit" name="update-result">更新する</button>

    <p>
        <input type="radio" name="player_id" value=26>26 : j : j
    </p>
    <p>
        <input type="radio" name="player_id" value=38>38 : ひとりごつ : かわだだいち
    </p>
    <p>
        <input type="radio" name="player_id" value=39>39 : ｓ : ｓ
    </p>

</form>
</body>
</html>