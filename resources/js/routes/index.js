import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

import MenuRoutes from './menuRoutes';


const router = new VueRouter({
    mode: 'history',
    routes: [
        ...MenuRoutes
    ], // you may use only 'routes' short for routes: routes
    linkExactActiveClass: 'nav-item active'
});

export default router


// This callback runs before every route change, including on page load.
router.beforeEach((to, from, next) => {
    NProgress.start();
    NProgress.set(0.1);
    if (to.meta.requireAuth) {
        const token = window.localStorage.getItem('token');
        let user = JSON.parse(window.localStorage.getItem('user'));
        if (!token) {
            next({ path: '/login' });
            return false;
        } else {
            next();
        }
    }
    next();
});

router.afterEach((to, from) => {
    setTimeout(() => NProgress.done(), 500);
});


router.beforeResolve((to, from, next) => {
    // If this isn't an initial page load.
    if (to.name) {
        // Start the route progress bar.
        NProgress.start()
    }
    next()
})

router.afterEach((to, from) => {
    // Complete the animation of the route progress bar.
    NProgress.done()
})
