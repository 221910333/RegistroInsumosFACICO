<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;
use App\Models\Aula;
use App\Models\Licenciatura;
use App\Models\Insumo;
use App\Models\Hora;
use App\Models\Numero;

class SystemController extends Controller{

    public function prestamo(){
        $aulas = Aula::all();
        $licenciaturas = Licenciatura::all();
        $insumos = Insumo::all();
        $horas = Hora::all();

        return view('welcome', compact('aulas', 'licenciaturas', 'insumos','horas'));
    }
    public function numeros2a(Request $request){
        $id_insumo = $request->get('id_insumo');
        $numeros = Numero::where('id_insumo', $id_insumo)->get();
        return view('numeros2a')
        ->with(['numeros' => $numeros]);
    }

    public function save(Request $request){
        $this->validate($request, [
            'telefono'=>'required',
        ]);
        $prestamo= new Prestamo;
        $prestamo -> nom_solicitante = $request->input('nom_solicitante');
        $prestamo -> no_cuenta = $request->input('no_cuenta');
        $prestamo -> telefono = $request->input('telefono');
        $prestamo -> unidad_aprendizaje = $request->input('unidad_aprendizaje');
        $prestamo -> profesor = $request->input('profesor');
        $prestamo -> id_aula = $request->input('id_aula');
        $prestamo -> id_licenciatura = $request->input('id_licenciatura');
        $prestamo -> id_insumo = $request->input('id_insumo');
        $prestamo -> fecha_solicitud = $request->input('fecha_solicitud');
        $prestamo -> fecha_entrega = $request->input('fecha_entrega');
        $prestamo -> save();

        
         return redirect()->to('/');
        

    }
}
