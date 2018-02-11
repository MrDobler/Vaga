<?php

namespace Vaga;

use Illuminate\Database\Eloquent\Model;

class PlanoClinica extends Model
{
    public $table = "plano_clinica";

    protected $fillable = [
        'id', 'clinica_id', 'plano_id'
    ];

}
