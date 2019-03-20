<!-- このファイルは単体では機能しません。ログイン機能を付与したいページにrequire_once();で呼び起こして使用します。今回の場合は、easyloginform_content.phpにてrequire_once()関数を使用してこのファイルを呼び起こしています。 -->
<?php 

// HTMLでのエスケープ処理をする関数を呼び出す（ファイルは[こちらの記事](https://qiita.com/t_kawai/items/7857c37daaa002b1cc70)で作成しています。）
require_once 'h.php' ;

// password_verify()関数を読み込む 大体の人の環境ではおそらく不要なので省略。(PHP 5 ＞= 5.5.0, PHP 7では標準で使用できる)詳しくはググってください

// クリックジャッキング対策をする
// クリックジャッキングとは、視覚的な錯誤を利用して、
// ユーザーの意図とは別のものをクリックさせる受動的攻撃手法
header('X-FRAME-OPTIONS: SAMEORIGIN');

// セッションを開始
// 
session_start();

// 一人目のユーザーの登録
// ユーザー名とパスワードを設定。
// 複数名分の指定ができる
$userid[] = 'admin'; //ユーザーID
$username[] = '管理者'; // お名前

// パスワード[pass1]をpassword_hash()関数でハッシュ化した文字列
// password_hash.phpのパスワードハッシュ化プログラムを使用してハッシュ化（PHP逆引きレシピ220）
// 上に紹介しているh.phpはパスワードのハッシュ化ができるプログラムです。そちらでパスワードのハッシュ化をすると以下のような文字列を得ることができます。
$hash[] = '$2y$10$MeurUlzg8gzCHKYkDMrz/.9/3eq2qxI.GyBFy65F8BFym2/YS67dq';

// 二人目のユーザーの登録
$userid[] = 'test';
$username[] = 'テスト';

// パスワード[pass2]をpassword_hash()関数でハッシュ化した文字列
$hash[] = '$2y$10$Jb/beQEUPERIYRyzsZUcT.9U9qsLqQLOXQXaKJrjlIQwRreTkKns6';

// エラーメッセージの変数を初期化
$error = '';

// 認証済みかどうかのセッション変数を初期化
if (isset($_SESSION['auth'])) {
    $_SESSION['auth'] = false;
}

if (isset($_POST['userid']) && isset($_POST['password'])) {
    foreach ($userid as $key => $value) {
        if ($_POST['userid'] === $userid[$key] &&
            // 入力されたパスワード文字列とハッシュ化済みパスワードを照合
        password_verify($_POST['password'], $hash[$key])){
            // セッション固定化攻撃を防ぐため、セッションIDを変更
            session_regenerate_id(true);
            $_SESSION['auth'] = true;
            $_SESSION['username'] = $username[$key];
            break;
        }
    }

    if ($_SESSION['auth'] === false) {
        $error = 'ユーザーIDかパスワードに誤りがあります';
    }

}
    if ($_SESSION['auth'] !== true) {
        ?>
        <!DOCTYPE html>
        <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <title>簡単なログインフォームを作成</title>
            <style>
                .container {
                    width: 100%;
                    text-align: center;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div id="login">
                    <h1>認証フォーム</h1>
                    <?php 
                    if ($error) {
                        // エラー文がセットされていれば赤色で表示
                        echo '<p style="color:red;">'.h($error).'</p>';
                    }
                    ?>
                    <form action="<?php echo h($_SERVER['SCRIPT_NAME']); ?>" method="post">
                        <dl>
                            <dt><label for="userid">ユーザーID:</label></dt>
                            <dd><input type="text" name="userid" value=""></dd>
                        </dl>
                        <dl>
                            <dt><label for="password">パスワード：</label></dt>
                            <dd><input type="password" name="password" id="password" value=""></dd>
                        </dl>
                        <input type="submit" name="submit" value="ログイン">
                    </form>
                </div>
            </div>
        </body>
        </html>
        <?php
        // スクリプトを終了し、認証が必要なページが表示されないようにする
        exit();
    }
