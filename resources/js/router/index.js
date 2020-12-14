import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Layout from '../layout';

import errorRouter from './modules/ErrorPage';

const routes = [
    {
        path: '/redirect',
        component: Layout,
        redirect: { name: 'redirect' },
        children: [
            {
                path: '/redirect/:path*',
                component: () => import('@/views/Redirect/index'),
                name: 'redirect'
            },
        ]
    },
    {
        path: '/login',
        component: () => import('@/views/Login/index'),
        name: 'Login',
    },
    {
        path: '',
        redirect: { name: 'Dashboard' },
    },
    {
        path: '/dashboard',
        redirect: { name: 'Dashboard' },
        component: Layout,
        children: [
            {
                path: 'index',
                component: () => import('@/views/Dashboard/index'),
                name: 'Dashboard',
                meta: {
                    title: 'dashboard',
                    icon: 'dashboard'
                }
            }
        ]
    },
    errorRouter,
    {
        path: '/404',
        redirect: { name: 'Page404' },
        component: () => import('@/views/ErrorPage/Page404'),
    },
    {
        path: '*',
        redirect: { name: 'Page404' }
    }
];

const router = new VueRouter({
    routes
});

export default router;