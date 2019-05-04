<?php
session_start();

header("Content-type: text/html; charset=utf-8");

//クロスサイトリクエストフォージェリ（CSRF）対策
$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
$token = $_SESSION['token'];

//クリックジャッキング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');

?>

<!DOCTYPE html>
<html>
<head>
<title>ログイン画面</title>
<meta charset="utf-8">
</head>
<body>
<h1>ログイン画面</h1>

<form action="login_check.php" method="post">

<p>アカウント：<input type="text" name="account" size="50"></p>
<p>パスワード：<input type="text" name="password" size="50"></p>

<input type="hidden" name="token" value="<?=$token?>">
<input type="submit" value="ログインする">

</form>

</body>
</html>
