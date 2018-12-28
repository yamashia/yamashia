<!DOCTYPE html>
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
	<div class="top-wrapper">
  <p class="contact-wrapper"> お問い合わせ</p>
<div class="mail-contact">
  <h2> ・メールでのお問い合わせ</h2>
  <h4>  お問い合わせにつきましては、下記リンクよりメールにてお問い合わせください</h4>
  <h4>  qyama2003@gmail.com</h4>
</div>
<div class="line-contact">
  <h2> ・LINEでのお問い合わせ</h2>
  <h4>　LINE ID: yamashia</h4>
  <img src="../contact/line_qr.png" width="200px" height="200px">
</div>
<div class="contact">
  <h2> ・採用についてのお問い合わせ</h2>
  <h4> 新卒／中途退学問わず受け付けております。詳しくは弊社までお問い合わせください。</h4>
  </div>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <form method="post" action="Confirmation.php">
        <div class="form-item">名前</div>
        <input type="text" name="name">
        <div class="form-item">メールアドレス</div>
        <input type="text" name="email">


        <div class="form-item">年齢</div>
        <select name="age">
          <option value="未選択">選択してください</option>
          <!-- for文を用いて6歳から100歳までをoptionで選べるようにしましょう -->
          <?php
            for ($i = 16; $i <= 100; $i++) {
              echo "<option value='{$i}'>{$i}</option>";
            }
          ?>
        </select>

        <div class="form-item">お問い合わせの種類</div>
        <?php
          $types = array('採用に関するお問い合わせ','仕事に関するお問い合わせ','その他');
         ?>
        <!-- この下にselectタグを書いていきましょう -->
        <select name="category">
          <option value="未選択">選択してください</option>
           <?php
             foreach ($types as $type) {
              echo "<option value='{$type}'>{$type}</option>";
             }
           ?>
        </select>

        <div class="form-item">お問い合わせ内容</div>
        <textarea name="content"></textarea>

        <input type="submit" value="確認">
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
