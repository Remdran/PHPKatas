var gulp = require('gulp');
var phpspec = require('gulp-phpspec');
var run = require('gulp-run');
var notify = require('gulp-notify');

gulp.task('test', function () {
    gulp.src('spec/**/*.php')
        .pipe(run('cls'))
        .pipe(phpspec('', { notify: true, clear: true }))
        .on('error', notify.onError({
            title: 'Fail',
            message: 'The test failed',
            sound: 'none'
        }))
        .pipe(notify({
            title: 'Success',
            message: 'All tests have passed',
            sound: 'none'
        }));

});

gulp.task('watch', function () {
    gulp.watch(['spec/**/*.php', 'src/**/*.php'], ['test']);
});

gulp.task('default', ['test', 'watch']);