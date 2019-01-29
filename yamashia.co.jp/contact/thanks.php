<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
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
         <div class="thanks-message"><h2>お問い合わせいただきありがとうございます。</h2></div>
			<footer>
				<div class="footer-logo">
		      <a href="../index.php"><img src="../images/yamashialogo.png" alt="ヤマシアロゴ"　width="70px" height="40px"></a>
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
