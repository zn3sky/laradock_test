
require('../bootstrap');

window.Vue = require('vue');

Vue.component('button-create-component', require('../components/item/ButtonCreateComponent.vue'));
Vue.component('button-edit-component', require('../components/item/ButtonEditComponent.vue'));

const app = new Vue({
    el: '#js-content'
});
