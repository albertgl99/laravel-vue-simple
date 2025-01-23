<template>
    <div>
        <header class="p-4 bg-blue-600 text-white">
            <nav>
                <ul class="flex space-x-4">
                    <li><router-link to="/">Home</router-link></li>
                    <li><router-link to="/signup">Sign Up</router-link></li>
                </ul>
            </nav>
        </header>
        <main class="p-4">
            <router-view /> <!-- Aquí se renderizan las rutas -->
        </main>
    </div>
</template>

<script>
export default {
    name: "App",
};
</script>

