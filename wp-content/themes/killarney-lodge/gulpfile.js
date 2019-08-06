'use strict';
const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const autoprefixer = require('autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
sass.compiler = require('node-sass');

gulp.task('sass', function () {
        return gulp.src('./src/scss/all.scss')
            .pipe(sass().on('error', sass.logError))
            .pipe(sourcemaps.init())
            .pipe(postcss(
                [
                    autoprefixer()
                ]
            ))
            .pipe(sourcemaps.write('.'))
            .pipe(gulp.dest('./dist'));
    }
);

gulp.task('js', function () {
        return gulp.src(
            [
                './src/js/vendor/**/*.js',
                './src/js/main.js'
            ]
        )
            .pipe(concat('all.js'))
            .pipe(gulp.dest('./dist'))
    }
);

gulp.task('watch', function () {
    gulp.series(['js', 'sass']);
    gulp.watch('./src/scss/**/*.*', gulp.series('sass'));
    gulp.watch('./src/js/**/*.*', gulp.series('js'));
});

gulp.task('default', gulp.series(['js', 'sass']));