<template>
  <div class="max-w-md mx-auto bg-white p-8 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Sign Up</h1>
    <form @submit.prevent="submitForm">
      <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input
          type="text"
          id="name"
          v-model="form.name"
          class="mt-1 block w-full p-2 border rounded-md"
          placeholder="Juan"
        />
        <small v-if="errors.name" class="text-red-500">{{ errors.name }}</small>
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input
          type="password"
          id="password"
          v-model="form.password"
          class="mt-1 block w-full p-2 border rounded-md"
          placeholder="Garcia"
        />
        <small v-if="errors.password" class="text-red-500">{{ errors.password }}</small>
      </div>
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input
          type="email"
          id="email"
          v-model="form.email"
          class="mt-1 block w-full p-2 border rounded-md"
          placeholder="juan@gmail.com"
        />
        <small v-if="errors.email" class="text-red-500">{{ errors.email }}</small>
      </div>
      <button
        type="submit"
        class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600"
      >
        Submit
      </button>
    </form>
    <p v-if="successMessage" class="text-green-500 mt-4"> {{ successMessage }}</p>
  </div>
</template>

<script>
import axios from "axios"; // Importa Axios para las solicitudes HTTP

export default {
  data() {
    return {
      form: {
        name: "", // Campo para el nombre
        email: "", // Campo para el correo
        password: "", // Campo para la contraseña
      },
      errors: {}, // Objeto para almacenar errores del backend
      successMessage: '', // Mensaje de éxito
    };
  },
  methods: {
    async submitForm() {
      try {
        this.errors = {}; // Limpia errores previos
        const response = await axios.post("/signup", this.form); // Envía los datos al backend
        this.successMessage = response.data.message; // Almacena el mensaje de éxito
        // Limpia los campos del formulario tras el envío
        this.form.name = "";
        this.form.email = "";
        this.form.password = "";
      } catch (error) {
        if (error.response && error.response.data.errors) {
          this.errors = error.response.data.errors; // Muestra errores del backend si existen
        } else {
          alert("Something went wrong."); // Mensaje genérico para errores inesperados
        }
      }
    },
  },
};
</script>
