import './bootstrap';

import { createApp } from 'vue';

import app from './components/app.vue';
import router from './router';
import '../css/app.css'
import 'preline'

createApp(app).use(router).mount('#app');