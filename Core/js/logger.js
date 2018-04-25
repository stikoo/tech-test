class Logger {
    constructor(name, color) {
        this.name = name;
        this.color = color;
    }

    log() {
        this._log(console.log, [...arguments]);
    }

    debug() {
        this._log(console.debug, [...arguments]);
    }

    info() {
        this._log(console.info, [...arguments]);
    }

    warn() {
        this._log(console.warn, [...arguments]);
    }

    error() {
        this._log(console.error, [...arguments]);
    }

    table() {
        console.info.apply(console, [`[${this.name}]`]);
        console.table.apply(console, [...arguments]);
    }

    time() {
        console.time(...arguments);
    }

    timeEnd() {
        console.timeEnd(...arguments);
    }

    _log(logFn, args) {
        if (this.color) {
            logFn.apply(console, [`%c[${this.name}]`, `color: ${this.color}`, ...args]);
        } else {
            const argsWithLogger = [`[${this.name}]`, ...args];
            console.log(Array.prototype.slice.call([...argsWithLogger]));
        }
    }
}

class NullLogger {
    log() { }
    debug() { }
    info() { }
    warn() { }
    error() { }
    table() { }
    time() { }
    timeEnd() { }
}

class LoggerFactory {
    constructor() {
        this.colors = ['red', 'green', 'blue', 'orange', 'purple', '#656992', 
            '#baab49', '#36bec1', '#5aafcf', '#d5d44c', '#a03352',
            'cornflowerblue', 'deeppink', 'mediumturquoise', 'teal']; 

        this.counter = 0;
        this.canLog = this.hasConsoleLog();
        this.supportsColors = ['Firefox', 'Chrome'].some(browser => navigator.userAgent.indexOf(browser) !== -1);
        this.nullLogger = new NullLogger();

        this.ensureLogFunctions();
    }
    
    hasConsoleLog() {
        return typeof console !== 'undefined' && typeof console.log === 'function';
    }

    ensureLogFunctions() {
        if (this.canLog) {
            const noop = () => {};
            ['debug', 'info', 'warn', 'error', 'table'].forEach(logFn => console[logFn] = console[logFn] || console.log);
            ['time', 'timeEnd'].forEach(logFn => console[logFn] = console[logFn] || noop);
        }
    }

    create(name) {
        const color = this.supportsColors ? this.colors[this.counter++ % this.colors.length] : null;
        return this.canLog ? new Logger(name, color) : this.nullLogger;
    }
}

export default new LoggerFactory();