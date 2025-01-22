import {createMemoryHistory, createRouter} from 'vue-router';
import Dashboard from "Views/Dashboard";

const router = createRouter({
    history: createMemoryHistory(),
    routes: [
        {path: '/', name: 'dashboard', component: Dashboard}
    ]
})

export default router
