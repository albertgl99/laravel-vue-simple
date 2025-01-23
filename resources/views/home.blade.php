<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel Vue Form</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.tailwindcss.com"></script>
  @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <div id="app">
    <home-component></form-component>
  </div>
</body>
</html>
