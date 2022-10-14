const gulp = require("gulp");
const path = require("path");
const sass = require("gulp-sass")(require("sass"));
const sourcemaps = require("gulp-sourcemaps");
const open = require("gulp-open");
const util = require("gulp-util");
const minifyCSS = require("gulp-clean-css");
const gulpif = require("gulp-if");
const autoprefixer = require("gulp-autoprefixer");
const log = require("fancy-log");

var Paths = {
  HERE: "./",
  DIST: "dist/",
  CSS: "./assets/css/",
  SCSS_TOOLKIT_SOURCES: "./assets/scss/enserio-styles.scss",
  SCSS: "./assets/scss/**/**",
};

// commando con --production para prod.
var config = {
  production: !!util.env.production,
  develop: !util.env.production,
  path: util.env.path || Paths.CSS,
  scss: util.env.scss || Paths.SCSS_TOOLKIT_SOURCES,
};

gulp.task("compile-scss", function () {
  log("working browsersync -> " + config.scss);
  log(config.develop);
  log(config.production);
  return gulp
    .src(config.scss)
    .pipe(gulpif(config.develop, sourcemaps.init()))
    .pipe(sass().on("error", sass.logError))
    .pipe(config.production ? minifyCSS() : util.noop())
    .pipe(autoprefixer())
    .pipe(gulpif(config.develop, sourcemaps.write(".")))
    .pipe(gulp.dest(config.path));
});

gulp.task("watch", function () {
  gulp.watch(Paths.SCSS, gulp.series("compile-scss"));
});

gulp.task("open", function () {
  gulp.src("index.html").pipe(open());
});

gulp.task("open-app", gulp.parallel("open", "watch"));
