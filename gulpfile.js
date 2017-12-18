// Gulp

var gulp = require('gulp');
var sass = require('gulp-sass');
var minify = require('gulp-minify');

gulp.task('sass', function(){
  return gulp.src('theme/src/scss/main.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('theme/dist'))
});
 
// gulp.task('compress', function() {
//   gulp.src('src/js/main.js')
//     .pipe(minify({
//         ext:{
//             src:'-debug.js',
//             min:'.js'
//         },
//         exclude: ['tasks'],
//         ignoreFiles: ['.combo.js', '-min.js']
//     }))
//     .pipe(gulp.dest('dist'))
// });

gulp.task('watch', function(){
  gulp.watch('theme/src/scss/*.scss', ['sass']);
})