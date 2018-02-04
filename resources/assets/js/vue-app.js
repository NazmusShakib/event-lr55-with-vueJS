import Vue from 'vue';

import App from './App.vue';
import Example from './components/ExampleComponent';
import Example2 from './components/ExampleComponent2';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

const routes = [
    {
        name: 'Example',
        path: 'vue-test/',
        component: Example
    },
    {
        name: 'Example2',
        path: 'vue-test2/',
        component: Example2
    }
];

const router = new VueRouter({routes: routes});
new Vue(Vue.util.extend({ router }, Example)).$mount('#app');
