<?php
require 'db-connect.php';
$pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->query('select * from club');
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
<a href="select.php">選手一覧を見る</a>
<hr>
<form action="insert-output.php" method="post">
    選手名：<input type="text" name="player_name">
    <br>
    国籍：<input type="text" name="country_name">
    <br>
    所属クラブ：
    <select name="club_name">
<?php
    foreach($sql as $row){
        echo '<option value="',$row['club_id'],'">',$row['club_name'];
    }
?>
</select>
    <br>
    <button type="submit" name="action" value="send">登録する</button>
</form>
</body>
</html>