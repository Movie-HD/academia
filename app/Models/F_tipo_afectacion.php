<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class F_tipo_afectacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'descripcion',
        'letra',
        'codigo',
        'nombre',
        'tipo'
    ];

    // Si estás usando el campo 'id' como string, necesitas especificarlo:
    protected $keyType = 'string';
    public $incrementing = false;
}
