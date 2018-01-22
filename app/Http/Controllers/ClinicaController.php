<?php

namespace Vaga\Http\Controllers;

use Illuminate\Http\Request;
use Vaga\Clinica;
use Vaga\Http\Requests\ClinicaRequest;

class ClinicaController extends Controller
{
    public function getAll()
    {
        $clinica = Clinica::all();

        return response()->json($clinica);
    }

    public function getClinica($id)
    {
        $clinica = Clinica::where('nome', $id)->get();
        return response()->json($clinica);
    }

    public function createClinica(ClinicaRequest $req)
    {
        $clinica = Clinica::create($req->all());
        return response()->json($clinica);
    }

    public function updateClinica(ClinicaRequest $req)
    {
        Clinica::find($req->id)->update($req->all());
        return Clinica::all();
    }
    
    public function deleteClinica(ClinicaRequest $req)
    {
        Clinica::find($req->id)->delete();
        return response()->json();
    }
}
