<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCurso extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'valor',
        'imagem',
        'publicado',
    ];
}
