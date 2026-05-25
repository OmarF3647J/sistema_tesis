<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Centrosturist;

class SitioController extends Controller
{

    // Página principal
    public function inicio()
    {
        // Obtener todos los centros
        $centros = Centrosturist::all();

        return view('inicio', compact('centros'));
    }


    // Mostrar centro dinámicamente
    public function mostrarCentro($id)
    {

        // Obtener todos los centros
        $centros = Centrosturist::all();

        // Buscar el centro
        $centro = Centrosturist::with([
                'actividadturist',
                'guiasturist.actividadturist'
            ])
            ->where('idcentur', $id)
            ->first();

        // Validar si existe
        if (!$centro) {

            return redirect()
                ->route('inicio')
                ->with('error', 'Centro ecoturístico no encontrado');
        }

        // Guías del mismo centro
        $guias = $centro;

        // Vista única
        return view('centro', compact(
            'centros',
            'centro',
            'guias'
        ));
    }
}