import Vue from 'vue'
import VueRouter from 'vue-router'
import { ToggleButton } from 'vue-js-toggle-button'

Vue.component('ToggleButton', ToggleButton)
Vue.use(VueRouter)

import App from './views/App'
import Welcome from './views/Welcome'
import Diagnose from './views/Diagnose'
import ExcelImport from './views/ExcelImport'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Welcome
        },
        {
            path: '/diagnose',
            name: 'diagnose',
            component: Diagnose
        }, 
        {
            path: '/import',
            name: 'import',
            component: ExcelImport
        }, 
    ],
});

// Start app
const app = new Vue({
    el: '#app',
    components: { App },
    router,
});