<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public $timestamps = true;
    protected $fillable=['matricula','nome','cpf','secretaria','vinculo','pis','cargo','vencimentos']; //Apenas os Modificaveis.
}
