'use strict';
const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
sass.compiler = require('node-sass');

gulp.task('sass', function () {
        return gulp.src('./src/scss/all.scss')
            .pipe(sass().on('error', sass.logError))
            .pipe(gulp.dest('./dist'));
    }
);

gulp.task('javascript', function () {
        return gulp.src([
            /**
             * node module scripts here
             */
            'src/js/main.js'
        ], {sourcemaps: true})
            .pipe(concat('all.js'))
            .pipe(gulp.dest('./dist', {sourcemaps: true}))
    }
);

gulp.task('watch', function () {
    gulp.series(['javascript', 'sass']);
    gulp.watch('./src/scss/*.*', gulp.series('sass'));
    gulp.watch('./src/js/*.*', gulp.series('javascript'));
});

gulp.task('default', gulp.series(['javascript', 'sass']));