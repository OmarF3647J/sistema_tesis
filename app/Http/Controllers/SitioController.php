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
    dd($id);

    $centro = Centrosturist::where('idcentur', $id)->first();

    dd($centro);
}
}