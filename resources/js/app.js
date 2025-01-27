import { createApp } from "vue"; 
// Importa la función `createApp` de Vue para inicializar la aplicación.

import App from "./App.vue"; 
// Importa el componente raíz de la aplicación (`App.vue`), que contiene la estructura principal.

import router from "./router"; 
// Importa el enrutador definido en el archivo `router.js` para manejar las rutas de la aplicación.

// Crea la aplicación principal de Vue usando el componente raíz
const app = createApp(App);

// Integra el enrutador en la aplicación
app.use(router); 
// Esto permite que todas las rutas definidas estén disponibles en la aplicación.

// Monta la aplicación en el elemento DOM con el ID `app`
app.mount("#app"); 
// Conecta la aplicación de Vue al elemento `<div id="app"></div>` del archivo HTML.
