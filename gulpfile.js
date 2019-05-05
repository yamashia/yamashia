var gulp = require('gulp');
var uglify = require('gulp-uglify');

// JSファイルを軽量化
gulp.task( 'jsmin', function() { //タスク「jsmin」の内容を書こう
    return gulp.src( 'flickity.pkgd.min.js' ) //どのファイルに対して行うかを指定
    .pipe( uglify() ) //JSファイルを軽量化
    .pipe( gulp.dest( 'min' ) ); //「作業フォルダ/min」フォルダ内に軽量化されたJSファイルを作成
   });