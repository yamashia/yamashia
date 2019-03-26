<?php
header("Content-type: text/html; charset=utf-8");

$dsn = 'mysql:dbname=sddb0040218534;host=sddb0040218534.cgidb';
$username = 'sddbMTI5NTE3';
$password = '#R1e2p3o4';

try{
	$dbh = new PDO($dsn, $user, $password);
	echo "接続成功";

	$sql = 'SELECT * FROM name';
	$statement = $dbh -> query($sql);

	//レコード件数取得
	$row_count = $statement->rowCount();

	while($row = $statement->fetch()){
		$rows[] = $row;
	}
	/*
	foreach ($statement as $row) {
		$rows[] = $row;
	}
	*/

	//データベース接続切断
	$dbh = null;

}catch (PDOException $e){
	print('Error:'.$e->getMessage());
	die();
}

?>

<!DOCTYPE html>
<html>
<head>
<title>nameテーブル表示</title>
<meta charset="utf-8">
</head>
<body>
<h1>nameテーブル表示</h1>

レコード件数：<?php echo $row_count; ?>

<table border='1'>
<tr><td>id</td><td>name</td></tr>

<?php
foreach($rows as $row){
?>
<tr>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo htmlspecialchars($row['name'],ENT_QUOTES,'UTF-8'); ?></td>
</tr>
<?php
}
?>

</table>

</body>
</html>
