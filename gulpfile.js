var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('styles', function() {
    gulp.src('_scss/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css/'));
});

gulp.task('watch', ['styles'], function () {
  gulp.watch('_scss/**/*.scss', ['styles']);
});

gulp.task('default', ['watch'], function(){});
