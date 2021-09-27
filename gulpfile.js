const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
// const minify = require('gulp-minify');


gulp.task( 'styles', ()=>{
  return gulp.src('scss/*.scss')
  .pipe(sass({outputStyle:'compressed'}).on('error', sass.logError))
  .pipe(gulp.dest('style/css'))
})

gulp.task( 'watch', () =>{
  return gulp.watch('scss/*.scss', (done) =>{ 
    gulp.series(['styles']) (done)
  })
})
