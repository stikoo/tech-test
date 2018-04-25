import logger from './logger';
import page from './page';

const log = logger.create('screen');

//See /src/Core/general/sass/settings/breakpoints.scss
const breakpoints = {
    mobile: 544,
    tablet: 768,
    desktop: 1024
};

class Screen {
    constructor() {
        this.onBreakpointChangeHandlers = [];
        this.breakpoints = breakpoints;
        this.latestBreakpoint = this.currentBreakpoint();
        this.screenSizes = Object.keys(breakpoints);
        page.onResizeFinished(this._onPageResizeFinished.bind(this));
    }

    _onPageResizeFinished() {
        const bp = this.currentBreakpoint();
        if (bp !== this.latestBreakpoint) {
            log.debug("BREAKPOINT CHANGE was " + this.latestBreakpoint + " now " + bp);
            this.latestBreakpoint = bp;
            const currentSize = this.getScreenSize(bp);
            this._onBreakpointChange(currentSize);    
        }
    }

    getScreenSize(breakpoint) {
        return this.screenSizes.find(size => breakpoints[size] === breakpoint);
    }
    
    _onBreakpointChange(screenSize) {
        this.onBreakpointChangeHandlers.forEach(cb => cb(screenSize));
    }
    
    onBreakpointChange(callback) {
        log.debug('Registering onBreakpointChange handler');
        this.onBreakpointChangeHandlers.push(callback);
    }
    
    currentBreakpoint() {
        if (this.isMobile()) {
            return breakpoints.mobile;
        } else if (this.isTablet()) {
            return breakpoints.tablet;
        } else {
            return breakpoints.desktop;
        }
    }

    isMobile() {
        return page.width() < breakpoints.tablet;
    }

    isTablet() {
        return page.width() <= breakpoints.desktop;
    }

    isDesktop() {
        return page.width() > breakpoints.desktop;
    }

    getScreenOrientation() {
        const words = screen.orientation.type.split('-');
        const orientationName = words[0];
        return orientationName.charAt(0).toUpperCase() + orientationName.slice(1);
    }
}

export default new Screen();
