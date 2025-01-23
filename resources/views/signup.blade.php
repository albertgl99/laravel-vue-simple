<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/js/app.js')
</head>
<body>
    <div id="app" class="bg-gray-100 flex items-center justify-center h-screen">
        <form-component></form-component>
    </div>
</body>
</html>