const path = require('path');

const getPaths = src => {
    return {
        src: src,
        root: path.resolve(src, '..'),
        build: path.resolve(src, 'Build'),
        dist: path.resolve(src, './dist'),
        app: path.resolve(src, 'app.js')
    };
};

const src = path.resolve(__dirname, '..');

const paths = getPaths(src);

module.exports = paths;
