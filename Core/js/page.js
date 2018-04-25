import $ from 'jquery';
import logger from './logger';
import _throttle from 'underscore-es/throttle';
import _debounce from 'underscore-es/debounce';

const log = logger.create('page');

class Page {
    constructor() {
        this.window = window;
        this.document = document;
        this.$window = $(window);
        this.window = window;
        this.$html = $('html');
        this.$body = $('body');
        this.$pageWrapper = this.$body.find('.page-wrapper');
        this.onScrollHandlers = [];
        this.onResizeHandlers = [];
        this.onResizeFinishedHandlers = [];
    }

    _onScroll() {
        this.onScrollHandlers.forEach(cb => cb());
    }

    _onResize() {
        this.onResizeHandlers.forEach(cb => cb());
    }

    _onResizeFinished() {
        this.onResizeFinishedHandlers.forEach(cb => cb());
    }

    scrollTop() {
        return this.$window.scrollTop();
    }

    width() {
        return this.$window.width();
    }

    // scrollToTop(speedInMilliseconds = 800) {
    //     log.debug('scrollToTop');
    //     this.$body.add(this.$html).animate({ scrollTop: 0 }, speedInMilliseconds);
    // }

    onScroll(callback) {
        log.debug('onScroll');
        this.onScrollHandlers.push(callback);

        if (this.onScrollHandlers.length === 1) {
            log.debug('registering to onScroll event');
            this.$window.scroll(_throttle(this._onScroll.bind(this), 200));
        }
    }

    onResize(callback) {
        log.debug('onResize');
        this.onResizeHandlers.push(callback);

        if (this.onResizeHandlers.length === 1) {
            log.debug('registering to onResize event');
            this.$window.resize(_throttle(this._onResize.bind(this), 200));
        }
    }

    onResizeFinished(callback) {
        this.onResizeFinishedHandlers.push(callback);

        if (this.onResizeFinishedHandlers.length === 1) {
            log.debug('registering to onResizeFinished event');
            this.$window.resize(_debounce(this._onResizeFinished.bind(this), 200));
        }
    }

    onLoaded(callback) {
        $(document).ready(callback);
    }

    addBodyClass(name) {
        this.$body.addClass(name);
    }

    removeBodyClass(name) {
        this.$body.removeClass(name);
    }

    removeComponent(name) {
        let $component = this.$body.find('[data-component="' + name + '"]');
        $component.remove();
    }
}

export default new Page();
