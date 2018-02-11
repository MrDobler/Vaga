<?php

namespace Vaga\Http\Controllers;

use Illuminate\Http\Request;
use Vaga\PlanoDeSaude;
use Validator;

class PlanoDeSaudeController extends Controller
{
    public function getAllPlanos()
    {
        $plano = PlanoDeSaude::all();
        return response()->json($plano);
    }

    public function getPlano($id)
    {
        $plano = PlanoDeSaude::find($id);
        return $plano;
    }

    public function createPlano(Request $req)
    {
        $dados = $req->all();

        if ($req->hasFile('logo')) {
            $logo = $req->file('logo');
            $num = rand(000,999);
            $dir = "imagens/logos/";
            $extensao = $logo->guessClientExtension();
            $nomeLogo = "logo_".$num.".".$extensao;
            $logo->move($dir, $nomeLogo);
            $dados['logo'] = $dir."/".$nomeLogo;
        }

        PlanoDeSaude::create($dados);
    }

    public function updatePlano(Request $req, $id)
    {
        $dados = $req->all();

        if ($req->hasFile('logo')) {
            $logo = $req->file('logo');
            $num = rand(000,999);
            $dir = "imagens/logos/";
            $extensao = $logo->guessClientExtension();
            $nomeLogo = "logo_".$num.".".$extensao;
            $logo->move($dir, $nomeLogo);
            $dados['logo'] = $dir."/".$nomeLogo;
        }

        $plano = PlanoDeSaude::find($id);
        $plano->update($dados);
    }
    
    public function deletePlano($id)
    {
        PlanoDeSaude::where('id', $id)->delete();
    }
}
