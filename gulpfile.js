/* gulpfile.js */
var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

// source and distribution folder
var
    source = 'src/',
    dest = 'css/';

var bower_components_path = 'bower_components/';

// Bootstrap scss source
var bootstrapSass = {
    in: 'node_modules/bootstrap-sass/',
    out: dest + 'bootstrap/'
};

// copy bootstrap required fonts to dest
gulp.task('fonts', function () {
    return gulp
        .src(bootstrapSass.in + 'assets/fonts/**/*')
        .pipe(gulp.dest(bootstrapSass.out + 'fonts/'));
});

// compile bootstrap
gulp.task('bootstrap', ['fonts'], function () {
    return gulp.src(source + 'scss/bootstrap.scss')
        .pipe(sass({
            outputStyle: 'nested',
            precison: 3,
            errLogToConsole: true,
            includePaths: [
                bootstrapSass.in + 'assets/stylesheets',
                bower_components_path
            ]
        }).on('error', sass.logError))
        .pipe(gulp.dest(bootstrapSass.out + 'css/'));
});


gulp.task('app', function () {
    return gulp.src(source + 'scss/app.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(dest));
});

gulp.task('app:watch', function () {
    gulp.watch([
        source + 'scss/app/*.scss',
        source + 'scss/*.scss'
    ], ['app']);
});

gulp.task('bootstrap:watch', function () {
    gulp.watch([
        source + 'scss/_variables.scss',
        source + 'scss/bootstrap.scss',
        source + 'scss/bootstrap-custom/*.scss',
        source + 'scss/bootstrap-custom/**/*scss',
    ], ['bootstrap']);
});

gulp.task('bootstrap-select', function () {
    return gulp.src(source + 'scss/bootstrap-select.scss')
        .pipe(sass({
            includePaths: [
                bower_components_path
            ]
        }).on('error', sass.logError))
        .pipe(gulp.dest(dest));
});

gulp.task('bs:watch', function () {
    gulp.watch([
        source + 'scss/bootstrap-select.scss'
    ], ['bootstrap-select']);
});

gulp.task('production', function () {
    return gulp.src([
        bower_components_path + 'jquery/dist/jquery.js',
        bootstrapSass.in + 'assets/javascripts/bootstrap.js',
        bower_components_path + 'bootstrap-select/dist/js/bootstrap-select.js',
        source + 'js/app.js'
    ])
        .pipe(concat('app.js'))
        .pipe(gulp.dest('js'))
        .pipe(rename('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js'));
});

gulp.task('default', ['app:watch', 'bootstrap:watch']);