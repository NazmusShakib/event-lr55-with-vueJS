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
            let routeRoles = to.meta.roles;
            let storageRoles = authService.roles();

            if (routeRoles && storageRoles) {
                if (routeRoles.some(routeRole => storageRoles.includes(routeRole))) {
                    next();
                } else {
                    next({path: '/login'});
                    return false;
                }
            } else {
                next({path: '/login'});
                return false;
            }
        }
    }
    next();
});
