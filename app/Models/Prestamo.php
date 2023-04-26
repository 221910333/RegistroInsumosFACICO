<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $table= 'prestamos';
    protected $fillable = [
        'nom_solicitante',
        'no_cuenta',
        'telefono',
        'unidad_aprendizaje',
        'profesor',
        'id_aula',
        'id_licenciatura',
        'id_insumo',
        'fecha_solicitud',
        'fecha_entrega'

    ];
}

?>
