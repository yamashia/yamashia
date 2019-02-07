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
        <div class="table-company">
          <div class="overview">
    <p>会社概要</p>
    <h2>会社の理念</h2>
    <h3>御社利益のためのITの支援をいたします</h3>
    <h3>臨機に時々の最善を尽くします</h3>
          </div>
    <table border=1 cellpadding=7 cellspacing=2>
  <tr>
    <td>社名</td>
    <td>株式会社ヤマシア</td>
  </tr>
<tr>
  <td>事業内容</td>
  <td>UI/UX支援、案件支援、案件受託、テスト</td>
</tr>
<tr>
  <td>所在地</td>
  <td>東京</td>
</tr>
<tr>
  <td>主な取引銀行</td>
  <td>三井住友銀行</td>
</tr>
    </table>
    <div class="History">
      <p>沿革</p>
  <h4>2013/02/05 <br>江東区富岡に設立</h4>
  <h4>2016/04/27 <br>世田谷区瀬田に移転</h4>
  </div>
  <div class="hidden_box">
      <label for="label2">副社長挨拶</label>
      <input type="checkbox" id="label2">
      <div class="hidden_show">
          <p class="syachiku">
            <br>『進撃の社畜』
            <br>
            <br>平日　乗り越えて
            <br>休む　意思を　嗤う　会社
            <br>社畜の安寧　虚偽の休日
            <br>死せる土日の　自由を！
            <br>囚われた　残業は　サービスの奉仕だ
            <br>終電の　その彼方　まぶたに映る　家がー！　
            <br>終わらない　労働に　その身を灼きながら
            <br>黄昏に　愚痴こぼす　帰んの無理や　
         </p>
         <p class="sychiku">
            <br>祝日なのになんで仕事行くの？
            <br>ロボさん<big>「そこに仕事があるから」</big>
            <br>「無意味な仕事」だと　言わせない
            <br>最後に解雇になるまで
            <br>「帰りたくても　帰れへんねん」
            <br>「帰りたくても　帰れへんねん」
            <br>両手にはメモとペン　謳うのは社訓
            <br>実際に上げたモチベを左胸に
            <br>斬り裂くのはパワーハラスメント
            <br>早急に俺　仕事を辞めたい
          </p>
          <p class="syachiku">
            <br>萌え市場の終息は無いだろうと信じ漁った
            <br>金を貢いだオタクの日は　いつも恍惚に
            <br>モニタの中の少女は　枯れず魅力ブラボーで
            <br>外界出ざる在宅の身は　奇行種のように
            <br>ゆゆ式を嗜むもの　彼らは握手すべき同士だ
            <br>あの日どんな顔で瞳で　嫁達を見つめていた？
            <br>恥を捨てれば悪評をも凌げる
            <br>「独りだね」「悲しいわね」
            <br>決して惜しくなどはない
            <br>飾れよ！　飾れよ！　人形を飾れよ！
            <br>全ての身銭は　今この女子のために
            <br>崇めよ！　崇めよ！　二次嬢を崇めよ！
            <br>Blue-ray全巻を　その手で一式買え
          </p>
          <p class="shavhiku"><a href="../game/game.php">game</a></p>
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
