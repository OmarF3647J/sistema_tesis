<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SitioController;
use App\Http\Controllers\CentrosturistController;
use App\Http\Controllers\GuiasturistController;
use App\Http\Controllers\ActividadturistController;
use App\Http\Controllers\ServiciosturistController;
use App\Http\Controllers\ProductoController;
use App\Models\Centrosturist;
use App\Models\Guiasturist;
use App\Models\Actividadturist;
use App\Models\Serviciosturist;
use App\Models\Producto;

/*
|--------------------------------------------------------------------------
| RUTAS PÚBLICAS
|--------------------------------------------------------------------------
*/

// Inicio
Route::get('/', [SitioController::class, 'inicio'])->name('inicio');

// CENTROS TURÍSTICOS (DINÁMICO - ÚNICO ENFOQUE)
Route::get('/centro/{nombre}', [SitioController::class, 'mostrarCentro'])
    ->name('centro.mostrar');

/*
|--------------------------------------------------------------------------
| AUTH / REGISTRO
|--------------------------------------------------------------------------
*/

Route::get('/register', function () {
    return Inertia::render('Auth/Register');
})->name('register');

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'centrosturist' => Centrosturist::with('actividadturist')->get(),
        'guiasturist' => Guiasturist::with('actividadturist')->get(),

        'centrosturist_count' => Centrosturist::count(),
        'guiasturist_count' => Guiasturist::count(),
        'actividadturist' => Actividadturist::count(),
        'serviciosturist' => Serviciosturist::count(),
        'producto' => Producto::count(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| RUTAS PROTEGIDAS
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/about', fn () => Inertia::render('About'))->name('about');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('centrosturist', CentrosturistController::class);
    Route::resource('guiasturist', GuiasturistController::class);
    Route::resource('actividadturist', ActividadturistController::class);
    Route::resource('serviciosturist', ServiciosturistController::class);
    Route::resource('producto', ProductoController::class);

    Route::post('updatecentrosturist', [CentrosturistController::class, 'updatecentrosturist'])
        ->name('updatecentrosturist');

    Route::post('updateguiasturist', [GuiasturistController::class, 'updateguiasturist'])
        ->name('updateguiasturist');

    Route::get('/centrosturist/{centrosturist}/pdf', [CentrosturistController::class, 'pdf'])
        ->name('centrosturist.pdf');
});

/*
|--------------------------------------------------------------------------
| SITEMAP
|--------------------------------------------------------------------------
*/

use Spatie\Sitemap\SitemapGenerator;

Route::get('/generar-sitemap', function () {
    SitemapGenerator::create('https://ecoturismolostuxtlas.com')
        ->writeToFile(public_path('sitemap.xml'));

    return '¡Sitemap creado con éxito!';
});

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';