import Vue from 'vue';

/*  usage: v-init:format="targetField" format="lorem $token ipsum"
    Loads value of attribute specified after v-init: ('format') into a field on the model ('targetField') */
Vue.directive('init', function (el, binding, vnode) {
    const templateAttributeName = binding.arg;
    const targetField = binding.expression;
    const templateString = vnode.data.attrs[templateAttributeName];

    el.removeAttribute(templateAttributeName);

    vnode.context[targetField] = templateString;
});