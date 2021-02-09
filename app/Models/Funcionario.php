<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vinculo;
use Carbon\Carbon;

class Funcionario extends Model
{
    protected $primaryKey = "id"; 
    public $timestamps = true;
    protected $fillable=['matricula','nome','cpf','secretaria','vinculo','pis','cargo','vencimentos','telefone','observacao','qualificacao','admissao'];
    //Apenas os Modificaveis.

    public function _vinculo()
    {
        return $this->hasOne("App\Models\Vinculo", "id");
    }
    public function _secretaria()
    {
        return $this->hasOne("App\Models\Secretaria", "id");
    }
    public function _cargo()
    {
        return $this->hasOne("App\Models\Cargo", "id");
    }
    public function _qualificacao()
    {
        return $this->hasOne("App\Models\Qualificacao", "id");
    }
    public function getDataAdmissaoAttribute()
    {
        $datetime = new Carbon($this->admissao);
        return $datetime->format('d/m/Y');
    }

}
