<?php

namespace Vaga;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    public $table = "clinicas";

    public $timestamps = false;

    protected $fillable = [
        'id', 'cnpj', 'nome', 'user_id', 'plano_id'
    ];

    public function usuario()
    {
        return $this->hasMany('Vaga\User');
    }

    public function planos()
    {
        return $this->belongsToMany('Vaga\PlanoDeSaude', 'plano_clinica', 'clinica_id', 'plano_id');
    }
}
