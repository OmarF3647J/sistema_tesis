<?php

namespace App\Http\Controllers;

use App\Models\Centrosturist;

class SitioController extends Controller
{
    public function inicio()
    {
        $centros = Centrosturist::with([
            'producto',
            'actividadturist',
            'guiasturist',
            'serviciosturist'
        ])->get();

        return view('inicio', compact('centros'));
    }

    public function mostrarCentro($id)
    {
        $centro = Centrosturist::with([
            'producto',
            'actividadturist',
            'guiasturist.actividadturist',
            'serviciosturist'
        ])
        ->where('idcentur', $id)
        ->first();

        // Si no existe
        if (!$centro) {
            abort(404);
        }

        $centros = Centrosturist::all();

        return view('centro', [
            'centros' => $centros,
            'centro' => $centro,
            'guias' => $centro->guiasturist
        ]);
    }
}