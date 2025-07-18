<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
    function sort_2way($array, $order) {
        if($order) {
            echo '昇順にソートします。<br>';
            sort($array);
        } else {
            echo '降順にソートします。<br>';
            rsort($array);
        }
        foreach ($array as $num) {
            echo $num . '<br>';
        }
    }

    $nums = [15, 4, 18, 23, 10];  // 配列を関数の外部で定義
    sort_2way($nums, TRUE);  // 昇順ソート
    sort_2way($nums, FALSE); // 降順ソート

    ?>
    </p>
</body>

</html>