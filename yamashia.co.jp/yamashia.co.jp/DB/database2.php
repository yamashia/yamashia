<?php

header("Content-type: text/html; charset=utf-8");

//データベース接続
$dsn = 'mysql:dbname=sddb0040218534;host=sddb0040218534.cgidb';
$username = 'sddbMTI5NTE3';
$password = '#R1e2p3o4';
$dbname = 'member'

$mysqli = new mysqli($dsn, $username, $password,$dbname);

if ($mysqli->connect_error){
	echo $mysqli->connect_error;
	exit();
}else{
	$mysqli->set_charset("utf-8");
}

if(empty($_POST)) {
	echo "<a href='database1.html'>database1.html</a>←こちらのページからどうぞ";
}else{
	//名前入力判定
	if (!isset($_POST['yourname'])  || $_POST['yourname'] === "" ){
		echo "名前が入力されていません。";
	}else{
		//プリペアドステートメント
		$stmt = $mysqli->prepare("INSERT INTO name (name) VALUES (?)");

		if($stmt){
			//プレースホルダへ実際の値を設定する
			$stmt->bind_param('s', $yourname);
			$yourname = $_POST['yourname'];

			if($stmt->execute()){
				echo htmlspecialchars($yourname, ENT_QUOTES, 'UTF-8')."さんで登録いたしました。";
			}else{
				echo $stmt->errno . $stmt->error;
			}

			//ステートメント切断
			$stmt->close();
		}else{
			echo $mysqli->errno . $mysqli->error;
		}
	}
}

// データベース切断
$mysqli->close();

?>
