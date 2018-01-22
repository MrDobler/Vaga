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
        return response()->json($plano);
    }

    public function createPlano(Request $req)
    {
        PlanoDeSaude::create($req->all());
    }

    public function updatePlano(Request $req)
    {
        PlanoDeSaude::find($req->id)->update($req->all());
    }
    
    public function deletePlano($id)
    {
        PlanoDeSaude::where('id', $id)->delete();
    }
}
