<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigadore extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'correo_id',
        'centro_adscripcion_id'
    ];
    protected $table = 'investigadores';
}
