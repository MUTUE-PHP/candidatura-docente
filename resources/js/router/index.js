import { createMemoryHistory, createRouter } from 'vue-router'
import Index from '../Pages/Index.vue';
import ActualizarCandidatura from '../Pages/ActualizarCandidatura.vue';
import NovaCandidatura from '../Pages/NovaCandidatura.vue';
import ReciboCandidatura from '../Pages/ReciboCandidatura.vue';



const routes = [
  { path: '/', component: Index },
  { path: '/nova-candidatura', component: NovaCandidatura },
  { path: '/actualizar-candidatura', component: ActualizarCandidatura },
  { path: '/recibo-candidatura', component: ReciboCandidatura },
]

const router = createRouter({
  history: createMemoryHistory(),
  routes,
})

export default router;