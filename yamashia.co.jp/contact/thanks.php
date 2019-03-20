<!DOCTYPE html>
<?php
  $timestamp = time() ;
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

<?php
if( !empty($_POST['btn_confirm']) ) {
	$page_flag = 1;
} elseif( !empty($_POST['btn_submit']) ) {
  $page_flag = 2;
	// 変数とタイムゾーンを初期化
  $header = null;
  $auto_reply_subject = null;
  $auto_reply_text = null;
  $admin_reply_subject = null;
  $admin_reply_text = null;
  date_default_timezone_set('Asia/Tokyo');
  // ヘッダー情報を設定
  $header = "MIME-Version: 1.0\n";
  $header .= "From: 株式会社ヤマシア <kenichi.yamaguchi@yamashia.co.jp>\n";
  $header .= "Reply-To: 株式会社ヤマシア <kenichi.yamaguchi@yamashia.co.jp>\n";
	// 件名を設定
  $auto_reply_subject = 'お問い合わせありがとうございます。';
	// 本文を設定
  $auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。下記の内容でお問い合わせを受け付けました。\n\n";
  $auto_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
  $auto_reply_text .= "名前：" . $_POST['name'] . "\n";
  $auto_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";
  $auto_reply_text .= "年齢：" . $_POST['age'] . "\n\n";
  $auto_reply_text .= "お問い合わせ種類：" . $_POST['category'] . "\n\n";
  $auto_reply_text .= "お問い合わせ内容：" . $_POST['content'] . "\n\n";
  $auto_reply_text .= "株式会社ヤマシア";
	// メール送信
  mb_send_mail( $_POST['email'], $auto_reply_subject, $auto_reply_text);}

  // 運営側へ送るメールの件名
  $admin_reply_subject = "お問い合わせを受け付けました";
  // 本文を設定
  $admin_reply_text = "下記の内容でお問い合わせがありました。\n\n";
  $admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
  $admin_reply_text .= "名前：" . $_POST['name'] . "\n";
  $admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";
  $admin_reply_text .= "年齢：" . $_POST['age'] . "\n\n";
  $admin_reply_text .= "お問い合わせ種類：" . $_POST['category'] . "\n\n";
  $admin_reply_text .= "お問い合わせ内容：" . $_POST['content'] . "\n\n";
  // 運営側へメール送信
  mb_send_mail( 'kenichi.yamaguchi@yamashia.co.jp', $admin_reply_subject, $admin_reply_text, $header);
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
         <div class="thanks-message">
           <h2>お問い合わせいただきありがとうございます。</h2>
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
