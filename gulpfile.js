var gulp = require('gulp');
// Requires the gulp-sass plugin
var sass = require('gulp-sass');
//var browserSync = require('browser-sync').create();
var livereload = require('gulp-livereload');


gulp.task('hello', function() {
  console.log('Hello Gulp!!!!');
});

var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded'
};

gulp.task('sass', function(){
  return gulp.src('assets/src/sass/*.scss')
    //.pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(sass(sassOptions).on('error', sass.logError)) // this prevent sass stop when error
    .pipe(gulp.dest('assets/src/css'))
    .pipe(livereload());
});
gulp.task('changes', function(){
  return gulp.src('*')
  .pipe(livereload());
})

/*gulp.task('browserSync', function() {
  browserSync.init({
    server: {
      baseDir: 'app'
    },
  })
    })*/

// Gulp watch syntax
gulp.task('watch', ['sass'], function (){
  livereload.listen();
  gulp.watch('assets/src/*.scss', ['sass']);
  // Reloads the browser whenever HTML or JS files change
 /// gulp.watch('*.html', ['changes']); 
  gulp.watch('*.php', ['changes']); 
  gulp.watch('templates/*.php');
  gulp.watch('includes/*.php');
  gulp.watch('assets/src/js/*.js', ['changes']); 
  // Other watchers
});
