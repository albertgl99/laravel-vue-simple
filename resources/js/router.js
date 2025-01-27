import { createRouter, createWebHistory } from "vue-router"; 
// Importa las funciones necesarias de Vue Router:
// - `createRouter`: Para crear un enrutador.
// - `createWebHistory`: Para usar el historial de navegación del navegador (sin hash `#` en las URL).

import Home from "./Components/HomeComponent.vue"; // Importa el componente para la ruta principal (Home).
import Signup from "./Components/FormComponent.vue"; // Importa el componente para la ruta de registro (Signup).

// Define las rutas para la aplicación
const routes = [
    { 
        path: "/", // La ruta raíz de la aplicación (por ejemplo, "/").
        name: "Home", // Nombre de la ruta para identificación.
        component: Home, // Componente que se renderiza cuando la ruta es "/".
    },
    { 
        path: "/signup", // La ruta para la página de registro (por ejemplo, "/signup").
        name: "Signup", // Nombre de la ruta para identificación.
        component: Signup, // Componente que se renderiza cuando la ruta es "/signup".
    },
];

// Crea el enrutador con el historial y las rutas definidas
const router = createRouter({
    history: createWebHistory(), // Usa el historial del navegador para manejar la navegación (en lugar de hash).
    routes, // Incluye las rutas definidas en el objeto `routes`.
});

// Exporta el enrutador para que pueda ser usado en la aplicación principal
export default router;
