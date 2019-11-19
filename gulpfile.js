var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var prefix = require('gulp-autoprefixer');

var sassFiles = 'sass/*.scss',
    cssDest = './';

gulp.task('styles', function() {
    return gulp.src(sassFiles)
    	.pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(prefix("last 1 version", "> 1%", "ie 8"))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(cssDest));
});

// gulp.task('copy-dep', function() {
//     gulp
//     	.src(['./node_modules/bootstrap/dist/js/bootstrap.min.js', './node_modules/popper.js/dist/umd/popper.min.js', './node_modules/jquery-match-height/dist/jquery.matchHeight-min.js'])
//     	.pipe(gulp.dest('./js/lib'));
//     gulp
//     	.src(['./node_modules/font-awesome/font-awesome/*.scss'])
//     	.pipe(gulp.dest('./sass/lib/font-awesome'));
//     gulp
//     	.src(['./node_modules/font-awesome/fonts/*'])
//     	.pipe(gulp.dest('./fonts/font-awesome'));
// });

gulp.task('sync', () => {
    gulp.watch('sass/**/*.scss', (done) => {
        gulp.series('styles')(done);
    });
});

// Temporary include browser Sync(by default browser-sync doesnt start)
// all options here https://www.browsersync.io/docs/gulp -> https://www.browsersync.io/docs/options
gulp.task('default', gulp.series('styles', 'sync'));
