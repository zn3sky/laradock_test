
require('../bootstrap');

window.Vue = require('vue');

Vue.component('create-form-component', require('../components/item/CreateFormComponent.vue'));

const app = new Vue({
    el: '#js-content'
});
