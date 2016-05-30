// --------------------------------------------------
// Dependencias
// --------------------------------------------------

var gulp         = require('gulp'),

	// Helpers
	gutil        = require('gulp-util'),                              // Utilidades, log etc.
	plumber      = require('gulp-plumber'),                           // Para não quebrar os "pipes" caso aconteça algum erro e pare de rodar o watch por exemplo.

	// CSS
	sass         = require('gulp-sass'),                              // SASS ᕙ(⌐■_■)ᕗ
	autoprefixer = require('gulp-autoprefixer'),                      // Adiciona os vendor prefixes automaticamente
	minifyCss    = require('gulp-minify-css'),                        // Comprime e otimiza o css

	// JS
	jshint       = require('gulp-jshint'),                            // "dicas" sobre o js
	stripDebug   = require('gulp-strip-debug'),                       // Remove os debugs como: console.log, alert etc.
	uglify       = require('gulp-uglify'),                            // Comprime o js

	// IMG
	imagemin     = require('gulp-imagemin'),                          // Otimiza as imagens
	newer        = require('gulp-newer'),                             // Compara o destino com a origem
	svgstore     = require('gulp-svgstore'),

	// DEPLOY
	cache        = require('gulp-cached'),                            // Cria cache na memoria para os arquivos que subiram no servidor
	browserSync  = require('browser-sync').create();                  // Atualiza o browser a cada modificação. Funciona melhor junto a extenção Livereload instalada no browser


// --------------------------------------------------
// Varáveis principais
// --------------------------------------------------

// Origens
var paths = {
	style:     ['./assets/style/**/*.scss'],
	script:    ['./assets/script/**/*.js'],
	images:    ['./assets/images/**/*', '!./assets/images/sprite/*'],
	sprite:    ['./assets/images/sprite/*.svg'],
};

// Destino dos arquivos compilados
var dest = './dist/';


// --------------------------------------------------
//  Tasks
// --------------------------------------------------

// Compila o SASS e otimiza o CSS
gulp.task('sass', function() {
	return gulp.src(paths.style)
	.pipe(sass().on('error', sass.logError))
	//.pipe(minifyCss())
	.pipe(autoprefixer("last 2 version", "> 1%", "ie 8"))
	.pipe(gulp.dest(dest+'style/'));
});


// Compila o css critico
gulp.task('inlineCss', ['sass'], function() {
	return gulp.src('./assets/style/essential.scss')
	.pipe(sass().on('error', sass.logError))
	.pipe(minifyCss())
	.pipe(gulp.dest(dest+'style/'));
});


// Otimiza JS
gulp.task('script', ['jshint'], function() {
	return gulp.src(paths.script)
	.pipe(plumber())
	.pipe(newer(dest+'script/'))
	//.pipe(stripDebug())
	//.pipe(uglify())
	.pipe(gulp.dest(dest+'script/'));
});

	// __JS hint
	gulp.task('jshint', function() {
		return gulp.src(['assets/script/**/*', '!./assets/script/vendor/**/*'])
		.pipe(jshint())
		.pipe(jshint.reporter('default'))
	});


// Otimiza imagens
gulp.task('images', function() {
	return gulp.src(paths.images)
	.pipe(plumber())
	.pipe(imagemin({
		progressive: true,
		optimizationLevel: 7,
	}))
	.pipe(gulp.dest(dest+'images/'));
});


// SVG Sprite
gulp.task('sprite', function() {
	return gulp.src(paths.sprite)
	.pipe(svgstore())
	.pipe(gulp.dest(dest+'images/'));
});


// Cria o servidor para sincronizar o browser
gulp.task('browser-sync-setup', function() {
	browserSync.init({
		proxy: "localhost/vicium"
	});
});


// Verifica alterações
gulp.task('watch', function() {
	gulp.watch(paths.sprite, ['sprite',    browserSync.reload] );
	gulp.watch(paths.images, ['images',    browserSync.reload] );
	gulp.watch(paths.style,  ['inlineCss', browserSync.reload] );
	gulp.watch(paths.script, ['script',    browserSync.reload] );
});


// Task padrão
gulp.task('default', ['watch', 'browser-sync-setup' ]);

gutil.log(gutil.colors.green   ('  __    __  __     ______     __     __  __     __    __    '));
gutil.log(gutil.colors.green   (' /\\ \\  / / /\\ \\   /\\  ___\\   /\\ \\   /\\ \\/\\ \\   /\\ "-./  \\   '));
gutil.log(gutil.colors.green   (' \\ \\ \\/ /  \\ \\ \\  \\ \\ \\____  \\ \\ \\  \\ \\ \\_\\ \\  \\ \\ \\-./\\ \\  '));
gutil.log(gutil.colors.magenta ('  \\ \\__/    \\ \\_\\  \\ \\_____\\  \\ \\_\\  \\ \\_____\\  \\ \\_\\ \\ \\_\\ '));
gutil.log(gutil.colors.magenta ('   \\/_/      \\/_/   \\/_____/   \\/_/   \\/_____/   \\/_/  \\/_/ '));