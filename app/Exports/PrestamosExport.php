<?php

namespace App\Exports;

use App\Models\Prestamo;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PrestamosExport implements FromCollection, WithHeadings{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Nombre del Solicitante',
            'Numero de Cuenta',
            'Telefono',
            'Unidad_aprendizaje',
            'Profesor',
            'Aula',
            'Licenciatura',
            'Insumo',
            'Fecha_solicitud',
            'Fecha_Entrega'
        ];
    }
    public function collection(){
        $prestamos = DB::table('prestamos')
        ->join('aulas', 'prestamos.id_aula', '=' , 'aulas.id')
        ->join('licenciaturas', 'prestamos.id_licenciatura', '=' , 'licenciaturas.id')
        ->join('insumos', 'prestamos.id_insumo', '=' , 'insumos.id')
        ->select('nom_solicitante','no_cuenta','telefono','unidad_aprendizaje','profesor','aulas.nombre as aula', 'licenciaturas.nombre as licenciatura', 'insumos.nombre as insumo', 'fecha_solicitud', 'fecha_entrega')
        ->whereDate('fecha_solicitud', '>=','2023-02-01')
        ->whereDate('fecha_solicitud', '<=','2023-07-01')
        ->get();
        return $prestamos;
    }
}
