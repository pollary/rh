<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    public $timestamps = true;
    protected $fillable=['departamento','nome','assunto','descricao','telefone'];
}

/*
        $chamado->status = 'normal';
        $chamado->resolvido = 'Não';
        $chamado->prioridade = 'Normal';
*/