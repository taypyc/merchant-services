'use strict';

const gulp = require('gulp'),
      $ = require('gulp-load-plugins')();

//---------------------------
//       browser-sync
//---------------------------

gulp.task('browser-sync', () => {
  const browserSync = require('browser-sync').create();
  browserSync.init({
    proxy: '127.0.0.1/' + __dirname.substring(__dirname.lastIndexOf('/')+1) + '/www/',
    notify: false,
    browser: 'google chrome'
  });
  //browserSync.watch('www/**/*.+(html|php|js|css)').on('change', browserSync.reload); //if browser sync fix the bug with slashes \ as it was on versions 2.20-2.21
  
  browserSync.watch(['www/**/*.+(html|php)', 'www/css/*.css', 'www/js/*.js'], (event, file) => {
    browserSync.reload(file.replace(/\\/g,"/"));
    //browserSync.reload(file.replace(/\\/g,"/")); //twice for inline sourcemaps because not updating sass files in chrome
  });
});

//---------------------------
//           svg
//---------------------------

gulp.task('svg', function () {
  return gulp.src('www/css/svg/*.svg')
    // minify svg
    .pipe($.svgmin({
      /*js2svg: {
        pretty: true
      }*/
    }))
    // remove all fill, style and stroke declarations in out shapes
    .pipe($.cheerio({
      run: function ($) {
        // $('[fill]').removeAttr('fill');
        $('[stroke]').removeAttr('stroke');
        $('[style]').removeAttr('style');
      },
      parserOptions: {xmlMode: true}
    }))
    // cheerio plugin create unnecessary string '&gt;', so replace it.
    .pipe($.replace('&gt;', '>'))
    // build svg sprite
    .pipe($.svgSprite({
      mode: {
        symbol: {
          dest: '.',
          prefix: '.icon-%s',
          dimensions: '%s',
          sprite: 'css/fonts/icons.svg',
          render: {
            sass: {
              template: 'www/css/dev/templates/icons-template.sass',
              dest: 'css/dev/import/icons.sass'
            }
          },
          example: {
            template: 'www/css/dev/templates/icons-template.html',
            dest: 'svg.html'
          },
        }
      }
    }))
    .pipe(gulp.dest('www/'));
});

//---------------------------
//           css
//---------------------------

gulp.task('css:dev', () => {
  return gulp.src('www/css/dev/*.sass')
    .pipe($.sourcemaps.init())
    .pipe($.sass({outputStyle: 'expanded'}))
    .on('error', $.notify.onError((err) => {
      return {
        title: 'Sass Error',
        message: err.message
      }
    }))
    .pipe($.sourcemaps.write('./'))
    .pipe(gulp.dest('www/css/'));
});

gulp.task('css:build', gulp.series('css:dev', () => {
  const autoprefixer = require('autoprefixer');
  return gulp.src('www/css/main.css')
    .pipe($.sourcemaps.init({loadMaps: true}))
    .pipe($.postcss([
      autoprefixer({
        cascade: false
      }),
    ]))
    .pipe($.cleanCss({
      format: 'beautify'
    }))
    .pipe($.groupCssMediaQueries())
    .pipe($.cleanCss({ // clean before and after group css media for properly work
      format: 'beautify'
    }))
    .pipe($.sourcemaps.write())
    .pipe(gulp.dest('www/css/'));
}));

gulp.task('css:deploy', gulp.series('css:build', () => {
  return gulp.src(['www/css/vendors.css', 'www/css/main.css'])
    .pipe($.sourcemaps.init({loadMaps: true}))
    /*.pipe($.if(['vendors.css'], $.cleanCss({
      level: {1: {specialComments: 0}}
    })))*/
    .pipe($.cleanCss({
      level: {1: {specialComments: 0}}
    }))
    // .pipe($.concat('main.css'))
    .pipe($.sourcemaps.write({addComment: false}))
    .pipe(gulp.dest('deploy/css/'));
}));

//---------------------------
//            js
//---------------------------

gulp.task('js:deploy', () => {
  return gulp.src('www/js/*.js')
    .pipe($.if(['main.js'], $.uglify()))
    .pipe(gulp.dest('deploy/js/'));
});

gulp.task('js:check', () => {
  return gulp.src('www/js/main.js')
    .pipe($.eslint())
    .pipe($.eslint.format());
});

//---------------------------
//          watch
//---------------------------

gulp.task('watch', () => {
  gulp.watch(['www/css/dev/**/*.sass', 'www/css/svg/*.svg'], gulp.series('css:dev'));
  gulp.watch('www/css/svg/*.svg', gulp.series('svg'));
});

gulp.task('watch:build', () => {
  gulp.watch(['www/css/dev/**/*.sass', 'www/css/svg/*.svg'], gulp.series('css:build'));
  gulp.watch('www/css/svg/*.svg', gulp.series('svg'));
});

//---------------------------
//         images
//---------------------------

gulp.task('img:deploy', () => {
  return gulp.src([
      'www/img/**/*',
      '!www/img/{favicon,favicon/**}',
      ])
    .pipe($.if(['**/*.{png,gif,jpg,jpeg}'], $.tinypng('uADCgt8EVCaDEw1srmkHvZ-16YJL2Vis')))
    .pipe($.if(['**/*.svg'], $.svgmin()))
    .pipe(gulp.dest('deploy/img'));
});

//---------------------------
//          files
//---------------------------

gulp.task('files:deploy', () => {
  return gulp.src(['www/{*.*,.*}', '!www/svg.html', 'www/php/**/*', 'www/css/fonts/**/*', 'www/img/favicon/**/*'], {base: 'www'})
    .pipe(gulp.dest('deploy'));
});

gulp.task('del:deploy', () => {
  const del = require('del');
  return del('deploy');
});

//---------------------------
//          init
//---------------------------

gulp.task('default', gulp.series('svg', 'css:dev', gulp.parallel('watch','browser-sync')));
gulp.task('build', gulp.series('svg', 'css:build', gulp.parallel('watch:build','browser-sync')));
gulp.task('deploy', gulp.series('del:deploy', gulp.parallel(gulp.series('svg', 'css:deploy'), 'img:deploy', 'js:deploy', 'files:deploy')));