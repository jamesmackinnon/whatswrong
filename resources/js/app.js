import Vue from 'vue'
import VueRouter from 'vue-router'
import { ToggleButton } from 'vue-js-toggle-button'
import InjurySelector from './components/InjurySelector.vue'
import DiagnosesList from './components/DiagnosesList.vue'

Vue.component('ToggleButton', ToggleButton)
Vue.component('InjurySelector', InjurySelector)
Vue.component('DiagnosesList', DiagnosesList)
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

// Global event instance

window.E = new Vue();

// Start app
const app = new Vue({
    el: '#app',
    components: { App },
    router,
});