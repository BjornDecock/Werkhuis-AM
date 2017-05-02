var
  // modules installed
  gulp = require('gulp'),
  browserSync = require('browser-sync').create(),
  pug = require('gulp-pug'),

  // app folders
  folder = {
    src: 'src/',
    build: 'build/'
  }
;

// pug to html
gulp.task('pug', function buildHTML() {
  return gulp.src('src/index.pug')
  .pipe(pug({
    pretty: true
  }))
  .pipe(gulp.dest('build'));
});

// Live Reload
gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./build"
        }
    });
});
