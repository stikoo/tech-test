import Vue from 'vue';

class EventEmitter {
    constructor() {
        this.bus = new Vue();
    }

    on(event, callback) {
        this.bus.$on(event, callback);
    }

    off(event, callback) {
        this.bus.$off(event, callback);
    }

    emit() {
        const [event, ...args] = arguments;
        this.bus.$emit(event, ...args);
    }
}

export default new EventEmitter();


