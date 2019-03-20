//ログアウト処理をするスクリプト

<?
// セッションを開始
session_start();
// セッションを破棄
$_SESSION = array();
session_destroy();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログアウト</title>
    <style>
        .container {
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <p>ログアウトしました</p>
        <p><a href="easyloginform_content.php">戻る</a></p>
    </div>
</body>
</html>