import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Intro from './views/Intro'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Intro
        },
    ],
});

// Start app
const app = new Vue({
    el: '#app',
    components: { App },
    router,
});