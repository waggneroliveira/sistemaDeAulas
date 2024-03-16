<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

require __DIR__ . '/panel.php';

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('Client.pages.pge-home');
})->name('home');

Route::get('/bem-vindo', function () {
    return view('Client.pages.pge-welcome');
})->name('welcome');

Route::get('/signup-inst', function () {
    return view('Client.pages.pge-singup-institutional');
})->name('signup-inst');

Route::get('/signup-pers', function () {
    return view('Client.pages.pge-signup-personal');
})->name('signup-pers');

Route::get('/login', function () {
    return view('Client.pages.pge-login');
})->name('login');

Route::get('/password', function () {
    return view('Client.pages.pge-set-password');
})->name('set-password');

Route::get('/contato', function () {
    return view('emails.contato');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact/envia', [SendEmailController::class, 'enviarEmail'])->name('send');

// Route::get('/dashboard', function () {
//     return view('Admin.dashboard');
// });
