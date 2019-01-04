<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'name',
        'autor',
        'userId',
        'descricao',
        'arquivo'
    ];

    protected $table = 'projetos';
}
