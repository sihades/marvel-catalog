'use strict';

var gulp = require('gulp'),
    clean = require('gulp-clean'),
    config = require('./config'),
    del = require('del');

gulp.task('clean-styles', del.bind(null, [config.dir.styles]));
gulp.task('clean-scripts', del.bind(null, [config.dir.scripts]));

gulp.task('clean', [
    'clean-styles', 'clean-scripts'
]);
