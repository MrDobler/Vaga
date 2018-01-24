<?php

namespace Vaga\Http\Controllers;

use Illuminate\Http\Request;
use Vaga\PlanoDeSaude;
use Vaga\PlanoClinica;

class PlanoClinicaController extends Controller
{
    public function getPlanosEmClinicas($id)
    {
        $plano = new PlanoDeSaude();
        $result = PlanoDeSaude::find($id)->plano_clinica;

        return response()->json($result);
    }

    public function createPlanosEmClinicas(Request $req)
    {
        PlanoClinica::create($req->all())->plano_clinica;
    }
}
