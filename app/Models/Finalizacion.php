<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finalizacion extends Model
{
    use HasFactory;
    protected $table = "_finalizacion_util";
    protected $fillable = [
        'Avances',
        'Fecha_avance',
        'Precio',
        'proyecto_id'
    ];
}
