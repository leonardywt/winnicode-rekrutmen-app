import { createRouter, createWebHistory } from "vue-router";

import homepageIndex from '../components/homepage.vue'
import notfoundIndex from '../components/notfound.vue'

const routes = [
    {
    path: '/',
    name: 'homepage',
    component: homepageIndex
},{
    path:'/:pathMatch(.*)*',
    name:'notfound',
    component: notfoundIndex
}
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router