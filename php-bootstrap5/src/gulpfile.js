const gulp = require("gulp");

const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require("gulp-sourcemaps");


// main 
const distDir = "dist/";
const mainSassSrc = "scss/main.scss";
const distStyleDir = distDir;


const config = {
	autoprefixer: {
		cascade: false,
	},
	sass: {
		outputStyle: "expanded",
	//	includePaths: ["src/scss"],
	},
};

// 
function defaultTask(cb) {
    // place code for your default task here
    console.log("Hello gulp")
    cb();
}


gulp.task("build-css", function (cb) {

    gulp.src(mainSassSrc)
		.pipe(sourcemaps.init())
		.pipe(sass(config.sass).on("error", sass.logError))
		.pipe(gulp.dest(distStyleDir))
		.pipe(sourcemaps.write("."))
		.pipe(gulp.dest(distStyleDir));

	cb();
});

gulp.task("default", gulp.parallel("build-css"));

//exports.default = defaultTask