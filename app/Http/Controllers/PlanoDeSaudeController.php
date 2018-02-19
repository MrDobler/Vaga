<?php

namespace Vaga\Http\Controllers;

use Illuminate\Http\Request;
use Vaga\PlanoDeSaude;
use Validator;

class PlanoDeSaudeController extends Controller
{
    public function getAllPlanos()
    {
        try {
            $plano = PlanoDeSaude::all();
        } catch (\Exception $e) {
            throw new \Exception('Error: 500 - Internal Server Error', 500);
        }
        return response()->json($plano);
    }

    public function getPlano($id)
    {
        $plano = PlanoDeSaude::where('id', $id)->get();
        if (count($plano) === 0)
            throw new \Exception('Bad Request - 400', 400);
          
        return response()->json($plano, 200);
    }

    public function createPlano(Request $req)
    {
        try {
            $dados = $req->all();
    
            //Ainda para implementar
            // $validator = Validator::make($dados, [
            //     $dados['nome'] => 'required',
            //     $dados['logo'] => 'required|dimensions:width=150,height=150',
            //     $dados['status'] => 'required'
            // ]);
    
            // if($validator->fails()) {
            //     return redirect('/planos')
            //         ->withErrors($validator);
            // }
    
            if ($req->hasFile('logo')) {
                $logo = $req->file('logo');
                $num = rand(000,999);
                $dir = "imagens/logos";
                $extensao = $logo->guessClientExtension();
                $nomeLogo = "logo_".$num.".".$extensao;
                $logo->move($dir, $nomeLogo);
                $dados['logo'] = $dir."/".$nomeLogo;
            }
    
            PlanoDeSaude::create($dados);
            
            return response()->json(201);
        } catch (\Exception $e) {
            throw new \Exception('Error: 500 - Internal Server Error', 500);
        }
    }

    public function updatePlano(Request $req, $id)
    {
        try {
            $dados = $req->all();
    
            if ($req->hasFile('logo')) {
                $logo = $req->file('logo');
                $num = rand(000,999);
                $dir = "imagens/logos";
                $extensao = $logo->guessClientExtension();
                $nomeLogo = "logo_".$num.".".$extensao;
                $logo->move($dir, $nomeLogo);
                $dados['logo'] = $dir."/".$nomeLogo;
            }
            $plano = PlanoDeSaude::find($id);
            $plano->update($dados);
            
            return response()->json(200);
        } catch(\Exception $e) {
            throw new \Exception('Error: 500 - Internal Server Error', 500);
        }
    }
    
    public function deletePlano($id)
    {
        try {
            PlanoDeSaude::where('id', $id)->delete();
            
            return response()->json(200);
        } catch(\Exception $e) {
            throw new \Exception('Error: 500 - Internal Server Error', 500);
        }
    }
}
