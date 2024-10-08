<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animais'; 

    protected $fillable = [ # campos de dados preenchiveis
        'id',
        'nome',
        'idade',
        'imagem',
    ];
}
