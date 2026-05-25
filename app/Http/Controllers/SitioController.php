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

    public function mostrarCentro($slug)
    {
        // Buscar el centro comparando el slug generado
        $centro = Centrosturist::with([
            'actividadturist',
            'guiasturist.actividadturist'
        ])
        ->get()
        ->first(function ($item) use ($slug) {
            return Str::slug($item->nomcentur) === $slug;
        });

        // Si no existe
        if (!$centro) {
            abort(404);
        }

        $centros = Centrosturist::all();

        // La vista tendrá el mismo nombre del slug
        $vista = $slug;

        return view($vista, [
            'centros' => $centros,
            'centro' => $centro,
            'guias' => $centro->guiasturist
        ]);
    }
}
