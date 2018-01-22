<?php

namespace Vaga;

use Illuminate\Database\Eloquent\Model;

class PlanoDeSaude extends Model
{
    public $table = "plano_de_saude";

    public $timestamps = false;

    protected $fillable = [
        'id','nome', 'logo', 'status'
    ];
}
