<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Homepage route
Route::get('/', function () {
    return view('home');
});

// NOTE: The order of routes is important.
// The '/create' route must come before the '/{ninja}' route.

// Route to show all ninjas (index)
Route::get('/ninjas', [NinjaController::class, 'index'])->name('ninjas.index');

// Route to show the form for creating a new ninja
Route::get('/ninjas/create', [NinjaController::class, 'create'])->name('ninjas.create');

// Route to handle the form submission for creating a ninja
Route::post('/ninjas', [NinjaController::class, 'store'])->name('ninjas.store');

// Route to show details for a specific ninja (using Route Model Binding)
Route::get('/ninjas/{ninja}', [NinjaController::class, 'show'])->name('ninjas.show');

// Route to delete a specific ninja
Route::delete('/ninjas/{ninja}', [NinjaController::class, 'destroy'])->name('ninjas.destroy');

