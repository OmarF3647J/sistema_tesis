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
        ])
        ->where('activo', 'Si')
        ->get();

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
        ->where('activo', 'Si')
        ->find($id);

        // Si no existe o fue eliminado
        if (!$centro) {
            abort(404);
        }

        $centros = Centrosturist::where('activo', 'Si')->get();

        return view('centro', [
            'centros' => $centros,
            'centro' => $centro,
            'guias' => $centro->guiasturist
        ]);
    }
}