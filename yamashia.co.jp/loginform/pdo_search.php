
<?php
header("Content-type: text/html; charset=utf-8");

if(empty($_POST)) {
	header("Location: pdo_search_form.php");
	exit();
}else{
	//名前入力判定
	if (!isset($_POST['name'])  || $_POST['name'] === "" ){
		$errors['name'] = "名前が入力されていません。";
	}
}

if(count($errors) === 0){

	$dsn = 'mysql:dbname=sddb0040218534;host=sddb0040218534.cgidb';
  $username = 'sddbMTI5NTE3';
  $password = '#R1e2p3o4';
	try{
    $dbh = new PDO($dsn, $username, $password);
		$statement = $dbh->prepare("SELECT * FROM name WHERE name LIKE (:name) ");

		if($statement){
			$yourname = $_POST['name'];
			$like_yourname = "%".$yourname."%";
			//プレースホルダへ実際の値を設定する
			$statement->bindValue(':name', $like_yourname, PDO::PARAM_STR);

			if($statement->execute()){
				//レコード件数取得
				$row_count = $statement->rowCount();

				while($row = $statement->fetch()){
					$rows[] = $row;
				}

			}else{
				$errors['error'] = "検索失敗しました。";
			}

			//データベース接続切断
			$dbh = null;
		}

	}catch (PDOException $e){
		print('Error:'.$e->getMessage());
		$errors['error'] = "データベース接続失敗しました。";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>検索結果</title>
<meta charset="utf-8">
</head>
<body>

<?php if (count($errors) === 0): ?>

<p><?=htmlspecialchars($yourname, ENT_QUOTES, 'UTF-8')."さんで検索しました。"?></p>
<p><?=$row_count?>件です。</p>

<table border='1'>
<tr><td>id</td><td>name</td></tr>

<?php
foreach($rows as $row){
?>
<tr>
	<td><?=$row['id']?></td>
	<td><?=htmlspecialchars($row['name'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<?php
}
?>

<?php elseif(count($errors) > 0): ?>
<?php
foreach($errors as $value){
	echo "<p>".$value."</p>";
}
?>
<?php endif; ?>
</body>
</html>
