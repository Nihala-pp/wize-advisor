var gulp = require('gulp');
var uglify = require('gulp-uglify');
var jshint = require('gulp-jshint');
var concat = require('gulp-concat');
var header = require('gulp-header');
var footer = require('gulp-footer');
var commonjs = require('gulp-wrap-commonjs');
var rename = require('gulp-rename');
var del = require('del');

var pkg = require('./package.json');

var buildTime = function () {
    var now = new Date();

    var getMonth = function () {
        if (now.getMonth() + 1 < 10) {
            return "0" + (now.getMonth() + 1);
        }
        return now.getMonth() + 1;
    };
    var getDate = function () {
        if (now.getDate() < 10) {
            return "0" + now.getDate();
        }

        return now.getDate();
    };

    return now.getFullYear() + "-" + getMonth() + "-" + getDate()
};

var paths = {
    scripts: ['jstz.*.js']
};

gulp.task('jshint', [], function () {
    return gulp.src(paths.scripts)
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

gulp.task('concat', ['jshint'], function () {
    return gulp.src(paths.scripts)
        .pipe(concat('jstz.concat.js'))
        .pipe(gulp.dest('dist'))
});

gulp.task('common-js', ['concat'], function () {
    return gulp.src(['dist/jstz.concat.js'])
        .pipe(header('(function (root) {'))
        .pipe(footer("\nif (typeof module !== 'undefined' && typeof module.exports !== 'undefined') {\n" +
                     "    module.exports = jstz;\n" +
                     "} else if ((typeof define !== 'undefined' && define !== null) && (define.amd != null)) {\n" +
                     "    define([], function() {\n" +
                     "        return jstz;\n" +
                     "    });\n" +
                     "} else {\n" +
                     "    if (typeof root === 'undefined') {\n" +
                     "        window.jstz = jstz;\n" +
                     "    } else {\n" +
                     "        root.jstz = jstz;\n" +
                     "    }\n" +
                     "}\n}());\n"))
        .pipe(rename('jstz.js'))
        .pipe(gulp.dest('dist'))
});

gulp.task('uglify', ['common-js'], function () {
    return gulp.src(['dist/jstz.js'])
        .pipe(uglify())
        .pipe(rename('jstz.min.js'))
        .pipe(header('/* jstz.min.js Version: ' + pkg.version + ' Build date: ' + buildTime() + ' */\n'))
        .pipe(gulp.dest('dist'))
});

gulp.task('build', ['uglify'], function () {
    return del([
        'dist/jstz.co*.js'
    ]);
});

gulp.task('watch', function () {
    gulp.watch(paths.scripts, ['build']);
});

gulp.task('default', ['watch', 'build']);