<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RotasHomeTest extends TestCase
{
    /**
     * Testa a rota /home
     * retorna 302 pois é redirecionada
     * 
     * @test
     */
    public function getHomeViewTest()
    {
        $response = $this->get('/home');

        $response->assertStatus(302);
    }

    /**
     * Testa a rota /planos
     * retorna 302 pois é redirecionada
     * 
     * @test
     */
    public function getPlanosViewTest()
    {
        $response = $this->get("/planos");
        
        $response->assertStatus(302);
    }

    /**
     * Testa a rota /clinicas
     * retorna 302 pois é redirecionada
     * 
     * @test
     */
    public function getClinicasViewTest()
    {
        $response = $this->get("/clinicas");
        
        $response->assertStatus(302);
    }
}
