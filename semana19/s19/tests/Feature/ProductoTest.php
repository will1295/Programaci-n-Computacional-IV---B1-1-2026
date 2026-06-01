<?php

namespace Tests\Feature;
use App\Models\Producto;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductoTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    /*public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /*public function test_crear_producto(){
        $response=$this->postJson(
            '/api/productos',
            [
                'nombre'=>'manzana',
                'precio'=>1.00,
                'stock'=>5
            ]
        );
        $response->assertStatus(201);

        $this->assertDatabaseHas(
            'productos',
            [
                'nombre'=>'manzana'
            ]
        );
    }*/

    public function test_ver_productos(){
        Producto::factory()
        ->count(200)
        ->create();

        $response = $this->getJson('/api/productos');
        $response->assertStatus(200);
        $response->assertJsonCount(200);
    }

        
}
