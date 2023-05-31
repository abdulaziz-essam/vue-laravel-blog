import { createApp } from 'vue';
import router from './routes/route'
import Vuex from 'vuex';
const app = createApp({});

// app.component('example-component', ExampleComponent);
// app.component('home', HomeComponent);
// app.component('setting', SettingComponent);
app.use(router);
app.use(Vuex)
app.mount('#app');

