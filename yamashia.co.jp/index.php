<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社ヤマシア</title>
    <link rel="stylesheet" href="css/stylesheet.css">
  	<link rel="stylesheet" href="css/responsive.css">
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
                <h1 class="logo">株式会社ヤマシア</h1>
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
      <p>やましあ</p>
    </div>
    
  <footer>
   <div class="footer-logo"><a href="../index.php">yamashia</a></div>
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
