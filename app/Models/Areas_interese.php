<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas_interese extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'investigador_id'
    ];
    protected $table = 'Areas_intereses';
}
