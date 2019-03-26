'use strict';

var gulp = require('gulp');
const minify = require('gulp-minify');
let cleanCSS = require('gulp-clean-css');


gulp.task('compress', function () {
    return gulp.src(['public/js/app.js'])
            .pipe(minify())
            .pipe(gulp.dest('public/js/'))
});

gulp.task('minify-css', () => {
    return gulp.src('public/css/app.css')
      .pipe(cleanCSS({compatibility: 'ie8'}))
      .pipe(gulp.dest('public/css/'));
});





