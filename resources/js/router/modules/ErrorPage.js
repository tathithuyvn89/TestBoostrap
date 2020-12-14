import Layout from '@/layout';

const errorRoutes = {
    path: '/error',
    component: Layout,
    redirect: 'noredirect',
    name: 'ErrorPages',
    meta: {
      title: 'errorPages',
      icon: '404',
    },
    children: [
      {
        path: '404',
        component: () => import('@/views/ErrorPage/Page404'),
        name: 'Page404',
        meta: { title: 'page404' },
      },
    ],
};

export default errorRoutes;