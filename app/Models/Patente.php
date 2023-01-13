<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patente extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'resumen',
        'anio_publicacion',
        'investigador_id'
    ];
    protected $table = 'patentes';
}
