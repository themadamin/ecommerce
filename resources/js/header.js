import {createApp} from "vue";
import Header from 'Components/layout/Header.vue';
import {createPinia} from "pinia";
import axios from "axios";
import router from "Router/index";

createApp(Header)
    .use(router)
    .use(createPinia())
    .mount('#header')

axios.defaults.baseURL = 'http://localhost:8080/api';

