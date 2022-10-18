import { createRouter, createWebHistory } from 'vue-router'
import rutes from "./rutes.js"

const router = createRouter({
    history: createWebHistory(),
    routes: rutes
})

export default router