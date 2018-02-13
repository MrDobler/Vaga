<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Vaga\PlanoDeSaude;

class RotasPlanoDeSaudeTest extends TestCase
{
    /**
     * Testa a rota /getAllPlanos
     * 
     * @test
     */
    public function getAllPlanosTest()
    {
        $response = $this->get('/getAllPlanos');

        $response->assertStatus(200);
    }

    /**
     * Testa a rota /getPlano/{id}
     * 
     * @test
     */
    public function getPlano()
    {
        $plano = PlanoDeSaude::first();
        $response = $this->get("/getPlano/$plano->id");
        
        $response->assertStatus(200);
    }
}
