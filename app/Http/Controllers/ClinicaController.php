<?php

namespace Vaga\Http\Controllers;

use Illuminate\Http\Request;
use Vaga\Clinica;

class ClinicaController extends Controller
{
    public function getAll()
    {
        $clinica = Clinica::all();

        return response()->json($clinica);
    }

    public function getClinica($id)
    {
        $clinica = Clinica::where('id', $id)->get();
        return response()->json($clinica);
    }

    public function createClinica(Request $req)
    {
        $clinica = Clinica::create($req->all());
        return response()->json($clinica);
    }

    public function updateClinica(Request $req)
    {
        Clinica::find($req->id)->update($req->all());
        return Clinica::all();
    }
    
    public function deleteClinica(Request $req)
    {
        Clinica::find($req->id)->delete();
        return response()->json();
    }
}
