<?php

use App\Models\Categoria;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('dadounmaterialetc', function () {
    // Ejecuta las migraciones antes de la prueba
    $this->artisan('migrate');

    $categoria = Categoria::factory()->create();

        // Define the payload for the new material
        $payload = [
            'codigo' => 123,
            'unidad_medida' => 'kg',
            'descripcion' => 'Material de prueba',
            'ubicacion' => 'Almacén A',
            'categoria_id' => $categoria->id,
        ];

        // Ensure the material does not exist in the database
        $this->assertDatabaseMissing('materials', [
            'codigo' => $payload['codigo'],
        ]);

        // Send a POST request to the endpoint
        $response = $this->postJson('/api/materials', $payload);

        // Assert the response status is 201 (Created)
        $response->assertStatus(201);

        // Assert the material now exists in the database
        $this->assertDatabaseHas('materials', [
            'codigo' => $payload['codigo'],
            'unidad_medida' => $payload['unidad_medida'],
            'descripcion' => $payload['descripcion'],
            'ubicacion' => $payload['ubicacion'],
            'categoria_id' => $payload['categoria_id'],
        ]);
});
