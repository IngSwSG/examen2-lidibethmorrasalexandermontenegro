<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materials = Material::with('categoria')->get();
        return response()->json($materials);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
            'codigo' => 'required|integer',
            'unidad_medida' => 'required|string',
            'descripcion' => 'required|string',
            'ubicacion' => 'required|string',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $material = Material::create($request->all());
        return response()->json($material, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'codigo' => 'integer',
            'unidad_medida' => 'string',
            'descripcion' => 'string',
            'ubicacion' => 'string',
            'categoria_id' => 'exists:categorias,id',
        ]);

        $material = Material::findOrFail($id);
        $material->update($request->all());
        return response()->json($material);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
