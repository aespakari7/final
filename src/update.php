<?php
require 'db-connect.php';
$pdo=new PDO($connect,USER,PASS);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>選手情報更新</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h1>選手情報の更新</h1>
<a href="menu.php">メニューに戻る</a>
<a href="insert.php">選手を登録する</a>
<a href="delete.php">選手情報を削除する</a>
<hr>
<form action="delete-output.php" method="post">
    <?php
    $query = "SELECT c.club_name club_name, player_name FROM player p , club c where p.club_name=c.club_id" ;
    echo "<ul>";
    foreach($pdo->query($query) as $row){
        echo "<li>" . $row["club_name"] . " - " . $row["player_name"] . '　<a href="update-input.php?id=',$row["player_name"],'">更新</a></li>';
    };
    echo "</ul>";
    ?>
</form>
</body>
</html>