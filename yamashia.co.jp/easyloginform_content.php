<?php
    // 認証を要求したいページの先頭に以下を記述する
    require_once './easyloginform_login.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>簡単なログインフォームを作成したい</title>
<style>
.container {
width: 100%;
    text-align: center;
}
</style>
</head>
<body>
<div class="container">
<div>
<p><?php echo h($_SESSION['username']); ?>さんいらっしゃい！</p>
<p>ログインした方のみ閲覧できます！</p>
<p><a href="easyloginform_logout.php">ログアウトする</a></p>
</div>
</body>
</html>
