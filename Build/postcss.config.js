const path = require('path');
const yargs = require('yargs');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const postcssFlexbugsFixes = require('postcss-flexbugs-fixes');
const postcssAssets = require('postcss-assets');
const pixrem = require('pixrem');
const postcssInlineSvg = require('postcss-inline-svg');
const postcssObjectFitImages = require('postcss-object-fit-images');
const postcssFilterGradient = require('postcss-filter-gradient');
const postcssOpacity = require('postcss-opacity');
const environment = require('./environment');

const PATHS = require('./paths');

module.exports = () => {
    const argv = yargs.argv;

    const supportedBrowsers = ['last 3 versions', 'ie 9'];

    const config = {
        plugins: [
            postcssAssets({ loadPaths: [path.resolve(PATHS.src, 'Core/general/img/')] }),
            autoprefixer({ browsers: supportedBrowsers }),
            postcssFlexbugsFixes(),
            pixrem({ atrules: true }),
            postcssInlineSvg({ removeFill: true, path: path.resolve(PATHS.src, 'Core/general/svg/') }),
            postcssObjectFitImages(),
            postcssFilterGradient(),
            postcssOpacity()
        ],
    };

    if (argv.env.target === environment.production) {

        config.plugins = config.plugins.concat([
            cssnano({
                safe: true,
                zindex: false,
                autoprefixer: { remove: false, browsers: supportedBrowsers },
                discardComments: { removeAll: true },
                convertValues: { length: false },
            }),
        ]);
    }

    return config;
};
