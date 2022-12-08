<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Red_institucional extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'nombre',
        'tipo_red_institucion_id',
        'investigador_id'
    ];
    protected $table = 'redes_institucionales';
}
