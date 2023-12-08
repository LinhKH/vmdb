import { createRouter, createWebHistory } from 'vue-router'
//page
import Home from '../components/pages/Home.vue'
//login
import Login from '../components/pages/auth/Login.vue'
//forgot
import Forgot from '../components/pages/auth/Forgot.vue'
//Reset password
import ResetPassword from '../components/pages/auth/ResetPassword.vue'
//Reset password success
import ResetPasswordSuccess from '../components/pages/auth/ResetPasswordSuccess.vue'
//notfound
import notFound from '../components/notfound.vue'
import store from '../store'

let initAuthStore = false;

const routes = [

    //page
    {
        path: '/',
        component: Home,
        name: "home",
        meta: { layout: 'default' }
    },
    //login
    {
        path: '/login',
        component: Login,
        name: "login",
        meta: {
            layout: 'login',
            middleware: "guest",
            title: "Login"
        }
    },
    //forgot
    {
        path: '/forgot',
        component: Forgot,
        name: "forgot",
        meta: {
            layout: 'login',
            middleware: "guest",
            title: "Forgot"
        }
    },
    //reset password
    {
        path: '/reset_password',
        component: ResetPassword,
        name: "reset_password",
        meta: {
            layout: 'login',
            middleware: "guest",
            title: "Reset Password"
        }
    },
    //reset password success
    {
        path: '/reset_password_success',
        component: ResetPasswordSuccess,
        name: "reset_password_success",
        meta: {
            layout: 'login',
            middleware: "guest",
            title: "Reset Password Success"
        }
    },    
    //notfound
    {
        path: '/:pathMatch(.*)*',
        component: notFound
    }

]
const router = createRouter({
    history: createWebHistory(import.meta.env.VITE_BASE_PATH),
    routes
})



router.beforeEach((to, from, next) => {

    const handleRoute = (to) => {
        if (to.meta.middleware == "guest") {
            if (store.state.auth.authenticated) {
                next({ name: "home" })
            }
            next()
        } else {
            if (store.state.auth.authenticated) {
                next()
            } else {
                console.log('login')
                next({ name: "login" })
            }
        }
    }
    if (!initAuthStore) {
        store.dispatch('auth/login').then((res) => {
            handleRoute(to);
        });
        initAuthStore = true;
    } else {
        handleRoute(to);
    }

})



export default router