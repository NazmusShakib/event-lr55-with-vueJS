/*require('./bootstrap');
window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue'));
const app = new Vue({
    el: '#app'
});
*/

import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App'


Vue.use(VueRouter)
// router setup
import routes from './routes/routes'

// configure router
const router = new VueRouter({
    routes, // short for routes: routes
    linkExactActiveClass: 'nav-item active'
})


/* eslint-disable no-new */
new Vue({
    el: '#app',
    render: h => h(App),
    router
});