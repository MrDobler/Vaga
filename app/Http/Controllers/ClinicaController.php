<?php

namespace Vaga\Http\Controllers;

use Illuminate\Http\Request;
use Vaga\Clinica;
use Auth;

class ClinicaController extends Controller
{
    public function getAllClinicas()
    {
        try {
            $userId = Auth::user()->id;
            $clinicas = Clinica::where('user_id', $userId)->get();
            
            return response()->json($clinicas, 200);
        } catch(\Exception $e) {
            throw new \Exception('Internal Server Error', 500);
        }
    }

    public function getClinica($id)
    {
        $clinica = Clinica::where('id', $id)->get();
        if (count($clinica) === 0)
            throw new \Exception('Bad Request', 400);
        
        return response()->json($clinica);
    }

    public function createClinica(Request $req)
    {
        try {
            Clinica::create($req->all());
            
            return response()->json(201);
        } catch(\Exception $e) {
            throw new \Exception('Internal Server Error', 500);
        }
    }

    public function updateClinica(Request $req)
    {
        try {
            Clinica::find($req->id)->update($req->all());
            
            return response()->json(200);
        } catch(\Exception $e) {
            throw new \Exception('Bad Request', 400);
        }

    }
    
    public function deleteClinica(Request $req)
    {
        try{
            Clinica::find($req->id)->delete();
            
            return response()->json(200);
        } catch(\Exception $e) {
            throw new \Exception('Internal Server Error', 500);
        }
    }
}
