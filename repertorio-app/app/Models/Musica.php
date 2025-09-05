<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    use HasFactory;

    protected $table = 'musicas';

    protected $fillable = [
        'titulo',
        'numero_harpa',
        'numero_coletanea',
        'ritmo',
        'tom',
    ];
}
