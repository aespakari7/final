<?php
require 'db-connect.php';
$pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->query('select * from club');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>選手情報削除</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>選手情報の削除</h2>
<a href="menu.php">メニューに戻る</a>
<a href="insert.php">選手を登録する</a>
<a href="update.php">選手情報を更新する</a>
<hr>
<form action="player-delete-result.php" method="post">
    <button type="submit" name="delete-result">削除</button>
    <p>
        <input type="checkbox" name="songarray[]" value=26>26 : j : j
    </p>
    <p>
        <input type="checkbox" name="songarray[]" value=38>38 : ひとりごつ : かわだだいち
    </p>
    <p>
        <input type="checkbox" name="songarray[]" value=39>39 : ｓ : ｓ
    </p>
</form>
</body>
</html>