import { createRouter, createWebHistory } from 'vue-router'
import homeComponent from '../components/HomeComponent.vue'
import Setting from '../components/Setting.vue'

const routes = [
  { path: '/', redirect: '/home' },
  { path: '/home', component: homeComponent },
  { path: '/setting', component: Setting },
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
