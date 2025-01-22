<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit-form', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email'=> 'required|email',
    ], [
        'name.required' => 'El nombre es obligatorio.',
        'email.required' => 'El correo electronico es obligatorio.',
        'email.email' => 'Introduce una dirección de correo valida',
    ]

);

    // Devuelve un JSON con el mensaje de éxito
    return response()->json(['message' => 'Formulario enviado correctamente.']);
});
