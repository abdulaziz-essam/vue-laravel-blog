import { createApp } from 'vue';
import router from './routes/route'

const app = createApp({});

// app.component('example-component', ExampleComponent);
// app.component('home', HomeComponent);
// app.component('setting', SettingComponent);
app.use(router);
app.mount('#app');

