<?php

use App\Models\Siswa;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('profil');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Route::middleware(['auth'])->group(function () {
    Route::resource('/dashboard', DashboardController::class);

    Route::resource('/mastersiswa', SiswaController::class);

    Route::resource('/masterprojects', ProjectsController::class);

    Route::resource('/mastercontact', KontakController::class);

    Route::get('/mastercontact/show_contact_type/iya', [KontakController::class, 'show_jenis_kontak']);

    Route::get('/mastercontact/add_contact_type/iya', [KontakController::class, 'create_jenis_kontak']);

    Route::post('/mastercontact/add_contact_type/rill', [KontakController::class, 'store_jenis_kontak']);

    Route::get('/mastercontact/{id}/edit_contact_type/iya', [KontakController::class, 'edit_jenis_kontak']);

    Route::put('/mastercontact/{id}/edit_contact_type/rill', [KontakController::class, 'update_jenis_kontak']);

    Route::delete('/mastercontact/{id}/delete_jenis', [KontakController::class, 'delete_jenis_kontak']);

    Route::get('/masterprojects/{id}/show', [ProjectsController::class, 'show_new']);

    Route::get('/masterprojects/create/{id}', [ProjectsController::class, 'create']);

    Route::get('/mastercontact/create/{id}', [KontakController::class, 'create']);

    Route::get('/logout', [UserController::class, 'logout']);
});


Route::get('/login', [UserController::class, 'index'])->name('login');

Route::post('/auth', [UserController::class, 'authenticate']);
