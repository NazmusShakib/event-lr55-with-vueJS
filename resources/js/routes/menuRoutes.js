import DashboardLayout from '../pages/Layout/DashboardLayout.vue';

import Dashboard from '../pages/Dashboard.vue';
import UserProfile from '../pages/UserProfile.vue';
import TableList from '../pages/TableList.vue';
import Typography from '../pages/Typography.vue';
import Icons from '../pages/Icons.vue';
import Maps from '../pages/Maps.vue';
import Notifications from '../pages/Notifications.vue';
import UpgradeToPRO from '../pages/UpgradeToPRO.vue';
import Login from '../components/Auth/Login';
import Register from '../components/Auth/Register';


const index = [
    {
        path: '/login',
        component: Login,
        name: 'Login',
        meta: {title: 'Login Page- Example App', guest: true}
    },
    {
        path: '/register', component: Register,
        name: 'Register',
        meta: {title: 'Register Page- Example App', guest: true}
    },
    {path: '*', component: require('../components/Errors/404'), name: '404', meta: {title: 'Not Found - Example App'}},
    {
        path: '/',
        component: DashboardLayout,
        redirect: '/dashboard',
        children: [
            {
                path: 'dashboard',
                name: 'Dashboard',
                component: Dashboard,
                meta: {
                    requireAuth: true,
                    title: 'Dashboard - Example App',
                    metaTags: [
                        {
                            name: 'description',
                            content: 'The home page of our example app.'
                        },
                        {
                            property: 'og:description',
                            content: 'The home page of our example app.'
                        }
                    ]
                }
            },
            {
                path: 'profile',
                name: 'User Profile',
                component: UserProfile,
                meta: {
                    requireAuth: true,
                    title: 'About Page - Example App',
                    metaTags: [
                        {
                            name: 'description',
                            content: 'The profile page of our example app.'
                        },
                        {
                            property: 'og:description',
                            content: 'The profile page of our example app.'
                        }
                    ]
                },
            },
            {
                path: 'table',
                name: 'Table List',
                component: TableList,
                meta: {
                    requireAuth: true,
                    title: 'Table Page - Example App'
                }
            },
            {
                path: 'typography',
                name: 'Typography',
                component: Typography,
                meta: {
                    requireAuth: true,
                    title: 'Typography Page - Example App'
                }
            },
            {
                path: 'icons',
                name: 'Icons',
                component: Icons,
                meta: {
                    requireAuth: true,
                    title: 'Icons Page - Example App'
                }
            },
            {
                path: 'maps',
                name: 'Maps',
                component: Maps,
                meta: {
                    requireAuth: true,
                    hideFooter: true,
                    title: 'Maps Page - Example App'
                }
            },
            {
                path: 'notifications',
                name: 'Notifications',
                component: Notifications,
                meta: {
                    requireAuth: true,
                    title: 'NotificationsPage - Example App'
                }
            }
        ]
    }
];

export default index;
