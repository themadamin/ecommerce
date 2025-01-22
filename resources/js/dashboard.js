import {createApp} from "vue";
import Dashboard from 'Views/Dashboard';
import {createPinia} from "pinia";
import router from "Router/index.js";

createApp(Dashboard)
    .use(router)
    .use(createPinia())
    .mount('#dashboard')
