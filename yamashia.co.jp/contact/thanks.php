<!DOCTYPE html>
<?php
  	// UNIX TIMESTAMPを取得
  	$timestamp = time() ;
  	// date()で日時を出力
  	echo date( "Y/m/d" , $timestamp ) ;
  	// 改行
  	echo "<br><br>" ;
  	// 第2引数は省略できる = time()を指定したのと同じ
  	echo date( "Y/m/d" ) ;
  $name = $_POST["name"];
  $email = $_POST["email"];
  $age = $_POST["age"];
  $category = $_POST["category"];
  $content  = $_POST["content"];
  $dsn = 'mysql:dbname=sddb0040218534;host=sddb0040218534.cgidb';
  $username = 'sddbMTI5NTE3';
  $password = '#R1e2p3o4';
  $options = array(
   PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  );
  $dbh = new PDO($dsn, $username, $password, $options);
  $sql = 'INSERT INTO お問い合わせ (name,email,age,category,content)
     VALUES ("'.$name.'","'.$email.'","'.$age.'","'.$category.'","'.$content.'")';
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  $dbh = null;
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
    <style>body{background-image: url("../images/katakataS.png");  background-size: contain;}</style>
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
         <div class="thanks-message"><h2>お問い合わせいただきありがとうございます。</h2></div>
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
       <p class="pagetop"><a href="#wrap">▲</a></p>
      </div>
    </footer>
    </body>
  </html>
