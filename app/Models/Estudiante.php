<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = "_estudiante";
    protected $fillable = [
        'Nom_estudiante',
        'Ape_estudiante',
        'Direccion',
        'Telefono',
        'Tipo_doc',
        'Num_doc'
    ];
}
