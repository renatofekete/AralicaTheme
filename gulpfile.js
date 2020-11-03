const gulp = require('gulp')
const sass = require('gulp-sass')
const autoprefixer = require('gulp-autoprefixer')
const babel = require('gulp-babel')
const uglify = require('gulp-uglify')
const rename = require('gulp-rename')
//const zip = require('gulp-zip')

const css = done => {
  gulp
    .src('sass/main.scss')
    .pipe(sass())
    .on('error', sass.logError)
    .pipe(autoprefixer())
    .pipe(rename('style.css'))
    .pipe(gulp.dest('./css'))
    .pipe(
      sass({
        outputStyle: 'compressed'
      })
    )
    .on('error', sass.logError)
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('./css'))
  done()
}

const js = done => {
  gulp
    .src('js/src/app.js')
    .pipe(
      babel({
        presets: ['@babel/env']
      })
    )
    .pipe(uglify())
    .pipe(rename('app.min.js'))
    .pipe(gulp.dest('./js'))
  done()
}

gulp.task('sass', css)
gulp.task('js', js)
gulp.task('default', gulp.parallel(css, js))
gulp.task('watch', () => {
  gulp.watch('./sass/**', gulp.parallel(css))
  gulp.watch('./js/src/**', gulp.parallel(js))
})
