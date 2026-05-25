<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Centrosturist;
use App\Models\Guiasturist;
use Illuminate\Support\Str;
class SitioController extends Controller
{

    public function inicio()
    {
        $centros = Centrosturist::all();

        return view('inicio', compact('centros'));
    }

    public function mostrarCentro($nombre)
{
    $centros = Centrosturist::all();

    $centro = Centrosturist::with([
        'actividadturist',
        'guiasturist.actividadturist'
    ])
    ->get()
    ->first(function ($item) use ($nombre) {
        return Str::slug($item->nomcentur) === $nombre;
    });

    if (!$centro) {
        abort(404);
    }

    $vista = $nombre;

    return view($vista, [
        'centros' => $centros,
        'centro' => $centro,
        'guias' => $centro->guiasturist
    ]);
}
}
