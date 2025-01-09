<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProdutoTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_endpoint_get_by_id(): void{
        $response = $this->get('/api/produtos/1');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' => [
                'id',
                'nome',
                'preco',
                'quantidade',
            ]
        ]);
    }

    public function test_endpoint_get_all(): void{
        $response = $this->get('/api/produtos/1');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' => [
                'id',
                'nome',
                'preco',
                'quantidade',
            ]
        ]);
    }
}
