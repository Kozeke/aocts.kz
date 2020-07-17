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


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/register',
            name: 'register',
            component: Register
        },
        {
            path: '/forget-pwd',
            name: 'forget',
            component: Forget
        },
        {
            path: '/reset',
            name: 'reset',
            component: Reset
        },
        {
            path: '/reset-pwd',
            name: 'reset-pwd',
            component: ResetPage
        }
    ],
})

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});

export default app;