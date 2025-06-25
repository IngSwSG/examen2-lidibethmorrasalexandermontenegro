<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ItemRequisicion;
use App\Models\Categoria;
use App\Models\MaterialUnidad;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'unidadMedida',
        'descripcion',
        'ubicacion',
    ];

    public function items()
    {
       // return $this->hasMany(ItemRequisicion::class, 'material_id');
    }

    public function categoria()
    {
        //return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function unidades()
    {
        //return $this->hasMany(MaterialUnidad::class, 'material_id');
    }
}
