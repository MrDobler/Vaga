<?php

namespace Vaga\Http\Controllers;

use Illuminate\Http\Request;
use Vaga\Clinica;

class ClinicaController extends Controller
{
    public function getAllClinicas()
    {
        $clinica = Clinica::all();

        return $clinica;
    }

    public function getClinica($id)
    {
        $clinica = Clinica::find($id);
        return $clinica;
    }

    public function createClinica(Request $req)
    {
        $clinica = Clinica::create($req->all());
    }

    public function updateClinica(Request $req)
    {
        Clinica::find($req->id)->update($req->all());
    }
    
    public function deleteClinica(Request $req)
    {
        Clinica::find($req->id)->delete();
    }
}
