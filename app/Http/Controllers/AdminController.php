<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Prestamo;
use App\Models\Insumo;

class AdminController extends Controller{
    public function registros(){
        $registros = DB::table('prestamos')
        ->join('aulas', 'prestamos.id_aula', '=' , 'aulas.id')
        ->join('licenciaturas', 'prestamos.id_licenciatura', '=' , 'licenciaturas.id')
        ->join('insumos', 'prestamos.id_insumo', '=' , 'insumos.id')
        ->select('aulas.nombre as aula', 'licenciaturas.nombre as licenciatura', 'insumos.nombre as insumo', 'prestamos.*' )
        ->orderBy('prestamos.id','asc')
        ->get();
        return view('home', compact('registros'));
    }
    public function detalle(Request $request, $id){
        $prestamos = DB::table('prestamos')
        ->join('aulas', 'prestamos.id_aula', '=' , 'aulas.id')
        ->join('licenciaturas', 'prestamos.id_licenciatura', '=' , 'licenciaturas.id')
        ->join('insumos', 'prestamos.id_insumo', '=' , 'insumos.id')
        ->select('nom_solicitante','no_cuenta','telefono','unidad_aprendizaje','profesor','aulas.nombre as aula', 'licenciaturas.nombre as licenciatura', 'insumos.nombre as insumo', 'fecha_solicitud', 'fecha_entrega')
        ->where('prestamos.id', '=', $id)
        ->get();
        return view("detalle")
        ->with(['prestamos' => $prestamos]);
    }

    ////////////////////////////Altas
    public function form_altas() {

        return view('form_altas');
    }
    function guardar(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
        ]);
        
    $vehiculo = new Insumo;
    $vehiculo->nombre = $request->input("nombre");
  
    $vehiculo->save();
    $vehiculos = Insumo::all();

        return redirect()->route('form_altas');
    }
    public function tablainsumo(){
        $insumos=DB::table('insumos')->get();
        return view('form_altas', compact('insumos'));
    }
     //////////////Borrar Insumo
     public function borrarI(Insumo $id, Request $request){
        $id->delete();
        return redirect()->route("form_altas");
        }
}
