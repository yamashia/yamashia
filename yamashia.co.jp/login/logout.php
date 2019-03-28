<?php
session_start();

header("Content-type: text/html; charset=utf-8");

// ログイン状態のチェック
if (!isset($_SESSION["account"])) {
	header("Location: login_form.php");
	exit();
}

//セッション変数を全て解除
$_SESSION = array();

//セッションクッキーの削除
if (isset($_COOKIE["PHPSESSID"])) {
	setcookie("PHPSESSID", '', time() - 1800, '/');
}

//セッションを破棄する
session_destroy();

echo "<p>ログアウトしました。</p>";

echo "<a href='login_form.php'>ログイン画面へ</a>";
