<?php
require 'db-connect.php';
$pdo=new PDO($connect,USER,PASS);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>選手一覧</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h1>プレミアリーグ選手一覧</h1>
<a href="menu.php">メニューに戻る</a>
<hr>

<?php
    //チーム別に選手名を取得
    $query = "SELECT club_name, player_name FROM player";
    echo "<h3>選手一覧</h3>";
    echo "<ul>";
    foreach($pdo->query($query) as $row){
        echo "<li>" . $row["club_name"] . " - " . $row["player_name"] . "</li>";
    };
    echo "</ul>";
    ?>
    
</body>
</html>