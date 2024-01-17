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
<form action="delete-output.php" method="post">
    <?php
    $query = "SELECT c.club_name club_name, player_name FROM player p , club c where p.club_name=c.club_id" ;
    echo "<ul>";
    foreach($pdo->query($query) as $row){
        echo "<li>" . $row["club_name"] . " - " . $row["player_name"] . '　<a href="delete-input.php?id=',$row["player_name"],'">削除</a></li>';
    };
    echo "</ul>";
    ?>
</body>
</html>