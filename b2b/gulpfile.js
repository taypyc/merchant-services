'use strict';

const nodeModulesIgnore = '!**/node_modules/**',
      assetsGlobalBase = 'assets-global/**/',
      assetsGlobalBaseDeploy = 'assets-global/$1/_deploy',
      assetsGlobalOrWwwBase = '**/{assets-global,www}/**/';

const gulp = require('gulp'),
      $ = require('gulp-load-plugins')();

function getFilesPath() {
  const siteFolderPos = __dirname.lastIndexOf('/'),
        siteFolder = __dirname.substring(siteFolderPos + 1),
        projectFolderFull = __dirname.substring(0, siteFolderPos);
  let projectFolder = projectFolderFull.substring(projectFolderFull.lastIndexOf('/')+1) + '/';

  if(projectFolder == 'localhost/') {
    projectFolder = '';
  }

  return {siteFolder:siteFolder, projectFolder:projectFolder};
}

//---------------------------
//       browser-sync
//---------------------------

gulp.task('browser-sync', () => {
  const browserSync = require('browser-sync').create(),
        filesPath = getFilesPath();

  browserSync.init({
    proxy: '127.0.0.1/' + filesPath.projectFolder + filesPath.siteFolder + '/',
    notify: false,
    browser: 'google chrome'
  });
  
  browserSync.watch([nodeModulesIgnore, assetsGlobalOrWwwBase + '*.+(html|php|css|js)'], (event, file) => {
    browserSync.reload(file.replace(/\\/g,"/"));
  });
});

//---------------------------
//           css
//---------------------------

gulp.task('css:dev', () => {
  // return gulp.src([nodeModulesIgnore, assetsGlobalOrWwwBase + 'css/dev/**/*.sass'])
  return gulp.src([nodeModulesIgnore, assetsGlobalOrWwwBase + 'css/dev/*.sass'])
    .pipe($.sourcemaps.init())
    .pipe($.sass({outputStyle: 'expanded'}))
    .on('error', $.notify.onError((err) => {
      return {
        title: 'Sass Error',
        message: err.message
      }
    }))
    .pipe($.sourcemaps.write('./'))
    .pipe($.rename(function(path) {
      let destDirname = /www\/css\/dev/.test(path.dirname) ? path.dirname.replace(/www\/css\/dev/,'www/css') : path.dirname.replace(/assets\-global\/([A-Za-z0-9\-\_]+)\/css\/dev/,'assets-global/$1/css');
      return {
        dirname: destDirname,
        basename: path.basename,
        extname: path.extname
      };
    }))
    .pipe(gulp.dest('./'));
});

gulp.task('css:build', gulp.series('css:dev', () => {
  const autoprefixer = require('autoprefixer');
  return gulp.src([nodeModulesIgnore, assetsGlobalBase + 'css/*.css'])
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
    .pipe(gulp.dest('./'));
}));

gulp.task('css:deploy', gulp.series('css:build', () => {
  return gulp.src([nodeModulesIgnore, assetsGlobalBase + 'css/*.css'])
    .pipe($.sourcemaps.init({loadMaps: true}))
    .pipe($.cleanCss({
      level: {1: {specialComments: 0}}
    }))
    // .pipe($.concat('main.css'))
    .pipe($.sourcemaps.write({addComment: false}))
    .pipe($.rename(function(path) {
      return {
        dirname: path.dirname.replace(/assets\-global\/([A-Za-z0-9\-\_]+)\/css/, assetsGlobalBaseDeploy + '/css'),
        basename: path.basename,
        extname: path.extname
      };
    }))
    .pipe(gulp.dest('./'));
}));

//---------------------------
//            js
//---------------------------

gulp.task('js:deploy', () => {
  return gulp.src(assetsGlobalBase + 'js/*.js')
    .pipe($.uglify())
    .pipe($.rename(function(path) {
      return {
        dirname: path.dirname.replace(/assets\-global\/([A-Za-z0-9\-\_]+)\/js/, assetsGlobalBaseDeploy + '/js'),
        basename: path.basename,
        extname: path.extname
      };
    }))
    .pipe(gulp.dest('./'));
});

gulp.task('js:check', () => {
  return gulp.src(assetsGlobalBase + 'js/*.js')
    .pipe($.eslint())
    .pipe($.eslint.format());
});

//---------------------------
//          watch
//---------------------------

gulp.task('watch', () => {
  gulp.watch([assetsGlobalOrWwwBase + 'css/dev/**/*.sass'], gulp.series('css:dev'));
});

//---------------------------
//         images
//---------------------------

gulp.task('img:deploy', () => {
  return gulp.src([nodeModulesIgnore, assetsGlobalBase + 'img/**/*'])
    .pipe($.if(['**/*.{png,gif,jpg,jpeg}'], $.tinypng('uADCgt8EVCaDEw1srmkHvZ-16YJL2Vis')))
    .pipe($.if(['**/*.svg'], $.svgmin()))
    .pipe($.rename(function(path) {
      return {
        dirname: path.dirname.replace(/assets\-global\/([A-Za-z0-9\-\_]+)\/img/, assetsGlobalBaseDeploy + '/img'),
        basename: path.basename,
        extname: path.extname
      };
    }))
    .pipe(gulp.dest('./'));
});

//---------------------------
//          init
//---------------------------

gulp.task('default', gulp.series('css:dev', gulp.parallel('watch','browser-sync')));
gulp.task('deploy', gulp.parallel('css:deploy', 'js:deploy', 'img:deploy'));