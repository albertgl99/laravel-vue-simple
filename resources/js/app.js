import { createApp } from "vue";
import FormComponent from "./Components/FormComponent.vue";

const app = createApp({});
app.component("form-component", FormComponent);
app.mount("#app");
