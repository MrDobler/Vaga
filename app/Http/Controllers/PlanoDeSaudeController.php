<?php

namespace Vaga\Http\Controllers;

use Illuminate\Http\Request;
use Vaga\PlanoDeSaude;

class PlanoDeSaudeController extends Controller
{
    public function getAll()
    {
        $plano = PlanoDeSaude::all();
        foreach ($plano as $p) {
            $p['logo'] = base64_encode($p['logo']);
        }

        return response()->json($plano);
    }

    public function getPlano($id)
    {
        $plano = PlanoDeSaude::find($id);
        $plano->logo = base64_encode($plano->logo);
        return $plano;
    }

    public function createPlano(Request $req)
    {
        PlanoDeSaude::create($req->all());
    }

    public function updatePlano(Request $req, $id)
    {
        dd($req->all());
        $x = PlanoDeSaude::where('id', $id);
        $x->update($req->all());
    }
    
    public function deletePlano($id)
    {
        PlanoDeSaude::where('id', $id)->delete();
    }
}
