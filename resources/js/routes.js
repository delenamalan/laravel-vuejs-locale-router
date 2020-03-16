const routes = [
    {
        path: '/',
        component: require('./components/Page/HomePage').default,
    },
    {
        path: '/product',
        component: require('./components/Page/Product/ProductPage').default,
    },
];

export default routes;
