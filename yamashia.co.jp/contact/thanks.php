<!DOCTYPE html>

<?php
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
$category = $_POST["category"];
$body  = $_POST["body"];
$dsn = 'mysql:dbname=sddb0040218534;host=sddb0040218534.cgidb';
$username = 'sddbMTI5NTE3';
$password = '#R1e2p3o4';
$options = array(
 PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
$dbh = new PDO($dsn, $username, $password, $options);

$sql = 'INSERT INTO お問い合わせ (name,email,age,category,body)
   VALUES ("'.$name.'","'.$email.'","'.$age.'","'.$category.'","'.$body.'")';
$stmt = $dbh->prepare($sql);
$stmt->execute();
$dbh = null;
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社ヤマシア</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="responsive.css">
  </head>
  <body>
  <header>
    <div  class="header-left"><a href="../index.php">株式会社ヤマシア</a></div>
    <div id class="header-right">
    <div id class="menu">
<ul>
<li><a href="../index.html">ホーム</a></li>
<li><a href="../BuisinessInfo/BuisinessInfo.php">事業案内</a>
<ul>
<li><a href="../BuisinessInfo/BuisinessInfo.php">案件支援</a></li>
<li><a href="../BuisinessInfo/BuisinessInfo.php">案件受託</a></li>
  </ul>
</li>
<li><a href="../CompanyBrochure/CompanyBrochure.php">会社案内</a></li>
<li><a href="../contact/contact.php">お問い合わせ</a></li>
</ul>
	</div>
	</div>
  <div id="nav-drawer">
       <input id="nav-input" type="checkbox" class="nav-unshown">
       <label id="nav-open" for="nav-input"><span></span></label>
       <label class="nav-unshown" id="nav-close" for="nav-input"></label>
       <div id="nav-content" class="nav-content">
         <ul>
         <li><a href="../index.php">ホーム</a></li>
         <li><a href="../BuisinessInfo/BuisinessInfo.php">事業案内</a>
         <li><a href="../CompanyBrochure/CompanyBrochure.php">会社案内</a></li>
         <li><a href="../contact/contact.php">お問い合わせ</a></li>
         </ul></div>
    </header>
    <div class="main">
        <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
      </div>
</div>
  </body>
  <footer>
  <div class="footer-logo"><a href="../index.php">yamashia</a></div>
  <div class="footer-list">
    <ul>
      <li><a href="../index.php">ホーム</a></li>
      <li><a href="../BuisinessInfo/BuisinessInfo.php">事業案内</a></li>
      <li><a href="../CompanyBrochure/CompanyBrochure.php">会社案内</a></li>
      <li><a href="../contact/contact.php">お問い合わせ</a></li>
    </ul>
      </div>
  </footer>
</html>
