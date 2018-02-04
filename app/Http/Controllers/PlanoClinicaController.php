<?php

namespace Vaga\Http\Controllers;

use Illuminate\Http\Request;
use Vaga\PlanoDeSaude;
use Vaga\Clinica;

class PlanoClinicaController extends Controller
{
    public function getPlanosEmClinicas($id)
    {
        $plano = PlanoDeSaude::all()->where('id', $id);
        $result = $plano->clinicas()->all();
        
        return response()->json($result);
    }

    public function createPlanosEmClinicas($plano_id, $clinica_id)
    {
        $plano = PlanoDeSaude::find($plano_id);
        $clinica = Clinica::find($clinica_id);

        $plano->clinicas()->attach($clinica);
    }
}
