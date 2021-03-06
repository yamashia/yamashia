<!DOCTYPE html>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $age = $_POST["age"];
  $category = $_POST["category"];
  $content  = $_POST["content"];
  }
?>
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
      <div class="Confirmation">
    <div class="contact-form">
      <form action="thanks.php" method="post">
             <input type="hidden" name="name" value="<?php echo $name; ?>">
             <input type="hidden" name="email" value="<?php echo $email; ?>">
             <input type="hidden" name="age" value="<?php echo $age; ?>">
             <input type="hidden" name="category" value="<?php echo $category; ?>">
             <input type="hidden" name="content" value="<?php echo $content; ?>">
             <h1 class="contact-check">お問い合わせ内容確認</h1>
             <p class="contact-check2">お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信」ボタンを押して下さい。</p>
                <div>
                 <div>
                     <label>名前</label>
                     <p><?php echo $name; ?></p>
                 </div>
                 <div>
                     <label>メールアドレス</label>
                     <p><?php echo $email; ?></p>
                 </div>
                 <div>
                     <label>年齢</label>
                     <p><?php echo $age; ?></p>
                 </div>
                 <div>
                     <label>お問い合わせ種類</label>
                     <p><?php echo $category; ?></p>
                 </div>
                 <div>
                     <label>お問い合わせ内容</label>
                     <p><?php echo $content; ?></p>
                   </div>

         <input class="btn" type="button" value="修正" onclick="history.back()">
         <input class="btn" type="submit" name="btn_submit" value="送信">
     </form>
 </div>
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
