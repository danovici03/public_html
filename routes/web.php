<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Models\User;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/register-user', function () {
    return view('register-user');
});
Route::get('/booking', function () {
    return view('booking');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('search', [DoctorController::class, 'search'])->name('search');

Route::get('/list', [DoctorController::class, 'doctors']);
Route::get('/detail-page/{id}', [DoctorController::class, 'doc']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard-user', function () {
    return view('admin.dashboard-user');
})->middleware(['auth'])->name('dashboard-user');

Route::get('/pacienti', function () {
    return view('admin.pacienti');
})->middleware(['auth'])->name('dashboard');

Route::get('/jurnal', function () {
    return view('admin.jurnal');
})->middleware(['auth'])->name('jurnal');

Route::get('/mesaje', function () {
    return view('admin.mesaje');
})->middleware(['auth'])->name('mesaje');

Route::get('/colegi', function () {
    return view('admin.colegi');
})->middleware(['auth'])->name('colegi');

Route::get('/profil', function () {
    return view('admin.docprofile');
})->middleware(['auth'])->name('docprofile');

Route::get('/scrisoare', function () {
    return view('admin.scrisoare');
})->middleware(['auth'])->name('scrisoare');


require __DIR__.'/auth.php';
