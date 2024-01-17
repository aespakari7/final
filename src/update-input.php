<?php
require 'db-connect.php';
$pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('select * from player where player_name = ?');
    $sql->execute([$_GET['player_name']]);
    $row2 = $sql->fetch();
    $sql=$pdo->prepare('select * from club');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>選手情報の更新</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h1>選手情報の更新</h1>
<a href="menu.php">メニューに戻る</a>
<a href="insert.php">選手を登録する</a>
<a href="delete.php">選手情報を削除する</a>
<hr>
<form action="update-output.php" method="post">
    選手名：<input type="text" name="player_name" value="<?= $row2['player_name']?>">
    <br>
    国籍：<input type="text" name="country_name" value="<?= $row2['country_name']?>>
    <br>
    所属クラブ：
    <select name="club_name">
<?php
    foreach($sql as $row){
        $select ="";
        if( $row2['club_id'] == $row['club_id']){
            $select ="selected";
        }
        echo '<option value="',$row['club_id'],'" ',$selected,'>',$row['club_name'];
    }
?>
</select>
    <br>
    <button type="submit" name="action" value="send">更新する</button>
</form>
</body>
</html>