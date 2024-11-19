import { createMemoryHistory, createRouter } from 'vue-router'

import Home from '../Pages/Home.vue'
import About from '../Pages/About.vue'

const routes = [
  { path: '/', component: Home },
  { path: '/about', component: About },
]

const router = createRouter({
  history: createMemoryHistory(),
  routes,
})

export default router;