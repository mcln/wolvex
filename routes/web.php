<?php

/*      "php": "^8.2",
        "filament/filament": "^3.2",
        "laravel/framework": "^11.9",
        "laravel/jetstream": "^5.3",
        "laravel/sanctum": "^4.0",
        "laravel/tinker": "^2.9",
        "livewire/livewire": "^3.0" 
*/

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/servicios', [SiteController::class, 'services'])->name('services');
Route::get('/portafolio', [SiteController::class, 'portfolio'])->name('portfolio');

Route::get('/contacto', [ContactController::class, 'contact'])->name('contact'); // Muestra el formulario
Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store'); // Procesa el formulario

Route::get('/nosotros', [SiteController::class, 'about'])->name('about');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/faq', [SiteController::class, 'faq'])->name('faq');
Route::get('/clientes', [SiteController::class, 'client'])->name('client');