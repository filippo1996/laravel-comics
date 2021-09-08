require('./bootstrap');

// Require Vue
window.Vue = require('vue').default;

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';

Vue.use(VueRouter);

// Register Vue Components
//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('card-component', require('./components/Card.vue').default);

// Initialize Vue
const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
