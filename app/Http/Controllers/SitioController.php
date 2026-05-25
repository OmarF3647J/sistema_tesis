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

public function mostrarCentro()
{
    // Mapeo de rutas a IDs
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

    // 🔴 SI la ruta no existe en el mapa → no revienta
    if (!isset($mapa[$ruta])) {
        return redirect('/')
            ->with('error', 'Centro no encontrado');
    }

    $id = $mapa[$ruta];

    // 🔴 evitar crash si el centro fue eliminado
    $centro = Centrosturist::with([
        'actividadturist',
        'guiasturist.actividadturist'
    ])->where('idcentur', $id)->first();

    if (!$centro) {
        return redirect('/')
            ->with('error', 'Este centro ya no está disponible');
    }

$centro = Centrosturist::with('actividadturist')->find($id);

$guias = Centrosturist::with('guiasturist.actividadturist')->find($id);

if (!$centro) {
    return redirect('/')
        ->with('error', 'Este centro ya no existe');
}

return view($vista, compact('centros', 'centro', 'guias'));
}

   

}
