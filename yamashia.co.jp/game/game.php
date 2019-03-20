<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社ヤマシア</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
  	<link rel="stylesheet" href="../css/responsive.css">
    <style>
      .game {
        padding-top:55px;
        padding-bottom: 50px;
      }
      canvas{
        background: pink;
        width: 100%;
      }
      input[type="button"] {
        position: absolute;
        top: 15%;
        right: 5%;
      }
      input[type="button"]:hover {
        opacity: 0.5;
      }
    </style>
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

      <script>
    // スラッシュを2つ書くと以降の文字は「コメント」となり、無視されます。
    // プログラムの説明を書き込みたいときに使います。
    var context;

    var image = new Image(); // 社畜ちゃんの画像です
    image.src = 'shachiku.png';
    var yoko = 270; // 社畜ちゃんの横の位置です
    var tate = 220; // 社畜ちゃんの縦の位置です
    var move = 0; // 社畜ちゃんの縦の動きの量です

    var enemyImage = new Image(); // エネミーの画像です
    enemyImage.src = 'enemy.png';
    var enemyYoko = 0; // エネミーの横の位置です
    var enemyTate = 330; // エネミーの縦の位置です
    var enemyMove = 5; // エネミーの動きの量です

    var gameover = 0; // ゲームオーバーフラグです

    // ゲームオーバーのチェックをします
    function checkHit(){
    var sx1 = yoko;
    var sx2 = yoko + 100; // 140は社畜ちゃんの横幅です
    var ex1 = enemyYoko;
    var ex2 = enemyYoko + 43; // 43はエネミーの横幅です
    var ashi = tate + 140; // 社畜ちゃんの足の位置です
    // エネミーの横の位置が社畜ちゃんと重なっていて
    if( sx1 < ex2 && ex1 < sx2 ){
      // 社畜ちゃんの足がエネミーよりの低い位置なら
      if( ashi > 330 ){
        // ぶつかっているのでゲームオーバーにします
        gameover = 1;
      }
    }
    }

    // 止まっているエネミーを左右どちらかから発射します
    function fireEnemy(){
    // 0か1の数をランダムに作ります
    var rand = Math.floor(Math.random() * 2);
    // 1だったら左から登場させます
    if( rand == 1 ){
       enemyYoko = -43; // 横の位置を左端にします
       enemyMove = 5;
    // 1でなければ右から登場させます
    }else{
      enemyYoko = 640; // 横の位置を右端にします
      enemyMove = -5;
    }
    }

    // 社畜ちゃんを動かします（「動く社畜ちゃん.html」と同じ内容です）
    function moveShachiku(){
    if( tate < 100 ){
      move = 4;
    }
    tate = tate + move;
    if( tate > 220  ){
      tate = 220;
      move = 0;
    }
    }

    // ゲームスタート時の準備を行います（「動く社畜ちゃん.html」と同じです）
    function start(){
    var canvas = document.getElementById('canvas');
    context = canvas.getContext('2d');
    canvas.addEventListener('click', function(e){
      if( move == 0){
        move = -4;
      }
    });
    loop();
    }

    // ゲームループ
    function loop(){

    // 社畜ちゃんを動かします
    moveShachiku();

    if( enemyMove == 0 ){
      // エネミーが止まっているなら、動かしはじめます
      fireEnemy();
    }
    // エネミーを動かします
    enemyYoko = enemyYoko + enemyMove;
    // エネミーがキャンバス外まで動いていたら、動きの量を0にします
    if( enemyYoko < -43 || enemyYoko > 640 ){
      enemyMove = 0;
    }

    // キャンバスに描かれているものを消します
    context.clearRect(0, 0, 640, 360);

    // 社畜ちゃんをキャンバスに描きます
    context.drawImage(image, yoko, tate);

    // エネミーをキャンパスに描きます
    context.drawImage(enemyImage, enemyYoko, enemyTate);

    // ゲームオーバーのチェックをします
    checkHit();
    if( gameover == 1 ){
      context.fillText('ゲームオーバー', 50, 100);

    }else{
      window.requestAnimationFrame(loop);
    }
}
      </script>

  </head>
  <body onload='start()'>
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
    <div class="game">
<input type="button" value="もう一日残業" onclick="window.location.reload();">
<canvas id='canvas' width='640' height='800'></canvas>

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
