require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import Task from './components/task/Task.vue';
import TaskCreate from './components/companies/CompaniesCreate.vue';

const routes = [
    {
        path: '/',
        components: {
            taskIndex: Task
        }
    },
];

const router = new VueRouter({ routes });

const app = new Vue({ router }).$mount('#app');
