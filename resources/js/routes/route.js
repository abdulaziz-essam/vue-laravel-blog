import { createRouter, createWebHistory } from 'vue-router';
import SettingComponent from '../components/setting.vue'
import HomeComponent from '../components/HomeComponent.vue'
  const routes = [
    {
      path: '/',
      name: 'home',
      component: HomeComponent
    },
    {
      path: '/setting',
      name: 'setting',
      component: SettingComponent
    }
  ];
  const router = createRouter({
    history: createWebHistory(),
    routes,
  });
export default router;
