<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Vaga\PlanoDeSaude;

class RotasPlanoClinicaTest extends TestCase
{
    /**
     * Testa a rota /getPlanosEmClinicas/{id}
     * 
     * @test
     */
    public function getPlanosEmClinicas()
    {
        $plano = PlanoDeSaude::first();
        $response = $this->get("/getPlanosEmClinicas/$plano->id");

        $response->assertStatus(200);
    }
}
