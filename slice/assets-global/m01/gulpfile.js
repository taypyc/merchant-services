'use strict';

const gulp = require('gulp'),
      $ = require('gulp-load-plugins')(),
      sass = require('gulp-sass')(require('sass'));

//---------------------------
//           svg
//---------------------------

gulp.task('svg', function () {
  return gulp.src('css/svg/*.svg')
    .pipe($.svgmin())
    .pipe($.cheerio({
      run: function ($) {
        // $('[fill]').removeAttr('fill');
        // $('[stroke]').removeAttr('stroke');
        // $('[style]').removeAttr('style');
      },
      parserOptions: {xmlMode: true}
    }))
    .pipe($.replace('&gt;', '>')) // cheerio plugin create unnecessary string '&gt;', so replace it.
    .pipe($.svgSprite({
      mode: {
        symbol: {
          dest: '.',
          prefix: '.icon-%s',
          dimensions: '%s',
          sprite: 'css/fonts/icons.svg',
          render: {
            sass: {
              template: '../dev.templates/icons-template.sass',
              dest: 'css/dev/import/icons.sass'
            }
          },
          example: {
            template: '../dev.templates/icons-template.html',
            dest: 'css/svg.html'
          },
        }
      }
    }))
    .pipe(gulp.dest('./'));
});

//---------------------------
//           css
//---------------------------

gulp.task('css:dev', () => {
  return gulp.src('css/dev/*.sass')
    .pipe($.sourcemaps.init())
    .pipe(sass({outputStyle: 'expanded'}))
    .on('error', $.notify.onError((err) => {
      return {
        title: 'Sass Error',
        message: err.message
      }
    }))
    .pipe($.sourcemaps.write('./'))
    .pipe(gulp.dest('css/'));
});

gulp.task('css:build', gulp.series('css:dev', () => {
  const autoprefixer = require('autoprefixer');
  return gulp.src('css/*.css')
    .pipe($.sourcemaps.init())
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
    .pipe($.sourcemaps.write('./'))
    .pipe(gulp.dest('css/'));
}));

gulp.task('css:deploy', gulp.series('css:build', () => {
  return gulp.src(['css/*.css'])
    .pipe($.sourcemaps.init({loadMaps: true}))
    .pipe($.cleanCss({
      level: {1: {specialComments: 0}}
    }))
    .pipe($.sourcemaps.write({addComment: false}))
    .pipe(gulp.dest('_deploy/css/'));
}));

//---------------------------
//            js
//---------------------------

gulp.task('js:deploy', () => {
  return gulp.src('js/*.js')
    .pipe($.uglify())
    .pipe(gulp.dest('_deploy/js/'));
});

gulp.task('js:check', () => {
  return gulp.src('js/*.js')
    .pipe($.eslint())
    .pipe($.eslint.format());
});

//---------------------------
//          watch
//---------------------------

gulp.task('watch', () => {
  gulp.watch(['css/dev/**/*.sass', 'css/svg/*.svg'], gulp.series('css:dev'));
  gulp.watch('css/svg/*.svg', gulp.series('svg'));
});

gulp.task('watch:build', () => {
  gulp.watch(['css/dev/**/*.sass', 'css/svg/*.svg'], gulp.series('css:build'));
  gulp.watch('css/svg/*.svg', gulp.series('svg'));
});

//---------------------------
//         images
//---------------------------

gulp.task('img:deploy', () => {
  return gulp.src(['img/**/*'])
    .pipe($.if(['**/*.{png,gif,jpg,jpeg}'], $.tinypng('uADCgt8EVCaDEw1srmkHvZ-16YJL2Vis')))
    .pipe($.if(['**/*.svg'], $.svgmin()))
    .pipe(gulp.dest('_deploy/img/'));
});

//---------------------------
//          files
//---------------------------

gulp.task('fonts:deploy', () => {
  return gulp.src(['css/fonts/**/*'])
    .pipe(gulp.dest('_deploy/css/fonts/'));
});

gulp.task('video:deploy', () => {
  return gulp.src(['video/**/*'])
    .pipe(gulp.dest('_deploy/video/'));
});

gulp.task('vendors:deploy', () => {
  return gulp.src(['vendors/**/*'])
    .pipe(gulp.dest('_deploy/vendors/'));
});

gulp.task('del:deploy', () => {
  const del = require('del');
  return del('_deploy');
});

//---------------------------
//          init
//---------------------------

gulp.task('default', gulp.series('svg', 'css:dev', 'watch'));
gulp.task('deploy', gulp.series('del:deploy', gulp.parallel(gulp.series('svg', 'css:deploy')), 'js:deploy', 'img:deploy', 'fonts:deploy', 'video:deploy', 'vendors:deploy'));