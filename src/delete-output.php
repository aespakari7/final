<?php
require 'db-connect.php';
$pdo=new PDO($connect,USER,PASS);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>選手情報の削除</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h1>選手情報の削除</h1>
<a href="menu.php">メニューに戻る</a>
<a href="select.php">選手一覧をみる</a>
<a href="insert.php">選手を登録する</a>
<a href="update.php">選手情報を更新する</a>
<a href="delete.php">もう一度選手情報を削除する</a>
<hr>

<?php
$sql=$pdo->prepare('delete from player where player_name=?');
if($sql->execute([$_REQUEST['id']])){
    echo '削除しました。';
}
?>