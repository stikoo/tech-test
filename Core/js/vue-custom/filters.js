import Vue from 'vue';
import dateFormat from 'dateformat';

Vue.filter('time', value => dateFormat(value, 'HH:MM')); // e.g. 09:05
