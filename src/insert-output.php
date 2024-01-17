<?php
require 'db-connect.php';
$pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->query('select * from player');
?>

<?php
$sql=$pdo->prepare('insert into player values(?,?,?)');
if($sql->execute([$_REQUEST['player_name'],$_REQUEST['country_name'],$_REQUEST['club_name']])){
    echo '登録しました。';
}else{
    echo '登録できませんでした。入力していない箇所があります。';
}
?>