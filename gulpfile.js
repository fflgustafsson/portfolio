// Gulp

var gulp = require('gulp');
var sass = require('gulp-sass');
var minify = require('gulp-minify');

gulp.task('sass', function(){
  return gulp.src('theme/src/scss/*.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('theme/dist'))
});

gulp.task('watch', function(){
  gulp.watch('theme/src/scss/main.scss', ['sass']);
  gulp.watch('theme/src/scss/**/*.scss', ['sass']);
})