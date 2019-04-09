import Vue from 'vue'
import Router from 'vue-router'
import Signup from './components/Signup.vue'
import Homepage from './components/Homepage.vue'
import BoardDetail from './components/board/BoardDetail.vue'

Vue.use(Router)
// window.Vue = require('vue')

const router = new Router({
  routes: [
    {
      path: '/signup',
      name: 'signup',
      component: Signup
    },
    {
      path: '/',
      name: 'homepage',
      component: Homepage
    },
    {
      path: '/board',
      name: 'board_detail',
      component: BoardDetail,
      meta: { requiresAuth: true }
    }
  ]
})

router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.requiresAuth)) {
    // this route requires auth, check if logged in
    // if not, redirect to login page.
    if (!localStorage.getItem('token')) {
      next({
        path: '/',
        // query: { redirect: to.fullPath }
      })
    } else {
      next()
    }
  } else {
    next() // make sure to always call next()!
  }
})

// router.beforeEach((to, from, next) => {
//   if (to.name === "login") {
//     // Redirect user to homepage
//     return next({path: '/'})
//   }
//   // Let the user pass
//   return next()
// })

export default router