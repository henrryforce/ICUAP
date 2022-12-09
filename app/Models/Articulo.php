<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'ano_publicacion',
        'doi',
        'autores',
        'investigador_id',
        'journal_id'
    ];
    protected $table = 'Articulos';
}
