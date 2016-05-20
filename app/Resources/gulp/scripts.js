'use strict';

var gulp = require('gulp'),
    concat = require('gulp-concat'),
    config = require('./config'),
    uglify = require('gulp-uglify');

gulp.task('scripts', function () {
    return gulp.src(config.scripts)
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(config.dir.scripts));
});