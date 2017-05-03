var
  // modules installed
  gulp = require('gulp'),
  browserSync = require('browser-sync').create(),
  pug = require('gulp-pug'),
  sass = require('gulp-sass');

  // to install - autoprefixer, plumber, sourcemaps, js concat and minify

// sass to css
gulp.task('sass', function(){
  return gulp.src('src/main.scss')
  .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
  .pipe(gulp.dest('build/css'))
  .pipe(browserSync.stream());
})

// pug to html
gulp.task('pug', function buildHTML() {
  return gulp.src('src/index.pug')
  .pipe(pug({pretty: true}))
  .pipe(gulp.dest('build'))
  .pipe(browserSync.stream());
});

// Live Reload
gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./build"
        }
    });
});

// watch task
gulp.task('watch', ['browser-sync', 'sass', 'pug'], function() {
   gulp.watch('src/main.scss', ['sass']);
   gulp.watch('src/sass/**/*.sass', ['sass']);
   gulp.watch('src/index.pug', ['pug']);
   gulp.watch('src/pug/**/*.pug', ['pug']);
   //gulp.watch('src/js/**/*.js', browserSync.reload);
   //gulp.watch('src/*.html', browserSync.reload);
});
