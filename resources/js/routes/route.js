import { createRouter, createWebHistory } from 'vue-router'
import homeComponent from '../components/HomeComponent.vue'
import Setting from '../components/Setting.vue'

const routes = [
  { path: '/home', component: Setting },
  { path: '/setting', component: Setting },
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
