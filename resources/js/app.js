/*require('./bootstrap');
window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue'));
const app = new Vue({
    el: '#app'
});
*/

import Vue from 'vue';
import VueRouter from 'vue-router';

window.axios = require('axios');
import App from './App';

Vue.prototype.$baseURL = 'http://127.0.0.1:8001/api/';
// router setup
import routes from './routes';

// Plugins
import GlobalComponents from './global/globalComponents';
import GlobalDirectives from './global/globalDirectives';
import Notifications from './components/NotificationPlugin';

import localStorage from './services/localStorage';

Vue.prototype.$localStorage = localStorage;


import MyMixin from './services/mixin';

// MaterialDashboard plugin
import MaterialDashboard from './global/material-dashboard';

import Chartist from 'chartist';

// configure router


const router = new VueRouter({
    mode: 'history',
    routes: [
        ...routes
    ], // you may use only 'routes' short for routes: routes
    linkExactActiveClass: 'nav-item active'
});

Vue.use(VueRouter);
Vue.use(MaterialDashboard);
Vue.use(GlobalComponents);
Vue.use(GlobalDirectives);
Vue.use(Notifications);

Vue.use(MyMixin);
// Vue.use(VueNotify)


// global library setup
Object.defineProperty(Vue.prototype, '$Chartist', {
    get() {
        return this.$root.Chartist;
    }
});

/* eslint-disable no-new */
const app = new Vue({
    el: '#app',
    render: h => h(App),
    router,
    data: {
        Chartist: Chartist
    }
});