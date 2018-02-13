<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Vaga\Clinica;

class RotasClinicaTest extends TestCase
{
    /**
     * Testa a rota /getAllClinicas
     * 
     * @test
     */
    public function getAllClinicasTest()
    {
        $response = $this->get('/getAllClinicas');

        $response->assertStatus(200);
    }

    /**
     * Testa a rota /getPlano/{id}
     * 
     * @test
     */
    public function getPlano()
    {
        $clinica = Clinica::first();
        $response = $this->get("/getClinica/$clinica->id");
        
        $response->assertStatus(200);
    }
}
