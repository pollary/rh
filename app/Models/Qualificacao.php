<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualificacao extends Model
{
    protected $primaryKey = "id"; 
    public $timestamps = true;
    protected $fillable=['descricao'];
}
