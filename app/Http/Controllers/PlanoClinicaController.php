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

    public function createPlanosEmClinicas($planoId, $clinicaId)
    {
        $plano = PlanoDeSaude::find($planoId);
        $clinica = Clinica::find($clinicaId);

        $plano->clinicas()->attach($clinica);
    }

    public function deletePlanosEmClinicas($planoId, $clinicaId)
    {
        $plano = PlanoDeSaude::find($planoId);
        $clinica = Clinica::find($clinicaId);
        
        $plano->clinicas()->detach($clinicaId);
    }
}
