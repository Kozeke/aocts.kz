import Vue from 'vue'
import VueRouter from 'vue-router'
import VueTheMask from 'vue-the-mask'

Vue.use(VueRouter)
Vue.use(VueTheMask)

import App from './components/App'
import Home from './components/Home'
import Login from './components/Login'
import Forget from './components/Forget'
import Reset from './components/Reset'
import ResetPage from './components/ResetPage'

import Register from './components/Register'

import UserProfile from './components/user/profile/UserProfile'
import UserContact from './components/user/profile/UserContact'
import UserDocument from './components/user/profile/UserDocument'
import UserPayment from './components/user/profile/UserPayment'
import UserPassword from './components/user/profile/UserPassword'

import UserDashboard from './components/user/dashboard/UserDashboard'
import UserDeal from './components/user/deal/UserDeal'

import UserActOfCompletedWork from './components/user/documents/UserActOfCompletedWork'
import UserActOfReconciliation from './components/user/documents/UserActOfReconciliation'
import UserPrepaymentInvoices from './components/user/documents/UserPrepaymentInvoices'
import UserAgreements from './components/user/documents/UserAgreements'


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
            meta: { title: "Главная" },
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
            meta: { title: "Авторизация" },
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
            meta: { title: "Авторизация" },
        },
        {
            path: '/forget-pwd',
            name: 'forget',
            component: Forget,
            meta: { title: "Забыли пароль" },
        },
        {
            path: '/reset',
            name: 'reset',
            component: Reset,
            meta: { title: "Забыли пароль" },
        },
        {
            path: '/reset-pwd',
            name: 'reset-pwd',
            component: ResetPage,
            meta: { title: "Забыли пароль" },
        },
        {
            path: '/profile',
            name: 'profile',
            component: UserProfile,
            meta: { title: "Профиль аккаунта" },
        },
        {
            path: '/contacts',
            name: 'contacts',
            component: UserContact,
            meta: { title: "Профиль аккаунта" },
        },
        {
            path: '/document',
            name: 'document',
            component: UserDocument,
            meta: { title: "Профиль аккаунта" },
        },
        {
            path: '/payment',
            name: 'payment',
            component: UserPayment,
            meta: { title: "Профиль аккаунта" },
        },
        {
            path: '/password',
            name: 'password',
            component: UserPassword,
            meta: { title: "Профиль аккаунта" },
        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: UserDashboard,
            meta: { title: "Панель управления" },
        },
        {
            path: '/acts-of-completed-work',
            name: 'acts-of-completed-work',
            component: UserActOfCompletedWork,
            meta: { title: "Финансовые документы" },
        },
        {
            path: '/act-of-reconciliation',
            name: 'act-of-reconciliation',
            component: UserActOfReconciliation,
            meta: { title: "Финансовые документы" },
        },
        {
            path: '/prepayment-invoices',
            name: 'prepayment-invoices',
            component: UserPrepaymentInvoices,
            meta: { title: "Финансовые документы" },
        },
        {
            path: '/agreements',
            name: 'agreements',
            component: UserAgreements,
            meta: { title: "Финансовые документы" },
        },
        {
            path: '/deal',
            name: 'deal',
            component: UserDeal,
            meta: { title: "Договоры" },
        } 
    ],
})

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});

const DEFAULT_TITLE = 'Daris';
router.afterEach((to, from) => {
    Vue.nextTick(() => {
        document.title = to.meta.title  + ' | Daris' || DEFAULT_TITLE;
    });
});

export default app;
