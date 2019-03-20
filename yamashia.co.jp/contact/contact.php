<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社ヤマシア</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
  	<link rel="stylesheet" href="../css/responsive.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
    <script type="text/javascript">
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
      <script>
      //yamashiarogo
      $(function() {
      $('a img').hover(
        function() {
      $(this).fadeTo(200, 0.6);
    },
        function() {
      $(this).fadeTo(200, 1.0);
    }
    );
    });
      </script>
  </head>
  <body>
    <header id="top-head">
        <div class="inner">
            <div id="mobile-head">
                <a class="logo" href="../index.php"><img src="../images/yamashialogo.png" alt="ヤマシアロゴ"　width="80px" height="40px"></a>
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
    <div class="contact-title">
      <div class="layer3">
      <h2>お問い合わせ</h2>
      <h3>この度は、株式会社ヤマシアのWebサイトをご覧いただき誠にありがとうございます。</h3>
      <h3>事業概要、仕事に関するお問合せ、ご質問など、下記の方法にて、お受付しております。</h3>
    </div>
  </div>
  <div class="contact-wrapper">
<div class="mail-contact">
  <p>メールでのお問い合わせ</p>
  <h4>お問い合わせは、以下のメールアドレスにお願いいたします。</h4>
  <h4>kenichi.yamaguchi@yamashia.co.jp</h4>
</div>
<div class="contact">
  <p>採用についてのお問い合わせ</p>
  <h4> 新卒／中途退学問わず受け付けております。詳しくは弊社までお問い合わせください。</h4>
  </div>
  <div class="contact-form">
    <div class="form-title">お問い合わせ</div>
    <form method="post" action="Confirmation.php">
      <div class="form-item">名前 <small>※必須</small></div>
      <input class="font-size" type="text" name="name" required>
      <div class="form-item">メールアドレス <small>※必須</small></div>
      <input class="font-size" type="email" name="email" required>
      <div class="form-item">年齢</div>
      <select class="font-size" name="age">
        <option value="未選択">選択してください</option>
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
      <select class="font-size" name="category">
        <option value="未選択">選択してください</option>
         <?php
           foreach ($types as $type) {
            echo "<option value='{$type}'>{$type}</option>";
           }
         ?>
      </select>
      <div class="form-item">お問い合わせ内容 <small>※必須</small></div>
      <textarea class="font-size" name="content" required placeholder="お問い合わせ内容を入力"></textarea>
      <input class="btn" type="submit" name="btn_confirm" value="確認">
    </form>
  </div>
</div>
<footer>
 <div class="footer-logo">
   <a href="../index.php">株式会社ヤマシア</a>
 </div>
 <div class="footer-list">
   <ul>
      <li><a href="../index.php">ホーム</a></li>
      <li><a href="../BuisinessInfo/BuisinessInfo.php">事業案内</a></li>
      <li><a href="../CompanyBrochure/CompanyBrochure.php">会社案内</a></li>
      <li><a href="../contact/contact.php">お問い合わせ</a></li>
   </ul>
  </div>
  <p class="pagetop"><a href="#wrap">▲</a></p>
</footer>
</body>
</html>
