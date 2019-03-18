<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>HTMLでのエスケープ処理をする関数</title>
</head>
<body>
<?php
    
    //HTMLでのエスケープ処理をする関数
    function h($var) {
        // is_array() -> $varが配列かどうかを調べる
        // $varが配列だったら・・・
        if (is_array($var)) {
            // array_map() -> 配列の各要素に対して指定した関数を実行する
            // array_map('コールバック関数名',配列)
            return array_map('h', ($var));
            // $varが配列じゃなかったら・・・
        } else {
            // フォームなどからのユーザーのデータをブラウザに表示する場合は、
            // 原則すべてのデータにhtmlspecialchars関数を使用する。
            // ENT_QUOTES -> クオートを変換する
            return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
        }
    }
    
    ?>
</body>
</html>
