<?php

use App\Models\FormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');



Route::post('/submit-form', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:form_submissions,email',
        'password' => 'required|string|min:8',
    ], [
        'name.required' => 'El nombre es obligatorio.',
        'email.required' => 'El correo electronico es obligatorio.',
        'email.email' => 'Introduce una dirección de correo valida',
        'password.required' => 'La contraseña es obligatoria',
    ]);

    FormSubmission::create([
        'name'=> $validated['name'],
        'email'=> $validated['email'],
        'password'=> bcrypt($validated['password']),
    ]);

    // Devuelve un JSON con el mensaje de éxito
    return response()->json(['message' => 'Formulario enviado correctamente.']);
});
