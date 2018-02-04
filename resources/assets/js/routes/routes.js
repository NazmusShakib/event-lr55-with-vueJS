import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)

export default new Router({
    routes: [
        {
            path: 'vue-test/',
            name: 'Example',
            component: Example
        },
        {
            path: 'vue-test2/',
            name: 'Example2',
            component: Example2
        }
    ]
})