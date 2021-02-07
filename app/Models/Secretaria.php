<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    protected $primaryKey = "id"; 
    public $timestamps = true;
    protected $fillable=['descricao'];
}
