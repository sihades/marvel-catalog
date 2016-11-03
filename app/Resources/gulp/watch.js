'use strict';

var gulp = require('gulp');

gulp.task('watch', ['build'], function () {
    gulp.watch('app/Resources/assets/**/*.scss', ['styles']);
    gulp.watch('app/Resources/assets/**/*.{js,jsx}', ['scripts']);
});
