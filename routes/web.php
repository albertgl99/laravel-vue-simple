<?php

use App\Models\FormSubmission; // Importa el modelo `FormSubmission` (presumiblemente para guardar los datos del formulario)
use App\Models\User; // Importa el modelo `User` (presumiblemente para manejar los datos del usuario)
use Illuminate\Http\Request; // Importa la clase `Request` de Laravel para manejar las solicitudes HTTP
use Illuminate\Support\Facades\Route; // Importa la clase `Route` para definir las rutas

// RUTA GET: Redirecciona cualquier ruta al archivo 'welcome'
Route::get('/{any}', function () {
    return view('welcome'); // Carga la vista `welcome` como respuesta
})->where('any', '.*'); // Define un patrón para que acepte cualquier ruta (.*)

// RUTA POST: Maneja el registro de un formulario de "signup"
Route::post('/signup', function (Request $request) {
    // Validación de los datos enviados por el formulario
    $validated = $request->validate([
        'name' => 'required|string|max:255', // El nombre es obligatorio, debe ser una cadena y no mayor a 255 caracteres
        'email' => 'required|email|unique:form_submissions,email', // El correo es obligatorio, debe ser válido y único en la tabla `form_submissions`
        'password' => 'required|string|min:8', // La contraseña es obligatoria, debe ser una cadena y al menos 8 caracteres
    ], [
        // Mensajes personalizados para los errores de validación
        'name.required' => 'El nombre es obligatorio.',
        'email.required' => 'El correo electronico es obligatorio.',
        'email.email' => 'Introduce una dirección de correo valida.',
        'password.required' => 'La contraseña es obligatoria.',
    ]);

    // Si la validación pasa, guarda los datos en la tabla `form_submissions`
    FormSubmission::create([
        'name' => $validated['name'], // Guarda el nombre validado
        'email' => $validated['email'], // Guarda el correo validado
        'password' => bcrypt($validated['password']), // Guarda la contraseña encriptada con `bcrypt`
    ]);

    // Devuelve una respuesta JSON con un mensaje de éxito
    return response()->json(['message' => 'Formulario enviado correctamente.']);
});

// RUTA POST: Maneja el inicio de sesión del usuario
Route::post('/login', function (Request $request) {
    // Validación de las credenciales enviadas
    $credentials = $request->validate([
        'email' => 'required|email', // El correo es obligatorio y debe ser válido
        'password' => 'required', // La contraseña es obligatoria
    ]);

    // Busca un usuario que coincida con las credenciales proporcionadas
    $user = User::where('email', $credentials['email'])->first(); // Busca por correo electrónico

    // UNFINISHED //
});
