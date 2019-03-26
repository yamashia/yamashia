<?php
    session_start();
    //ログイン済みかを確認
    if (isset($_SESSION['USER'])) {
        header('Location: top.php');
        exit;
    }

    //ログイン機能
    $message = '';
    if(isset($_POST['login'])){
        if ($_POST['username'] == 'sddbMTI5NTE3' && $_POST['password'] == '#R1e2p3o4'){ // ③
            $_SESSION["USER"] = 'user';
            header("Location: top.php");
            exit;
        }
        else{
            $message = 'ユーザーネームかパスワードが間違っています。';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>ログイン機能</title>
</head>
<body>
<h1>ログイン機能</h1>
<p style="color: red"><?php echo $message ?></p>
<form method="post" action="login.php">
    <label for="username">ユーザーネーム</label>
    <input id="username" type="username" name="username">
    <br>
    <label for="password">パスワード</label>
    <input id="password" type="password" name="password">
    <br>
    <input type="submit" name="login" value="ログイン">
</form>
</body>
</html>
