var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('styles', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'));
    process.stdout('Made a change');
});

gulp.task('watch', function () {
  gulp.watch('_scss/**/*.scss', ['styles']);
});
