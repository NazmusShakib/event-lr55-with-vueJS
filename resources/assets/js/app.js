require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import Task from './components/task/Task.vue';
import TaskCreate from './components/task/TaskCreate.vue';

const routes = [
    {
        path: '/',
        components: {
            taskIndex: Task
        }
    },
    {
        path: '/task/create',
        component: TaskCreate,
        name: 'TaskCreate'
    },
];

const router = new VueRouter({ routes });

const app = new Vue({ router }).$mount('#app');
