const path = require('path');
const webpack = require('webpack');
const merge = require('webpack-merge');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const environment = require('./environment');
const Clean = require('clean-webpack-plugin');
const AssetsPlugin = require('assets-webpack-plugin');

const PATHS = require('./paths');
console.log(path.resolve(__dirname));

const common = {
    entry: {
        app: [ "babel-polyfill", PATHS.app],
    },
    output: {
        path: PATHS.dist,
        publicPath: "/dist/",
        filename: "[name].bundle.js",
        chunkFilename: "[name].[chunkhash].js",
    },
    watchOptions: {
        aggregateTimeout: 300,
        poll: 1000
    },
    resolve: {
        modules: [
            PATHS.src,
            path.join(PATHS.src, 'Core'),
            path.resolve(PATHS.src, './Core/general/vendors'),
            path.resolve(PATHS.src, './Core/general/sass'),
            path.resolve(PATHS.src, './Core/general/fonts'),
            path.resolve(PATHS.src, './Components/_Partials'),
            path.resolve(PATHS.src, './Core/js'),
            path.resolve(PATHS.src, 'node_modules'),
        ],
        alias: {
            modernizr$: path.resolve(PATHS.src, '.modernizrrc'),
            styles: path.resolve(PATHS.src, './Core/general/sass'),
            Handlebars: 'handlebars/dist/handlebars.min.js',
            vue$: 'vue/dist/vue.common.js',
        },
    },
    module: {
        rules: [
            {
                test: /\.(svg|png|jpg|jpeg|woff|woff2|eot|ttf|htc)$/i,
                exclude: /svg[\/\\]/,
                loader: 'url-loader',
                options: {
                    limit: 10000,
                    name: '[name].[ext]'
                },
            },
            {
                test: /\.svg$/,
                include: /svg[\/\\]/,
                loader: 'svg-sprite-loader?' + JSON.stringify({
                    name: 'icon-' + '[name]',
                    prefixize: true
                })
            },
            {
                test: /\.(cs|cshtml)$/i,
                loader: 'ignore-loader',
            },
            {
                test: /\.js$/,
                exclude: /node_modules\/(?!underscore-es)/,
                loader: 'babel-loader',
                options: {
                    cacheDirectory: true,
                    presets: [
                        ['es2015'],
                    ],
                    plugins: [
                        'transform-object-assign'
                    ]
                }
            },
            {
                test: /\.modernizrrc$/i,
                loader: "modernizr-loader"
            },
            {
                test   : /\.(hbs|handlebars)$/i,
                loader : 'handlebars-loader'
            },
        ]
    },
    plugins: [
         new Clean(['dist'],{
             root: path.join(__dirname, '../'),
             verbose: true,
             exclude: ['webpack-assets.json']
         }),
         new ExtractTextPlugin({
             filename: '[name].bundle-[hash].css',
             allChunks: true,
         }),
         new AssetsPlugin({ path: PATHS.dist, prettyPrint: true })

    ],
    devtool: 'source-map'
};

const sassLoaderPlugins = [
    { loader: 'css-loader', query: { sourceMap: true } },
    {
        loader: 'postcss-loader',
        query: {
            config: path.join(PATHS.build, 'postcss.config.js'),
            sourceMap: true
        }
    },
    { loader: 'resolve-url-loader', query: { sourceMap: true, silent: true } },
    { loader: 'sass-loader', query: { sourceMap: true } },
];

const productionConfig = {
    module: {
        rules: [
            {
                test: /\.scss$/,
                loader: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: sassLoaderPlugins,
                }),
            },
        ],
    },

    plugins: [
        new webpack.LoaderOptionsPlugin({
            minimize: true,
            debug: false
        }),
        new webpack.optimize.UglifyJsPlugin({
            sourceMap: true,
            compress: {
                warnings: false,
                unsafe: true,
                drop_console: false
            },
            output: {
                comments: false
            }
        }),
        new webpack.DefinePlugin({
            'process.env': {
                NODE_ENV: JSON.stringify('production'),
            },
        }),
    ],
};

const devConfig = {
    module: {
        rules: [
            {
                test: /\.scss$/,
                loader: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: sassLoaderPlugins,
                }),
            }
        ],
    },
    plugins: [
        new webpack.optimize.CommonsChunkPlugin({
            async: true,
            minChunks: Infinity
        }),
        //new webpack.HotModuleReplacementPlugin(),
        new webpack.NamedModulesPlugin()

    ],
    output: {
        pathinfo: true
    },
    //devtool: 'cheap-source-map',
    stats: {
         children: false,
    },
    devServer: {
        port: 8081,
        headers: {
            "Access-Control-Allow-Origin": "*",
            "Access-Control-Allow-Credentials": 'true'
        },
      /*  hot: true,*/
        publicPath: '/dist/',
        watchOptions: {
            aggregateTimeout: 300,
            poll: 1000
        }
    },
};


module.exports = function (env) {
    if (env.target !== environment.production) {
        return merge(common, devConfig);
    }
    return merge(common, productionConfig);
};
