<?php

namespace Vaga;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    public $table = "clinicas";

    public $timestamps = false;

    protected $fillable = [
        'id', 'cnpj', 'nome', 'user_id'
    ];

    public function usuario()
    {
        return $this->hasMany('Vaga\User');
    }
}
