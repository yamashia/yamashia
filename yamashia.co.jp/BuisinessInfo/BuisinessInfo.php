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
      <div class="top-main">
        <div class="main">
          <p>当社IT支援のつよみ</p>
          <a href="#link" class="a1">1.公平かつ円滑な支援を行います</a>
          <a href="#link2" class="a2">2.費用、効果、リスク等からご相談いただけます</a>
          <a href="#link3" class="a3">3.各種サービス(適材)／ソリューション(適所)の適用を促進します</a>
          <a class="a4">4.徹底した情報共有を推進します</a>
        </div>
       <div name="link" class="one-main">
         <p>具体的な取り組み</p>
         <a class="a1">1.公平かつ円滑な支援を行います</a>
         <h3>■数字をもとに俯瞰して柔軟性をもった判断　※コスト計算、アクセス解析数値、パフォーマンス解析、etc</h3>
         <h3>■課題根本解決へ診断、分析、最適なアクセスパスの見極め</h3>
         <h3>■UXは「お客様中心」に、UIは「シンプルに・わかりやすく」</h3>
       </div>
       <div name="link2" class="two-main">
         <a class="a2">2.費用、効果、リスク等からご相談いただけます（※）</a>
         <h3>■費用対効果、リスク管理、多方面からご相談ください。</h3>
         <h3>■構成管理のツール実績等もあわせてご相談ください。</h4>
         <h4> （※） 当社は既存の枠にとらわれない一環した案件推進の新しいソリューションを提供するのが強みの会社です。 </h3>
         <h4>案件途中の制約付き進行を余儀なくされる場合、また、ツールのバージョンアップ等でのセキュリティ／脆弱性面の保証が将来的になくなるリスクについては、対応できない可能性がございます。
           　案件途中でのニュース・脆弱性速報による検知について、その先の継続については、内容精査のもと別途ご相談になります。予めご了承下さい。</h4>
       </div>
       <div name="link3" class="three-main">
         <a class="a3">3.各種サービス(適材)／ソリューション(適所)の適用を促進します</a>
         <h3>■フリーのツール(JIRA、Redmine、TRAC、etc)から、有料サービスまで、WEB環境での共有環境構築についてご相談いただけます。</h3>
         <h3>■PDCA+プロトタイプモデルのスピーディーなソリューション(各種クラウド、xampp、conflict5、etc)のご利用を承っております。　<br>マニュアル・手順整備についてもぜひご相談ください。</h3>
       </div>
        <div class="Entrusted">
         <p>案件受託</p>
         <h4>準備中～</h4>
        </div>
        <div class="environment">
          <p>環境</p>
          <h3>※OSは最新版　<br>■Mac 　■Windows</h3>
          <h3>■社内WAN(webサーバーのプロセスありの共有server)へのアップロード／ダウンロードが可能な環境</h3>
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
