const gulp = require('gulp');
const browserSync = require('browser-sync');
const sass = require('gulp-sass');
const cssnano = require('gulp-cssnano');
const notify = require('gulp-notify');
const pixrem = require('pixrem');
const postCssAssets = require('postcss-assets');
const postCss = require('gulp-postcss');
const postCssAutoprefixer = require('autoprefixer');
const postRgbaFallback = require('postcss-color-rgba-fallback');
const postCssExtract = require('postcss-extract');
const postCssPseudoElements = require('postcss-pseudoelements');
const postCssFlexbugsFixes = require('postcss-flexbugs-fixes');
const postCssInlineSvg = require('postcss-inline-svg');
const postCssObjectFitImages = require('postcss-object-fit-images');
const postCssFilterGradient = require('postcss-filter-gradient');
const postCssOpacity = require('postcss-opacity');
const connect = require('gulp-connect-php');
const runSequence = require('gulp-run-sequence');
const flatten = require('gulp-flatten');
const clean = require('gulp-clean');
const php2html = require('gulp-php2html');
const zip = require('gulp-zip');
const fs = require('fs');
const q = require('q');
const glob = require('glob');
const ext_replace = require('gulp-ext-replace');
const sourcemaps = require('gulp-sourcemaps');
const bless = require('gulp-bless');
const rename = require('gulp-rename');
const svgmin = require('gulp-svgmin');


const paths = {
    dist: './dist',
    exports: './dist/source_exports/',
    css: {
        prod: [
            // './Themes/core.bundle.scss',
            './Themes/beach.bundle.scss',
            './Themes/city.bundle.scss',
            './Themes/villas.bundle.scss',
            './Themes/dev.scss'
        ],
        dev: ['./Themes/core.bundle.scss',
            './Themes/beach.bundle.scss',
            './Themes/dev.scss']
    },

    includePaths: [
        './node_modules/susy/sass',
        './Core',
        './Core/general/sass/',
        './Components',
        './Themes'
    ],
    loadPaths: [
        './Core/general/img'
    ],
    svg: './Core/general/svg'
};

const browserPrefix = ['> 1%', 'last 3 versions', 'ie > 7', 'iOS >=7'];

/* Browser Sync */
gulp.task('serve', () => {
    connect.server({}, () => {
        browserSync({
            ghostMode: false,
            proxy: '127.0.0.1:8000',
            tunnel: true
        });
    });
    gulp.watch('./**/*.scss', ['build:dev:css', 'build:ie9']);
    gulp.watch('./**/*.php').on('change', () => {
        browserSync.reload();
    });
});

/* Gulp just watch files */
gulp.task('watch', () => {
    gulp.watch('./**/*.scss', ['build:dev:css', 'build:ie9']);
});

/* Exports components to export path */
gulp.task('build:source_exports', () => {
    const promises = [];

    glob.sync('./Components/*').forEach((filePath) => { // loop required as we need to mimic folder structure
        if (fs.statSync(filePath).isDirectory()) {
            const defer = q.defer();
            const pipeline = gulp.src(
                `${filePath}/**/*.php`)
                .pipe(php2html())
                .pipe(ext_replace('.cshtml'))
                .pipe(gulp.dest(paths.exports + filePath));

            pipeline.on('end', () => {
                /* Copies the (js/scss/hbs) files for this component */
                gulp.src([
                    `${filePath}/**/*.hbs`,
                    `${filePath}/**/js/**/*.js`,
                    `${filePath}/**/sass/**/*.scss`
                ])
                    .pipe(gulp.dest(paths.exports + filePath));

                defer.resolve();
            });

            promises.push(defer.promise);
        }
    });

    return q.all(promises);
});

/* Create a zip file for every folder */
gulp.task('build:zipfiles', () => {
    const promises = [];

    glob.sync(`${paths.exports}/Components/**/*`).forEach((filePath) => {
        if (fs.statSync(filePath).isDirectory()) {
            const defer = q.defer();
            const split = filePath.split('/');
            const zipName = split[split.length - 1];

            const pipeline = gulp.src([
                `${filePath}/**`
            ])
                .pipe(zip(`/zip/${zipName}.zip`))
                .pipe(gulp.dest(filePath));

            pipeline.on('end', () => {
                defer.resolve();
            });

            promises.push(defer.promise);
        }
    });

    return q.all(promises);
});

/* Development build */
gulp.task('build:dev:css', () => {
    return gulp.src(paths.css.dev)

        .pipe(sourcemaps.init())

    // Sass Compilation
        .pipe(sass({
            outputStyle: 'uncompressed',
            includePaths: paths.includePaths
        }).on('error', notify.onError((error) => {
            return error.message;
        })))

        // PostCSS tasks after Sass compilation http://postcss.parts for plugins
        .pipe(postCss([
            postCssAssets({
                loadPaths: paths.loadPaths
            }),
            postCssAutoprefixer({ browsers: browserPrefix }), // Autoprefixes CSS properties for older browsers
            postRgbaFallback(), // Puts rgba fallback in place ;-)
            postCssOpacity(), // Puts opacity fallbacks for older IE
            postCssPseudoElements(), // Replaces :: with : for backwards compatibility
            postCssFlexbugsFixes(), // This project tries to fix all of flexbug's issues.
            pixrem({ atrules: true }),
            postCssInlineSvg({ removeFill: true, path: paths.svg }), // CSS inclines an SVG https://github.com/TrySound/postcss-inline-svg
            postCssObjectFitImages(), // PostCSS plugin that updates the standard object-fit tag to work with the object-fit-images polyfill
            postCssFilterGradient()
        ]))
        .pipe(sourcemaps.write('./'))
        .pipe(browserSync.stream())
        .pipe(gulp.dest(paths.dist));
});

/* Split files for IE9 */
gulp.task('build:ie9', () => {
    return gulp.src(`${paths.dist}/*.css`) // loop through all compiled css files
            .pipe(rename({
                suffix: '.ie9'
            }))
           .pipe(bless())
           // .pipe(cssnano()) use in production build?
           .pipe(gulp.dest(paths.dist)); // output
});

/* Production build */
gulp.task('build:prod:css', () => {
    return gulp.src(paths.css.prod)

    // Sass Compilation...
        .pipe(sass({
            outputStyle: 'uncompressed',
            includePaths: paths.includePaths
        }).on('error', notify.onError((error) => {
            return error.message;
        })))

    // PostCSS tasks after Sass compilation http://postcss.parts for plugins
    .pipe(postCss([
        postCssAssets({
            loadPaths: paths.loadPaths
        }),
        postCssAutoprefixer({ browsers: browserPrefix }), // Autoprefixes CSS properties for older browsers
        postRgbaFallback(), // Puts rgba fallback in place ;-)
        postCssOpacity(), // Puts opacity fallbacks for older IE
        postCssPseudoElements(), // Replaces :: with : for backwards compatibility
        postCssFlexbugsFixes(), // This project tries to fix all of flexbug's issues.
        pixrem({ atrules: true }),
        postCssInlineSvg({ removeFill: true, path: paths.svg }), // CSS inclines an SVG https://github.com/TrySound/postcss-inline-svg
        postCssObjectFitImages(), // PostCSS plugin that updates the standard object-fit tag to work with the object-fit-images polyfill
        postCssFilterGradient()
    ]))

    // Minimise CSS http://cssnano.co
        /*.pipe(cssnano({
            safe: true,
            zindex: false,
            // autoprefixer: { remove: false, browsers: supportedBrowsers },
            discardComments: { removeAll: true },
            convertValues: { length: false }
        }))*/
        .pipe(gulp.dest(paths.dist));
});

/* Copy fonts */
gulp.task('copy:fonts', () => {
    gulp.src('./Core/general/fonts/**/*.{ttf,woff,woff2,eof,eot,svg}')
        .pipe(flatten())
        .pipe(gulp.dest(paths.dist));
});

/* Clean dist folder */
gulp.task('clean:dist', () => {
    return gulp.src(paths.dist, { read: false })
        .pipe(clean());
});

/* Clean dist/source_exports folder */
gulp.task('clean:source_exports', () => {
    return gulp.src(paths.exports, { read: false })
        .pipe(clean());
});

/* Removes all html files from components */
gulp.task('clean:html', () => {
    return gulp.src(`${paths.exports}/**/*.html`, { read: false })
        .pipe(clean());
});

gulp.task('clean:svg', () => {
    return gulp.src(['Core/general/svg/*.svg', '!Core/general/svg/Jet2*.svg'])
                .pipe(svgmin({
                    plugins: [
                        /* {
                            convertColors: {
                                currentColor: true
                            }
                        }, */
                        {
                            removeDimensions: true
                        }
                    ]
                }))
                .pipe(gulp.dest('Core/general/svg'));
});

gulp.task('default', (cb) => {
    runSequence('build:dev:css', 'build:ie9', 'copy:fonts', 'serve', cb);
});

/* Builds dev environment */
gulp.task('build:dev', (cb) => {
    runSequence('build:dev:css', 'build:ie9','copy:fonts', 'serve', cb);
});

/* Builds production environment */
gulp.task('build:prod', (cb) => {
    runSequence('build:prod:css', 'copy:fonts', cb);
});

/* Builds components */
gulp.task('build:components', (cb) => {
    runSequence('clean:source_exports', 'build:source_exports', 'clean:html', 'build:zipfiles', cb);
});
