var gulp = require( 'gulp' ),
	autoprefixer = require( 'autoprefixer' ),
	browserSync = require( 'browser-sync' ).create(),
	postcss = require( 'gulp-postcss' ),
	sass = require( 'gulp-sass' ),
	sourcemaps = require( 'gulp-sourcemaps' );


// CSS via Sass and Autoprefixer
gulp.task( 'css', function () {
	return gulp
		.src( '{style.scss,rtl.scss}' )
		.pipe( sourcemaps.init() )
		.pipe( sass( {
			outputStyle: 'expanded',
			indentType: 'tab',
			indentWidth: '1'
		} ).on( 'error', sass.logError ) )
		.pipe( postcss( [
			autoprefixer( 'last 2 versions', '> 1%' )
		] ) )
		.pipe( sourcemaps.write( 'maps' ) )
		.pipe( gulp.dest() );
} );

// Init broswer sync
gulp.task( 'browserSyncInit', function () {
	browserSync.init( {
		open: 'external',
		proxy: 'wp', // This should be address of your localhost
		port: 80, // Port your local server listens to
//		online: true, // Removes the delay on init
	} );
	browserSync.reload();
} );

// Watch everything
gulp.task( 'watch', function () {
	gulp.watch( ['**/*.css', '**/*.scss'], ['css'] );
	gulp.watch( '**/*' ).on( 'change', browserSync.reload );
} );


// Default task (runs at initiation: gulp --verbose)
gulp.task( 'default', ['browserSyncInit', 'watch'] );
