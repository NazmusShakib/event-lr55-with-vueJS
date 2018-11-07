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
    { path: '/login', component: Login, name: 'Login' },
    { path: '/register', component: Register, name: 'Register' },
    { path: '*', component: require('../components/Errors/404'), name: '404' },
    {
        path: '/',
        component: DashboardLayout,
        redirect: '/dashboard',
        children: [
            {
                path: 'dashboard',
                name: 'Dashboard',
                component: Dashboard
            },
            {
                path: 'user',
                name: 'User Profile',
                component: UserProfile
            },
            {
                path: 'table',
                name: 'Table List',
                component: TableList
            },
            {
                path: 'typography',
                name: 'Typography',
                component: Typography
            },
            {
                path: 'icons',
                name: 'Icons',
                component: Icons
            },
            {
                path: 'maps',
                name: 'Maps',
                meta: {
                    hideFooter: true
                },
                component: Maps

            },
            {
                path: 'notifications',
                name: 'Notifications',
                component: Notifications
            }
        ]
    }
];

export default index;
