<?php
require 'db-connect.php';
$pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->query('select * from club');
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
    $query = "SELECT team, player_name FROM players";
    $result = $pdo->query($query);

    // データが存在する場合に表示
    if ($result->num_rows > 0) {
        echo "<h3>選手一覧</h3>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row["team"] . " - " . $row["player_name"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "選手が登録されていません";
    }
    ?>
    
</body>
</html>