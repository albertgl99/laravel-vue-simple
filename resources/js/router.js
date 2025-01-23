import { createRouter, createWebHistory } from "vue-router";

import Home from "./Components/HomeComponent.vue";
import Signup from "./Components/FormComponent.vue";

const routes = [
    { path: "/", name: "Home", component: Home},
    { path: "/signup", name: "Signup", component: Signup},
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router;