<?php
$pdo = new PDO('mysql:host=mysql;dbname=sample;charset=utf8', 'root', 'root');
//接続
if (!$pdo) {
    die('接続失敗: ' . $conn->connect_error);
}
//SQL文
$sql = 'SELECT * FROM sample_db';
$stmt = $pdo->prepare($sql);

//実行
$result = $stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!$result) {
    die('実行失敗: ' . $stmt->error);
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>helloworld</title>
</head>
<body>
    <h1>helloworld</h1>

    <?php
    foreach ($data as $row) {
        echo $row['id'] . ' ' . $row['name'] . '<br>';
    }
    ?>
</body>
</html>