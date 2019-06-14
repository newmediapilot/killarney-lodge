'use strict';

let gulp = require('gulp');
let sass = require('gulp-sass');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('./src/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./dist'));
});

gulp.task('watch', function () {
    gulp.watch('./src/scss/*.*', gulp.series('sass'));
    //gulp.watch('./src/js/*.*', gulp.series('javscript'));
});