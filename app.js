import 'modernizr';

// base styles
// import './core/general/sass/core.scss';

import 'vue-custom';
import 'lazysizes';

import './Components/Booking/BasketSummary/js/basketSummary';

import logger from 'logger';
import componentLoader from 'componentLoader';

const log = logger.create('app');

class App {
    static run() {
        new App();
    }

    loadDynamicModules() {
        const importAll = r =>  r.keys().forEach(r);

        require.ensure([], require => {
            if (document.addEventListener) {
                const objectFitImages = require('object-fit-images');
                objectFitImages();
            }

            //load all grobal icons
            if (typeof DOMParser !== 'undefined') {
                const svgs = require.context("general/svg", true, /^\.\/.*\.svg/);
                importAll(svgs);
            }
        }, 'polyfills');
    }

    constructor() {
        log.info('Loading App...');
        this.loadDynamicModules();

        componentLoader.load();
    }
}

App.run();
