import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import WhatDo from '../views/WhatDo.vue'
import Services from '../views/Services.vue'
import Contact from '../views/Contact.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/what-do',
    name: 'what-do',
    component: WhatDo
  },
  {
    path: '/services',
    name: 'services',
    component: Services
  }
  ,
  {
    path: '/contact',
    name: 'contact',
    component: Contact
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})


export default router
