import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import HomeComponent from './components/HomeComponent.vue';
import SettingComponent from './components/setting.vue'
import router from './routes/route'
const app = createApp({});

app.component('example-component', ExampleComponent);
app.component('home', HomeComponent);
app.component('setting', SettingComponent);
app.use(router);
app.mount('#app');
