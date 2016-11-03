'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    config = require('./config'),
    minifyCss = require('gulp-minify-css');

gulp.task('styles', function () {
    return gulp.src(config.sass)
        .pipe(concat('main.min.css'))
        .pipe(sass({style: 'compressed'}).on('error', sass.logError))
        .pipe(minifyCss())
        .pipe(gulp.dest(config.dir.styles));
});
