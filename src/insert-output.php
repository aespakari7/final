<?php
require 'db-connect.php';
$pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->query('select * from player');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>選手登録</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h1>プレミアリーグ選手登録</h1>
<a href="menu.php">メニューに戻る</a>
<a href="insert.php">登録画面に戻る</a>
<hr>

<?php
$sql=$pdo->prepare('insert into player values(?,?,?)');
if($sql->execute([$_REQUEST['player_name'],$_REQUEST['country_name'],$_REQUEST['club_name']])){
    echo '登録しました。';
}else{
    echo '登録できませんでした。入力していない箇所があります。';
}
?>