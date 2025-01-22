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
        />
        <small v-if="errors.name" class="text-red-500">{{ errors.name }}</small>
      </div>
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input
          type="email"
          id="email"
          v-model="form.email"
          class="mt-1 block w-full p-2 border rounded-md"
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
import axios from "axios";

export default {
  data() {
    return {
      form: {
        name: "",
        email: "",
      },
      errors: {},
      successMessage: '',
    };
  },
  methods: {
    async submitForm() {
      try {
        this.errors = {}; // Limpiar errores anteriores
        const response = await axios.post("/submit-form", this.form);
        this.successMessage = response.data.message
        this.form.name = "";
        this.form.email = "";
      } catch (error) {
        if (error.response && error.response.data.errors) {
          this.errors = error.response.data.errors; // Mostrar errores del backend
        } else {
          alert("Something went wrong.");
        }
      }
    },
  },
};
</script>
