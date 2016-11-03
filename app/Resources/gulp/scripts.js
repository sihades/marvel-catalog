'use strict';

var gulp = require('gulp'),
    concat = require('gulp-concat'),
    config = require('./config'),
    uglify = require('gulp-uglify'),
    babel = require('gulp-babel');

gulp.task('scripts', function () {
    return gulp.src(config.scripts)
        .pipe(babel({
            presets: ['es2015', 'react'],
            only: [
                './app/Resources/assets/jsx/',
            ],
            compact: false
        }))
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(config.dir.scripts));
});
