
require('../bootstrap');

window.Vue = require('vue');

Vue.component('button-create-component', require('../components/item/ButtonCreateComponent.vue'));

const app = new Vue({
    el: '#js-content'
});
