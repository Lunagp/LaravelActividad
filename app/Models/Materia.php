<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $table = "_materia";
    protected $fillable = [
        'Nombre',
        'Descripcion',
    ];
}
