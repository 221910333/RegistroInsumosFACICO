<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Prestamo;

class AdminController extends Controller{
    public function registros(){
        $registros = DB::table('prestamos')
        ->join('aulas', 'prestamos.id_aula', '=' , 'aulas.id')
        ->join('licenciaturas', 'prestamos.id_licenciatura', '=' , 'licenciaturas.id')
        ->join('insumos', 'prestamos.id_insumo', '=' , 'insumos.id')
        ->join('horas', 'prestamos.id_hora', '=' , 'horas.id')
        ->join('numeros', 'prestamos.id_numero', '=' , 'numeros.id')
        ->select('aulas.nombre as aula', 'licenciaturas.nombre as licenciatura', 'insumos.nombre as insumo', 'horas.nombre as hora', 'numeros.nombre as numero', 'prestamos.*' )
        ->orderBy('prestamos.id','asc')
        ->get();
        return view('home', compact('registros'));
    }
    public function detalle(Request $request, $id){
        $prestamos = DB::table('prestamos')
        ->join('aulas', 'prestamos.id_aula', '=' , 'aulas.id')
        ->join('licenciaturas', 'prestamos.id_licenciatura', '=' , 'licenciaturas.id')
        ->join('insumos', 'prestamos.id_insumo', '=' , 'insumos.id')
        ->join('horas', 'prestamos.id_hora', '=' , 'horas.id')
        ->select('nom_solicitante','no_cuenta','telefono','unidad_aprendizaje','profesor','aulas.nombre as aula', 'licenciaturas.nombre as licenciatura', 'insumos.nombre as insumo', 'fecha_solicitud', 'fecha_entrega')
        ->where('prestamos.id', '=', $id)
        ->get();
        return view("detalle")
        ->with(['prestamos' => $prestamos]);
    }
}
