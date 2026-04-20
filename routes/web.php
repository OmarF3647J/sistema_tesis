<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SitioController;
use App\Http\Controllers\CentrosturistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return redirect('/dashboard');
});

Route::get('/', [SitioController::class, 'inicio'])->name('inicio');

Route::get('/centro/{nombre}', [SitioController::class, 'centro'])->name('centro.mostrar');


/*
|--------------------------------------------------------------------------
| Centros turísticos (páginas públicas)
|--------------------------------------------------------------------------
*/

Route::get('/apompal', [SitioController::class, 'mostrarCentro'])->name('apompal');
Route::get('/arrecifes', [SitioController::class, 'mostrarCentro'])->name('arrecifes');
Route::get('/benitojuarez', [SitioController::class, 'mostrarCentro'])->name('benitojuarez');
Route::get('/cabanasencantadas', [SitioController::class, 'mostrarCentro'])->name('cabanasencantadas');
Route::get('/cascadasencantadas', [SitioController::class, 'mostrarCentro'])->name('cascadasencantadas');
Route::get('/ceytaks', [SitioController::class, 'mostrarCentro'])->name('ceytaks');
Route::get('/elmirador', [SitioController::class, 'mostrarCentro'])->name('elmirador');
Route::get('/jomxuk', [SitioController::class, 'mostrarCentro'])->name('jomxuk');
Route::get('/kantasejkan', [SitioController::class, 'mostrarCentro'])->name('kantasejkan');
Route::get('/lagunadelostion', [SitioController::class, 'mostrarCentro'])->name('lagunadelostion');
Route::get('/lasmargaritas', [SitioController::class, 'mostrarCentro'])->name('lasmargaritas');
Route::get('/manglaressontecomapan', [SitioController::class, 'mostrarCentro'])->name('manglaressontecomapan');
Route::get('/ranchodonaelia', [SitioController::class, 'mostrarCentro'])->name('ranchodonaelia');
Route::get('/rocapartida', [SitioController::class, 'mostrarCentro'])->name('rocapartida');
Route::get('/selvaelmarinero', [SitioController::class, 'mostrarCentro'])->name('selvaelmarinero');

Route::get('/register', function () {
    return Inertia::render('Auth/Register');
})->name('register');
/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'centrosturist' => App\Models\Centrosturist::with('actividadturist')->get(),
        'guiasturist' => App\Models\Guiasturist::with('actividadturist')->get(),

        'centrosturist_count' => App\Models\Centrosturist::count(),
        'guiasturist_count' => App\Models\Guiasturist::count(),
        'actividadturist' => App\Models\Actividadturist::count(),
        'serviciosturist' => App\Models\Serviciosturist::count(),
        'producto' => App\Models\Producto::count(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Rutas protegidas
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/about', fn () => Inertia::render('About'))->name('about');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('centrosturist', App\Http\Controllers\CentrosturistController::class);
    Route::resource('guiasturist', App\Http\Controllers\GuiasturistController::class);
    Route::resource('actividadturist', App\Http\Controllers\ActividadturistController::class);
    Route::resource('serviciosturist', App\Http\Controllers\ServiciosturistController::class);
    Route::resource('producto', App\Http\Controllers\ProductoController::class);

    Route::post('updatecentrosturist', [App\Http\Controllers\CentrosturistController::class, 'updatecentrosturist'])->name('updatecentrosturist');
    Route::post('updateguiasturist', [App\Http\Controllers\GuiasturistController::class, 'updateguiasturist'])->name('updateguiasturist');

    Route::get('/centrosturist/{centrosturist}/pdf', [CentrosturistController::class, 'pdf'])->name('centrosturist.pdf');

});


/*
|--------------------------------------------------------------------------
| Auth routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';