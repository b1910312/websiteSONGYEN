import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
    history: createWebHistory("/"),
    routes: [
        {
            path: '/', redirect: '/trangchu',
        },
        {
            path: '/',
            component: () => import('../layouts/default1.vue'),
            children: [
                {
                    path: 'trangchu',
                    component: () => import('../pages/TrangChu.vue'),
                },
                {
                    path: 'cuahang',
                    component: () => import('../pages/CuaHang.vue'),
                },
                {
                    path: 'chitietsach/:id',
                    component: () => import('../pages/ChiTietSach.vue'),
                },
                {
                    path: 'thanhtoanthanhcong',
                    component: () => import('../pages/thanhtoanthanhcong.vue'),
                },
            
                {
                    path: 'giohang',
                    component: () => import('../pages/GioHang.vue'),
                },
                {
                    path: 'donhang/:id',
                    component: () => import('../pages/DonHang.vue'),
                    props: (route) => ({
                        productsThanhToan: route.query.productsThanhToan,
                    }),
                },
                {
                    path: 'lienhe',
                    component: () => import('../pages/LienHe.vue'),
                },
                {
                    path: 'trochuyen',
                    component: () => import('../pages/ChatPage.vue'),
                },
                {
                    path: 'timkiem',
                    component: () => import('../pages/TimKiem.vue'),
                },
                {
                    path: 'profile/:id',
                    component: () => import('../pages/ProFile.vue'),
                },
                {
                    path: 'gioithieu',
                    component: () => import('../pages/GioiThieu.vue'),
                },

            ]
        },
        {
            path: '/',
            component: () => import('../layouts/blank.vue'),
            children: [
                {
                    path: 'dangnhap',
                    component: () => import('../pages/DangNhap.vue'),
                },
                {
                    path: 'dangky',
                    component: () => import('../pages/DangKy.vue'),
                },
                {
                    path: '/:pathMatch(.*)*',
                    component: () => import('../pages/[...all].vue'),
                },
            ]
        }
    ],
})

export default router
