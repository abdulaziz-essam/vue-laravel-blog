import { createRouter, createWebHistory } from 'vue-router'
import homeComponent from '../components/HomeComponent.vue'
import Setting from '../components/Setting.vue'
import Login from '../components/Login.vue'
import Register from '../components/Register.vue'
const routes = [
  { path: '/', redirect: '/home' },
  { path: '/home', component: homeComponent },
  { path: '/setting', component: Setting },
  { path: '/register', component: Register },
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
