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
    ]);
});
