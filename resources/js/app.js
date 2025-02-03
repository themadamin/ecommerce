import { createApp, h } from 'vue'
import {createInertiaApp, Link, Head} from '@inertiajs/vue3'
import Layout from "Shared/Layout";
import {ZiggyVue} from "ziggy-js";


createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        let page = pages[`./Pages/${name}.vue`]
        page.default.layout = page.default.layout || Layout
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Link", Link)
            .component("Head", Head)
            .use(ZiggyVue)
            .mount(el)
    },
})
