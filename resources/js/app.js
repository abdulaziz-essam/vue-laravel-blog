import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import HomeComponent from './components/HomeComponent.vue';

const app = createApp({});

app.component('example-component', ExampleComponent);
app.component('home', HomeComponent);

app.mount('#app');
