import { createRouter, createWebHistory } from "vue-router";

import homepageIndex from '../Pages/homepage.vue'
import findjobsIndex from '../Pages/findjobs.vue'
import notfoundIndex from '../components/notfound.vue'

const routes = [
    {
        path: '/',
        name: 'homepage',
        component: homepageIndex
    }, 
    {
        path: '/findjobs',
        name: 'findjobs',
        component: findjobsIndex
    }, {
        path: '/:pathMatch(.*)*',
        name: 'notfound',
        component: notfoundIndex
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router