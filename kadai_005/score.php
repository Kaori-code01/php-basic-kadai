<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題_005</title>
</head>

<body>

 <!-- PHPの埋め込み -->
<?php
$numbers = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

// 配列の要素の合計を求める
$sum = array_sum($numbers);

// 配列の要素数を求める
$count = count($numbers);

// 平均値を計算する
$average = $sum / $count;

// 平均値を表示する
echo "平均値: " . $average;
?>

<body>
  
</html>



