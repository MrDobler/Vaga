<?php

namespace Vaga\Http\Controllers;

use Illuminate\Http\Request;
use Vaga\PlanoDeSaude;
use Vaga\Clinica;

class PlanoClinicaController extends Controller
{
    public function getPlanosEmClinicas($id)
    {
        try {
            $plano = PlanoDeSaude::find($id);
            
            foreach ($plano->clinicas as $c) {
                $listaPlanosEmClinicas = $c;
            }
    
            return response()->json($listaPlanosEmClinicas);
        } catch(\Exception $e) {
            throw new \Exception('Bad Request - 400', 400);
        }
    }

    public function createPlanosEmClinicas($planoId, $clinicaId)
    {
        try {
            $plano = PlanoDeSaude::find($planoId);
            $clinica = Clinica::find($clinicaId);
            $plano->clinicas()->attach($clinica);

            return response()->json(201);
        } catch(\Exception $e) {
            throw new \Exception('Error: 500 - Internal Server Error', 500); 
        }
    }

    public function deletePlanosEmClinicas($planoId, $clinicaId)
    {
        try {
            $plano = PlanoDeSaude::find($planoId);
            $plano->clinicas()->detach($clinicaId);

            return response()->json(200);
        } catch(\Exception $e) {
            throw new \Exception('Error: 500 - Internal Server Error', 500); 
        }
    }
}
