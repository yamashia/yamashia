<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社ヤマシア</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
  	<link rel="stylesheet" href="../css/responsive.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
    (function($) {
        $(function() {
            var $header = $('#top-head');
            // Nav Fixed
            $(window).scroll(function() {
                if ($(window).scrollTop() > 350) {
                    $header.addClass('fixed');
                } else {
                    $header.removeClass('fixed');
                }
            });
            // Nav Toggle Button
            $('#nav-toggle').click(function(){
                $header.toggleClass('open');
            });
        });
    })(jQuery);
    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
      var pagetop = $('.pagetop');
        $(window).scroll(function () {
           if ($(this).scrollTop() > 100) {
                pagetop.fadeIn();
           } else {
                pagetop.fadeOut();
                }
           });
           pagetop.click(function () {
               $('body, html').animate({ scrollTop: 0 }, 500);
                  return false;
       });
    });
    </script>
  </head>
  <body>
    <header id="top-head">
        <div class="inner">
            <div id="mobile-head">
                <a class="logo" href="../index.php">株式会社ヤマシア</a>
                <div id="nav-toggle">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <nav id="global-nav">
              <ul>
                <li><a href="../index.php">ホーム</a></li>
                <li><a href="../BuisinessInfo/BuisinessInfo.php">事業案内</a>
                <li><a href="../CompanyBrochure/CompanyBrochure.php">会社案内</a></li>
                <li><a href="../contact/contact.php">お問い合わせ</a></li>
              </ul>
            </nav>
        </div>
    </header>

	<div class="top-wrapper">
  <p>お問い合わせ</p>
  </div>
  <div class="contact-wrapper">
<div class="mail-contact">
  <h2>メールでのお問い合わせ</h2>
  <h4>  お問い合わせにつきましては、下記リンクよりメールにてお問い合わせください</h4>
  <h4>  qyama2003@gmail.com</h4>
</div>
<div class="line-contact">
  <h2>LINEでのお問い合わせ</h2>
  <img src="../images/line_qr.png" width="150px" height="150px">
  <h4>　LINE ID: yamashia</h4>
</div>
<div class="contact">
  <h2>採用についてのお問い合わせ</h2>
  <h4> 新卒／中途退学問わず受け付けております。詳しくは弊社までお問い合わせください。</h4>
  </div>
</div>

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
  <footer>
    <div class="footer-logo">
      <a href="../index.php"><img src="../images/yamashialogo.png" alt=""　width="70px" height="40px"></a>
    </div>
   <div class="footer-list">
     <ul>
        <li><a href="../index.php">ホーム</a></li>
        <li><a href="../BuisinessInfo/BuisinessInfo.php">事業案内</a></li>
        <li><a href="../CompanyBrochure/CompanyBrochure.php">会社案内</a></li>
        <li><a href="../contact/contact.php">お問い合わせ</a></li>
     </ul>
     <p class="pagetop"><a href="#wrap">▲</a></p>
    </div>
  </footer>
  </body>
</html>
