<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My SPA</title>
    <!-- CSRF Token para solicitudes seguras -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- TailwindCSS CDN (opcional) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <!-- Scripts generados por Vite -->
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Contenedor para Vue -->
    <div id="app"></div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
