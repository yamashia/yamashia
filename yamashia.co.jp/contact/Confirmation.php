<!DOCTYPE html>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $age = $_POST["age"];
  $category = $_POST["category"];
  $body  = $_POST["body"];
  }
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
    <div class="contact-form">
      <form action="thanks.php" method="post">
             <input type="hidden" name="name" value="<?php echo $name; ?>">
             <input type="hidden" name="email" value="<?php echo $email; ?>">
             <input type="hidden" name="age" value="<?php echo $age; ?>">
             <input type="hidden" name="category" value="<?php echo $category; ?>">
             <input type="hidden" name="body" value="<?php echo $body; ?>">
             <h1 class="contact-title">お問い合わせ<br>内容確認</h1>
             <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信」ボタンを押して下さい。</p>
             <div>
                 <div>
                     <label>・名前</label>
                     <p><?php echo $name; ?></p>
                 </div>
                 <div>
                     <label>・メールアドレス</label>
                     <p><?php echo $email; ?></p>
                 </div>
                 <div>
                     <label>・年齢</label>
                     <p><?php echo $age; ?></p>
                 </div>
                 <div>
                     <label>・お問い合わせ種類</label>
                     <p><?php echo $category; ?></p>
                 </div>
                 <div>
                     <label>・お問い合わせ内容</label>
                     <p><?php echo $body; ?></p>
                   </div>

         <input type="button" value="修正" onclick="history.back()">
         <input type="submit" value="送信">
     </form>
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
