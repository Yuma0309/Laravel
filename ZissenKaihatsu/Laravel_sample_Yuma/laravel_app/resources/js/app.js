import './bootstrap';
import { createApp } from 'vue';
import MyComponent from './components/MyComponent.vue';

const app = createApp(MyComponent);

app.mount('#app');
