<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Centrosturist;
use App\Models\Guiasturist;




class SitioController extends Controller
{

    

public function inicio(){
    // Cargar los centros que necesites por ID
    $centros = Centrosturist::whereIn('idcentur', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15])->get()->keyBy('idcentur');
    
    // `keyBy` convierte la colección en algo como:
    // [1 => Centro(id=1), 3 => Centro(id=3), 5 => Centro(id=5)]
    return view('inicio', compact('centros'));
}

public function mostrarCentro($id = null)
{
    // Detectamos qué ruta se está usando
    $mapa = [
        'apompal' => 1,
        'arrecifes' => 2,
        'benitojuarez' => 3,
        'cabanasencantadas' => 4,
        'cascadasencantadas' => 5,
        'ceytaks' => 6,
        'elmirador' => 7,
        'jomxuk' => 8,
        'kantasejkan' => 9,
        'lagunadelostion' => 10,
        'lasmargaritas' => 11,
        'manglaressontecomapan' => 12,
        'ranchodonaelia' => 13,
        'rocapartida' => 14,
        'selvaelmarinero' => 15,
    ];

    $ruta = request()->route()->getName();

    if (!isset($mapa[$ruta])) {
        abort(404);
    }

    $id = $mapa[$ruta];
    $vista = $ruta;

    // 👇 NO romper si el centro ya no existe
    $centro = Centrosturist::with([
        'actividadturist',
        'guiasturist.actividadturist'
    ])->find($id);

    if (!$centro) {
        // puedes mostrar página vacía o error controlado
        return view('errors.centro-eliminado', [
            'centros' => Centrosturist::all()
        ]);
    }

    $centros = Centrosturist::all();

    return view($vista, compact('centros', 'centro'));
}


}
