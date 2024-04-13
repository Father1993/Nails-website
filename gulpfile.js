import gulp from 'gulp'
import htmlmin from 'gulp-htmlmin'
import cssnano from 'gulp-cssnano'
import terser from 'gulp-terser'

gulp.task('minify-html', function () {
    return gulp
        .src('*.html') // путь к вашим исходникам
        .pipe(htmlmin({ collapseWhitespace: true })) // минифицируем html
        .pipe(gulp.dest('dist')) // путь вывода файлов
})

gulp.task('minify-css', function () {
    return gulp
        .src('assets/src/styles/*.css') // путь к вашим исходникам
        .pipe(cssnano()) // минифицируем css
        .pipe(gulp.dest('dist/assets/src/styles/')) // путь вывода файлов
})

gulp.task('minify-js', function () {
    return gulp
        .src('assets/src/js/*.js') // путь к вашим исходникам
        .pipe(terser()) // минифицируем js
        .pipe(gulp.dest('dist/assets/src/js/')) // путь вывода файлов
})

gulp.task('default', gulp.parallel('minify-html', 'minify-css', 'minify-js'))
